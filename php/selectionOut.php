<?php
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $width = $_POST['width'];
    $height = $_POST['height'];
    $length = $_POST['length'];
    $arcs = $_POST['arcs'];
    $base = $_POST['base'];

    $request = "SELECT * FROM `catalog_product` WHERE ";


    $response = [
        "status" => false,
        "type" => 1,
        "message" => $request,
        "fields" => $error_fields
    ];

    echo json_encode($response);



    $mysql -> close();
