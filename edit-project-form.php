<?php
session_start();
if (isset($_POST["ProjectID"]) && isset($_POST["ProjectName"])&& isset($_POST["Description"])&&isset($_POST["Start_Date"])&& isset($_POST["PEnd_Date"]) && isset($_POST["EngineerID"])&& isset($_POST["Client_D"])&& isset($_POST["Location"])&& isset($_POST["Scope"])&& isset($_POST["PlotArea"])&& isset($_POST["Built-Up_Area"])){
    $ProjectIDD=$_POST["ProjectID"];
    $ProjectName=$_POST["ProjectName"];
    $Description=$_POST["Description"];
    $SDate=$_POST["Start_Date"];
    $EDate=$_POST["PEnd_Date"];
    $EngineerID=$_POST["EngineerID"];
    $ClientID=$_POST["Client_D"];
    $Location=$_POST["Location"];
    $Scope=$_POST["Scope"];
    $PArea=$_POST["PlotArea"];
    $BArea=$_POST["Built-Up_Area"];
    try {
        $date1 = '10-05-2023';
        $date2 = '15-05-2023';

// Convert date strings to DateTime objects in YYYY-MM-DD format
        $dateObj1 = DateTime::createFromFormat('d-m-Y', $SDate);
        $dateObj2 = DateTime::createFromFormat('d-m-Y', $EDate);



// Calculate the difference between two dates
        $diff = strtotime($dateObj2) - strtotime($dateObj1);

// Convert the difference to days
        $days = floor($diff / (60 * 60 * 24));
        $db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
        $qryS = "UPDATE `projects` SET `Project_ID`='" . $ProjectIDD . "', `Project_Name`='" . $ProjectName ."', `Description`='" . str_replace("'", "\\'", $Description) . "', `Start_Date`='" . $SDate . "', `End_Date`='" . $EDate . "', `Engineer_ID`='" . $EngineerID ."', `Client_ID`='".$ClientID."', `Location`='".$Location."', `Scope`='".$Scope."', `Plot_Area`='".$PArea."', `Built-Up_Area`='".$BArea."', `duration`='".$days."' WHERE `Project_ID` ='" . $_SESSION["selected_card_id"] . "'";


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
