<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
// header('Content-Type: application/json');
$entityBody = file_get_contents('php://input');
$obj_data=json_decode($entityBody);
print_r($obj_data);
// if(!empty($entityBody.name))
// {
//     // echo $id=strtoupper(uniqid());
// }
// include'config.php';
// $query="SELECT * FROM crud";
// $res=mysqli_query($conn,$query) or die('error query');
// if(mysqli_num_rows($res)>0)
// {
//     while($row=mysqli_fetch_assoc($res))
//     {
//         $data[]=$row;
//     }
// }

// echo json_encode($data);
// ?>