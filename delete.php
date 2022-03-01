<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Content-Type: application/json');
// header('Access-Control-Allow-Headers: Content-Type');
print_r($_GET);
// $entityBody = json_decode(file_get_contents('php://input'));
// // print_r($entityBody);
// include 'config.php';
// if($entityBody->name)
// {
//     $check="SELECT * FROM crud WHERE name='{$entityBody->name}'";
//     $count=mysqli_query($conn,$check) or die('error');
//     if(mysqli_num_rows($count)==0)
//     {
//          $id=strtoupper(uniqid());
//     $query="INSERT INTO crud(name,idnumber) VALUES ('{$entityBody->name}','{$id}')";
//     if(mysqli_query($conn,$query) or die('error query'))
//     {
//         echo json_encode(array('message'=>'ok'));
//     }
//     else{
//         echo json_encode(array('message'=>'error'));
//     }

//     }
//     else
//     {
//         echo json_encode(array('message'=>'already there'));
//     }
    

// }
// else
// {
//     echo json_encode(array('message'=>'went wrong'));
// }


 ?>