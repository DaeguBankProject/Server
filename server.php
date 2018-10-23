<?php
    require_once('database.php');
    
    $request_data = file_get_contents('php://input');
    $request_json = json_decode($request_data);

    switch($request_json['request_type']) {
        case 'sign_in':
            break;
    }
?>