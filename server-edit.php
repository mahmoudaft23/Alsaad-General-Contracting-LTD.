
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
        $_SESSION["type"]="engineer";
        $_SESSION["email"] = $row1[2];
        $_SESSION["password"] = sha1($row1[3]);
        $_SESSION["phonenumber"] = $row1[4];
        $_SESSION["specialization"] = $row1[5];
        $_SESSION["sex"] = $row1[6];
        $_SESSION["manager_id"] = $row1[7];
        break;
    }
}
$qryS1 = "SELECT * FROM `client`";
$res1 = $db->query($qryS1);

while ($row1 = $res1->fetch_array()) {
    if ($row1[0] == $selectedCardId && $row1[1]==$selectedCardName) {
        $_SESSION["type"]="client";
        $_SESSION["email"] = $row1[2];
        $_SESSION["password"] = sha1($row1[3]);
        $_SESSION["engineer_id"] = $row1[4];
        $_SESSION["stat"] = $row1[5];
        break;
    }
}
$qryS1 = "SELECT * FROM `staff`";
$res1 = $db->query($qryS1);
while ($row1 = $res1->fetch_array()) {
    if ($row1[0] == $selectedCardId && $row1[1]==$selectedCardName) {
        $_SESSION["type"]="staff";
        $_SESSION["engineer_id"] = $row1[2];
        $_SESSION["location"] = $row1[3];
        break;
    }
}
if (isset($_SESSION["type"])) {
    switch($_SESSION["type"]){
        case "engineer":
            $file_to_include= 'modal-engineer.php';
            break;
        case "client":
            $file_to_include= 'modal-client.php';
            break;
        case "staff":
            $file_to_include= 'modal-staff.php';
            break;
        default:
            break;
    }
    // Output contents of included file
    if (!empty($file_to_include)) {
        ob_start();
        include $file_to_include;
        $content = ob_get_clean();
        echo $content;
    }
}
?>