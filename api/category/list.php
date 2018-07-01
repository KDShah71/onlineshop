<?php
    include "../../config/database.php";

    $result = $conn->query("SELECT * FROM `category`");

    $response = [];

    if(!$result){
        $response['status']="error";
        $response['message']="unable to fetch data";
        $response['data']=[];
        echo json_encode($response);
        die();
    }

    $resultArray=[];

    while ($row = mysqli_fetch_assoc($result)) {
        $resultArray[] = $row;
    }

    $response['status']="success";
    $response['data']=$resultArray;

    header('Content-type: application/json');

    echo json_encode($response);
