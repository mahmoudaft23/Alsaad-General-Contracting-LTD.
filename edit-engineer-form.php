<?php
session_start();
if (isset($_POST["Engineer_ID"]) && isset($_POST["Engineer_Name"])&& isset($_POST["Email"])&&isset($_POST["Password"])&& isset($_POST["PhoneNumber"]) && isset($_POST["Sex"])&& isset($_POST["ManagerID"]) &&isset($_POST["Specialization"])){
    $Engineer_Name=$_POST["Engineer_Name"];
    $Engineer_ID=$_POST["Engineer_ID"];
    $PhoneNumber=$_POST["PhoneNumber"];
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $ManagerID=$_POST["ManagerID"];
    $Sex=$_POST["Sex"];
    $Specialization=$_POST["Specialization"];
    try {
        $db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
//        $qryS = "UPDATE `client` SET `Client_ID`=" . $Client_ID . ",`Name` =" . $Name . ",`Email`=" . $Email . ",`Engineer_ID`=" . $Engineer_ID . ",`Password`=" . sha1($Password) . ",`Stat`=" . $Stat . " WHERE `client`.`Client_ID` =" . $_SESSION["selected_card_id"];
        $qryS = "UPDATE `Engineers` SET `Engineer_ID`=" . $Engineer_ID . ",`Name` =" . $PhoneNumber .",`Name` ='" . $Engineer_Name . "',`Manager_ID`=" . $ManagerID . ",`Email`='".$Email."',`Password`='" . sha1($Password) ."',`Sex`='".$Sex."',`Specialization`='".$Specialization."' WHERE `engineers`.`Engineer_ID` =" . $_SESSION["selected_card_id"];
        $res = $db->query($qryS);
        $db->close();
        ?>
        <script>
            window.onload = function() {
                setTimeout(function(){
                    console.log('Reloading page...');
                    location.reload();
                }, 1000);
            };
        </script>
        <?php
    }
    catch(Exception $exp){
        echo "Error: " . $exp->getMessage();
    }
}
?>
