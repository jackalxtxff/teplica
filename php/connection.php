<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = 'teplica_db';


  $mysql = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die('Error connect to DataBase');
?>
