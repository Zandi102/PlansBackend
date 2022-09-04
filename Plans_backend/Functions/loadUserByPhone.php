<?php

//importing required script
require_once '../includes/DbOperation.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $phoneNumber = $_GET['phone'];

    $db = new DbOperation();

    $response = $db->loadUserByPhone($phoneNumber);
    
} else {
    $response['error'] = true;
    $response['message'] = 'Invalid request';
}

echo json_encode($response);

?>