<?php
$response=[];
try{

// $stmt = $conn->prepare("SELECT * FROM message");
// $stmt->bindparam(":uid",$_POST['user_id']);
// $stmt->execute();
// $row = $stmt->fetch(PDO::FETCH_ASSOC);

//   if($stmt->rowCount() > 0){
//     echo "I got to reload";
// 	  $response['available'] = true;
// // /	  $response['data']=$row;
//   }else{
// 	  $response['message']="This User doesnt exist on our record";
//   }

$response['success']= true;
}catch(Exception $e){
	$response['failed']= "Something Went wrong";
}
$res= json_encode($response);
echo $res;
?>
