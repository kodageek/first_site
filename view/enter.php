<?php

$json=file_get_contents("php://input");
$data=json_decode($json,true);
// echo $data;

$response=[];
try{
  $stmt=$conn->prepare("SELECT * FROM user WHERE name=:nm");
  $stmt->bindparam(":nm",$data);
  $stmt->execute();
  if($stmt->rowcount() > 0){
    $statement=$conn->prepare("SELECT * FROM user WHERE name=:nm");
    $statement->bindparam(":nm",$data);
    $statement->execute();
    $row=$statement->fetch(PDO::FETCH_BOTH);
    $response["user"]=$row["name"];
    $response["created"]=true;

  }else{
    $response[" not  found"]=true;
}
$response['success']="All is well";
}catch(Exception $e){
  $response['failed']=true;
}
$res=json_encode($response);
echo $res;
 ?>
