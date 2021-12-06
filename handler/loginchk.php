<?php 
header('Content-Type: application/json');
include('function.php');
    $email =$_POST["emailID"];
   $password =$_POST["password"];
    include_once 'db.php';
    $Select = $db->query("SELECT * from register where email='" . $email. "' && password='"  . $password . "'");

    if ($Select > 0) 
    {
	    deliver_response(200,'ok',"Found");	
	} 
	else 
	{
    	deliver_response(200,'error',"Not found");
    }
 
$db->close();

?>