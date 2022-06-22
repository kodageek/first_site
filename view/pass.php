
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

     $response["found"]=true;
  }else{
  $stmt=$conn->prepare("INSERT INTO user VALUES(NULL,:nm,NOW(),NOW())");
  $stmt->bindparam(":nm",$data);
  $stmt->execute();
 $response['success']=true;
}
$response['pass']=true;
}catch(Exception $e){
  $response['failed']=true;
}
$res=json_encode($response);
echo $res;
 ?>
