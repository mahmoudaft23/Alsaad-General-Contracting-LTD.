
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
    if ($row1[0] == $selectedCardId) {
        $_SESSION["projectname"] = $row1[1];
        $_SESSION["projectdescription"] = $row1[2];
        $_SESSION["endDate"] = $row1[4];
        $_SESSION["projectclient"] = $row1[6];
        $_SESSION["projecteng"] = $row1[5];
        $_SESSION["projectlocation"] = $row1[7];
        $_SESSION["projectscope"] = $row1[8];
        $_SESSION["projectplotarea"] = $row1[9];
        $_SESSION["projectbuiltarea"] = $row1[10];
        $_SESSION["projectduration"] = $row1[11];
        break;
    }
}

$qryS1 = "SELECT * FROM `client`";
$res1 = $db->query($qryS1);

while ($row11 = $res1->fetch_array()) {
    if ($row11[0] == $_SESSION["projectclient"]) {
        $_SESSION["ClientName"] = $row11[1];
        break; // add this to stop the loop once the matching row is found
    }
}
?>