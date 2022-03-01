<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Origin');
if(!empty($_GET['id']))
{
    include 'config.php';
    $query="DELETE FROM crud WHERE id='{$_GET['id']}'";
    if(mysqli_query($conn,$query))
    {
        echo json_encode(array('message'=>'ok'));
    }
    else
    {
        echo json_encode(array('message'=>'error'));
    }
}
else
{
    echo json_encode(array('message'=>'went wrong'));
}



 ?>