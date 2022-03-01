<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json');
echo $id=$_GET['id'];
// include'config.php';
// $query="SELECT * FROM crud WHERE id={}";
// $res=mysqli_query($conn,$query) or die('error query');
// if(mysqli_num_rows($res)>0)
// {
//     while($row=mysqli_fetch_assoc($res))
//     {
//         $data[]=$row;
//     }
//     echo json_encode(array('message'=>$data));
// }
// else{
//     echo json_encode(array('message'=>'error'));
// }


?>