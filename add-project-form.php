<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ProjectID"]) && isset($_POST["ProjectName"]) && isset($_POST["Description"]) && isset($_POST["Start_Date"]) && isset($_POST["PEnd_Date"]) && isset($_POST["EngineerID"]) && isset($_POST["Client_D"]) && isset($_POST["Location"]) && isset($_POST["Scope"]) && isset($_POST["PlotArea"]) && isset($_POST["Built-Up_Area"])) {
    // rest of the code



    $ProjectID=$_POST["ProjectID"];
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
    $qryS ="";
    try {

// Convert date strings to DateTime objects in YYYY-MM-DD format
        // Convert date strings to DateTime objects in YYYY-MM-DD format
        $dateObj1 = DateTime::createFromFormat('Y-m-d', $SDate);
        $dateObj2 = DateTime::createFromFormat('Y-m-d', $EDate);




// Calculate the difference between two dates
        $diff = $dateObj2->getTimestamp() - $dateObj1->getTimestamp();


// Convert the difference to days
        $days = floor($diff / (60 * 60 * 24));
        $db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
        $qryS = "INSERT INTO projects (Project_ID, Project_Name, Description, Start_Date, End_Date, Engineer_ID, Client_ID, Location, Scope, Plot_Area, `Built-Up_Area`, duration) 
VALUES ('".$ProjectID."', '".$ProjectName."', '".mysqli_real_escape_string($db, $Description)."', '".$SDate."', '".$EDate."', '".$EngineerID."', '".$ClientID."', '".$Location."', '".$Scope."', '".$PArea."', '".$BArea."', '".$days."')";

        $res= $db->query($qryS);
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
        echo "SQL: ".$qryS;
    }
}
?>
