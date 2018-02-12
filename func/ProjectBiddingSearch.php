<?php
session_start();
require("AjaxSave.php");
require("inc/connect.php");

$response = array();
$mode = $_POST['mode'];
$arr = $_POST;

switch ($mode)
{
    case 'load_auction_list' :
        $response = load_auction_list($arr);
    break;
}

echo json_encode($response);

?>