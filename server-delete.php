
<?php
session_start();
if (!isset($_SESSION["isUser"]) || !$_SESSION["isUser"]) {
    header("Location:login.php");
    exit(); // add this to prevent the rest of the code from executing
}

if (isset($_POST["cardId"])) {
    $_SESSION["selected_card_id"] = $_POST["cardId"];
}
if (isset($_POST["cardName"])) {
    $_SESSION["selected_card_name"] = $_POST["cardName"];
}

$selectedCardId = $_SESSION["selected_card_id"];
$selectedCardName= $_SESSION["selected_card_name"];

$db = new mysqli('localhost', 'root', '', 'alsaadcompany_db');
$qryS = "SELECT * FROM `engineers`";
$res = $db->query($qryS);

while ($row1 = $res->fetch_array()) {
    if ($row1[0] == $selectedCardId && $row1[1]==$selectedCardName) {
        $qrySD="DELETE FROM `engineers` WHERE `Engineer_ID`=".$row1[0];
        $resD= $db->query($qrySD);
        $db->close();
        break;
    }
}
$qryS1 = "SELECT * FROM `client`";
$res1 = $db->query($qryS1);

while ($row1 = $res1->fetch_array()) {
    if ($row1[0] == $selectedCardId && $row1[1]==$selectedCardName) {
        $qrySD="DELETE FROM `client` WHERE `Client_ID`=".$row1[0];
        $resD= $db->query($qrySD);
        $db->close();
        break;
    }
}
$qryS1 = "SELECT * FROM `staff`";
$res1 = $db->query($qryS1);
while ($row1 = $res1->fetch_array()) {
    if ($row1[0] == $selectedCardId && $row1[1]==$selectedCardName) {
        $qrySD="DELETE FROM `staff` WHERE `Staff_ID`=".$row1[0];
        $resD= $db->query($qrySD);
        $db->close();
        break;
    }
}
?>