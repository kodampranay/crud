<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods');
 $entityBody = json_decode(file_get_contents('php://input'));
//  print_r($_GET);
//  print_r($entityBody);

if(!empty($entityBody->name)&&!empty($_GET['id'])&&strlen($entityBody->name)<256)
{
    $id=$_GET['id'];
include'config.php';
$query="UPDATE  crud SET name='{$entityBody->name}' WHERE id='{$id}'";
if(mysqli_query($conn,$query) or die('error query'))
{
    echo json_encode(array('message'=>'ok'));
}

else{
    echo json_encode(array('message'=>'error'));
}

}

else{
    echo json_encode(array('message'=>'went wrong'));
}



?>