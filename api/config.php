<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

$conn = new mysqli("localhost", "root", "", "remira");

if(!$conn) die("Connection Error -> " . $conn->connect_error);

define("FILTER_BY", ["name", "description"]);

function clean($v){
    return htmlspecialchars(str_replace(" ","",trim($v)));
}


function checkAPIKey($apiKey){
    $stmt = $GLOBALS["conn"]->prepare("SELECT * FROM `brainrots_apikeys` WHERE `apiKey` = ?");
    $stmt->bind_param("s", $apiKey);
    $stmt->execute();
    return $stmt->get_result()->num_rows != 0;
}

function returnError($msg){
    return json_encode(["success" => false, "error" => $msg]);
}

?>