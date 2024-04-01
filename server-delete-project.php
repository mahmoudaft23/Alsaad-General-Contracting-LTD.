
<?php
session_start();
if (!isset($_SESSION["isUser"]) || !$_SESSION["isUser"]) {
    header("Location:login.php");
    exit(); // add this to prevent the rest of the code from executing
}

if (isset($_POST["cardId"])) {
    $_SESSION["selected_card_id"] = $_POST["cardId"];
}

$selectedCardId = $_SESSION["selected_card_id"];

$db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
$qryS = "SELECT * FROM `projects`";
$res = $db->query($qryS);

while ($row1 = $res->fetch_array()) {
    if ($row1[0] == $selectedCardId ) {
        $qrySD="DELETE FROM `projects` WHERE `Project_ID`=".$row1[0];
        $resD= $db->query($qrySD);
        $db->close();
        break;
    }
}
?>