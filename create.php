<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');
$entityBody = json_decode(file_get_contents('php://input'));

if(!empty($entityBody['name']))
{
    $id=strtoupper(uniqid());
    $query="INSERT INTO crud(name,idnumber) VALUES ('{$entityBody['name']}',{$id})";
    if(mysqli_query($conn,$query) or die('error query'))
    {
        echo json_encode(array('message'=>'ok'));
    }
    else{
        echo json_encode(array('message'=>'error'));
    }
}

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