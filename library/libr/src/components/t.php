<?php
$data = json_decode(file_get_contents('php://input'), true);
$request = $data->request;
if($request == 1){
  // echo "u";
    $username = $data->username;
    $password = $data->password;    
    if($username=='test'&&$password=='test'){    
        $response[] = array('status'=>1);
        echo "yes";
    }else{    
      $response[] = array('status'=>2);
      echo "no";
    }
    echo json_encode($response);
    exit;
}

?>