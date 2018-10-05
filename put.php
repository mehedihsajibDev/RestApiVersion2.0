<?php
header('content-type:application/json');
$requesthree=$_SERVER['REQUEST_METHOD'];

switch ($requesthree) {
	
		 
		 case 'PUT':
		 $data=json_decode(file_get_contents('php://input'),true);
		 putmethod($data);
		 break;
		// case 'DELETE':
		// $data=json_decode(file_get_contents('php://input'),true);
		// deletmethod($data);
		// break;
	

	 default:
	 	echo '{"name": "data not found"}';
	 	break;
}
  
  function putmethod($data){

 	include "conection.php";
 	$id=$data['id'];
 	$name=$data["name"];
 	$email=$data["email"];
 	$sql= " UPDATE learnhunter SET name='$name',email='$email',created_at=NOW() where id='$id' ";
 	if(mysqli_query($conn,$sql)){
 		echo '{"result":"update is successful"}';
 	}
 	else{
      echo '{"result":"update is not successful"}';
 	}
 }
 