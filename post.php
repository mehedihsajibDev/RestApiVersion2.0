<?php
header('content-type:application/json');
$requestwo=$_SERVER['REQUEST_METHOD'];

switch ($requestwo) {
	
		 case 'POST':
		 $data=json_decode(file_get_contents('php://input'),true);
		 postmethod($data);
		 break;
		// case 'PUT':
		// $data=json_decode(file_get_contents('php://input'),true);
		// putmethod($data);
		// break;
		// case 'DELETE':
		// $data=json_decode(file_get_contents('php://input'),true);
		// deletmethod($data);
		// break;
	

	 default:
	 	echo '{"status":0,"message":"Sorry you entered Invalid Data","data":""}';
	 	break;
}
  
  function postmethod($data){

 	include "conection.php";
 	$name=$data["name"];
 	$email=$data["email"];
 	$sql= "INSERT INTO learnhunter(name,email,created_at) VALUES('$name','$email',NOW())";
 	if(mysqli_query($conn,$sql)){
 		echo '{"result":"data is inserted"}';
 	}
	else{
      echo '{"result":"data is not inserted"}';
 	}
 }
 
