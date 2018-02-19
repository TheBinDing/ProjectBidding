<?php
session_start();
require("ProjectBiddingSave.php");
require("../inc/connect.php");

$response = array();
$mode = $_POST['mode'];
$arr = $_POST;

switch ($mode)
{
    case 'load_auction_list' :
        $response = load_auction_list($arr);
    break;
    case 'add_auction' :
        $response = add_auction($arr);
    break;
    case 'load_auction_ae' :
        $response = load_auction_ae($arr);
    break;
    case 'update_auction' :
        $response = update_auction($arr);
    break;
    case 'update_goal' :
        $response = update_goal($arr);
    break;
    case 'load_goal' :
        $response = load_goal($arr);
    break;
    case 'load_goals' :
        $response = load_goals($arr);
    break;
    case 'delete_auction' :
        $response = delete_auction($arr);
    break;
}

echo json_encode($response);

?>