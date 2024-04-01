
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
        $_SESSION["projectnm"]=$row1[1];
        $_SESSION["description"] = $row1[2];
        $_SESSION["sdate"] = $row1[3];
        $_SESSION["edate"] = $row1[4];
        $_SESSION["eid"] = $row1[5];
        $_SESSION["cid"] = $row1[6];
        $_SESSION["location"] = $row1[7];
        $_SESSION["scope"] = $row1[8];
        $_SESSION["parea"] = $row1[9];
        $_SESSION["barea"] = $row1[10];
        break;
    }
}ob_start();
include "modal-project.php";
$content = ob_get_clean();
echo $content;
?>