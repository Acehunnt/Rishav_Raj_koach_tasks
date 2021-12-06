<?php
function deliver_response($status, $status_massage, $data)
{
  header("HTTP:/1.1 $status $status_massage");
  $response['status']=$status;
  $response['status_massage']=$status_massage;
  $response['data']=$data;

  $json_response=json_encode($response);
  echo $json_response;
}



 ?>