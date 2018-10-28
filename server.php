<?php
    require_once('database.php');
    
    $request_data = file_get_contents('php://input');
    $request_json = json_decode($request_data, true);

    switch($request_json['request']) {
        case 'sign_in':
            sign_in($request_json);
            break;
        case 'sign_up' :
            sign_up($request_json);
            break;
        case 'account_associate' :
            account_associate($request_json);
            break;
        case 'transaction' :
            transaction($request_json);
            break;
        case 'history' :
            transaction_history($request_json);
            break;
        default :
            $result = array();
            $result['respond'] = 'Error';
            $result['message'] = 'Request Type';
            echo json_encode($result);
    }
?>