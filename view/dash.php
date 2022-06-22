<?php

$response=[];
try{
  $stmt=$conn->prepare("SELECT * FROM message");
  $stmt->execute();
  $result=[];
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $result[]=$row;
  };
  $response['success']=true;
  $response['data']=$result;
}catch(Exception $e){
  $response['failed']=false;
}
// echo $result;
$res=json_encode($response);
echo $res;
 ?>
