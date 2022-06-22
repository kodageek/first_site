<?php
$json=file_get_contents("php://input");
$data = json_decode($json,true);

 // echo $data['name'];
$response=[];
try{
  $stmt=$conn->prepare("INSERT INTO message VALUES(NULL,:nm,:mg,NOW(),NOW()) ");
  $stmt->bindparam(":nm",$data['name']);
  $stmt->bindparam(":mg",$data['message']);
  $stmt->execute();
  $response['saved']=true;

}catch(Exception $e){
  $response['failed']=false;
}


$res= json_encode($response);
echo $res;
 ?>
