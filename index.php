<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Methods: GET");
    include 'db-config.php';
    $query="SELECT * FROM crud ";
    $res=mysqli_query($conn,$query) or die('query error');
    if(mysqli_num_rows($res)>0)
    {   $data;
        while($row=mysqli_fetech_assoc($res))
        {
            echo $row['name'];
        }
    }
    // echo json_encode($data);
?>