<?php
session_start();
if (isset($_POST["Staff_ID"]) && isset($_POST["Staff_Name"])&& isset($_POST["Staff_Engineer_ID"])&& isset($_POST["Location"])){
    $Staff_ID=$_POST["Staff_ID"];
    $Staff_Name=$_POST["Staff_Name"];
    $Staff_Engineer_ID=$_POST["Staff_Engineer_ID"];
    $Location=$_POST["Location"];
    try {
        $db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
//        $qryS = "UPDATE `staff` SET `Staff_ID`=" . $Staff_ID . ",`Name` ='" . $Staff_Name . "',`Engineer_ID`=" . $Staff_Engineer_ID . ",`Location`='" . $Location . "' WHERE `staff`.`Staff_ID` =" . $_SESSION["selected_card_id"];
      $qryS="INSERT INTO `staff` (`Staff_ID`, `Name`, `Engineer_ID`, `Location`) VALUES ('$Staff_ID', '$Staff_Name', '$Staff_Engineer_ID', '$Location')";
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
