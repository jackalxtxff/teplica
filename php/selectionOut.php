<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require_once 'connection.php';

    $mysql -> set_charset("utf8");

    $width = $_POST['width'];
    $height = $_POST['height'];
    $length = $_POST['length'];
    $arcs = $_POST['arcs'];
    $base = $_POST['base'];
    $add = "";

    if ($width != '') {
      $add .= "AND `width` = $width ";
    }
    if ($height != '') {
      $add .= "AND `height` = $height ";
    }
    if ($length != '') {
      $add .= "AND `length` = $length ";
    }
    if ($arcs != '') {
      $add .= "AND `arcs` = '$arcs' ";
    }
    if ($base != '') {
      $add .= "AND `base` = '$base' ";
    }

    $request = "SELECT count(*) FROM `catalog_product` WHERE `available` = 1 $add";
    $requestToLoad = "SELECT * FROM `catalog_product` WHERE `available` = 1 $add";

    $query = mysqli_query($mysql, $requestToLoad);
    $count = mysqli_num_rows($query);

    $response = [
        "status" => true,
        "message" => 'Ответ получен',
        "count" => $count,
        "load" => $requestToLoad
    ];

    echo json_encode($response);



    $mysql -> close();
