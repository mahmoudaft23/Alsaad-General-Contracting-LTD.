
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
if (isset($selectedCardId)) {
    switch($selectedCardId){
        case "engineer":
            $file_to_include= 'modal-eng-add.php';
            break;
        case "client":
            $file_to_include= 'modal-client-add.php';
            break;
        case "staff":
            $file_to_include= 'modal-staff-add.php';
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