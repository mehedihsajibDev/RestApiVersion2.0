<?php
header('content-type:application/json');
$requesthree=$_SERVER['REQUEST_METHOD'];

switch ($requesthree) {
	
		 case 'DELETE':
		 $data=json_decode(file_get_contents('php://input'),true);
		 deletmethod($data);
		 break;
	

	 default:
	 	echo '{"name": "data not found"}';
	 	break;
}
function deletmethod($data){

	include "conection.php";
	$id=$data['id'];
	
	$sql= " DELETE FROM learnhunter where id=$id ";
	if(mysqli_query($conn,$sql)){

		echo '{"result":"delete is successful"}';
	}
	else{
     echo '{"result":"delete is not successful"}';
	}
}