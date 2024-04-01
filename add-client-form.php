<?php
session_start();
if (isset($_POST["ClientID"]) && isset($_POST["Name"])&& isset($_POST["Email"])&&isset($_POST["Password"])&& isset($_POST["EngineerID"]) && isset($_POST["Stat"])){
    $Client_ID=$_POST["ClientID"];
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $Engineer_ID=$_POST["EngineerID"];
    $Stat=$_POST["Stat"];
    try {
        $db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
//        $qryS = "UPDATE `client` SET `Client_ID`=" . $Client_ID . ",`Name` =" . $Name . ",`Email`=" . $Email . ",`Engineer_ID`=" . $Engineer_ID . ",`Password`=" . sha1($Password) . ",`Stat`=" . $Stat . " WHERE `client`.`Client_ID` =" . $_SESSION["selected_card_id"];
//        $qryS = "UPDATE `client` SET `Client_ID`=" . $Client_ID . ",`Name` ='" . $Name . "',`Engineer_ID`=" . $Engineer_ID . ",`Email`='".$Email."',`Password`='" . sha1($Password) ."',`Stat`='".$Stat."' WHERE `client`.`Client_ID` =" . $_SESSION["selected_card_id"];
        $qryS = "INSERT INTO `client` (`Client_ID`, `Name`, `Engineer_ID`, `Email`, `Password`, `Stat`) VALUES (" . $Client_ID . ", '" . $Name . "', " . $Engineer_ID . ", '" . $Email . "', '" . sha1($Password) . "', '" . $Stat . "')";
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
