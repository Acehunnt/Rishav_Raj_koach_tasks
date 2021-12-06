<?php 
header('Content-Type: application/json');
//echo $FileType;
include('function.php');
    $email =$_POST["emailID"];
    $number =$_POST["number"];
    $password =$_POST["password"];


    include_once 'db.php';
    
    $insert = $db->query("INSERT register (email,number,password) VALUES ('" . $email. "','"  . $number . "','"  . $password . "')");
    if ($insert > 0) 
    {
	    deliver_response(200,'ok',"Recode updated in database");	
	} 
	else 
	{
    	deliver_response(200,'error',"Recode not updated in database");
    }
 
$db->close();

?>