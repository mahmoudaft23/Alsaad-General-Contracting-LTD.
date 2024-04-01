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
if($selectedCardId=="projects") {
    ob_start();
    include "modal-project-add.php";
    $content = ob_get_clean();
    echo $content;
}