<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
   if (strlen( preg_replace("/[^a-z]/i","", $_POST['Item'])) >= 3 && strlen( preg_replace("/[^a-z]/i","", $_POST['Category'])) >= 3 ) {
    $_SESSION['shop'][] = ['item' => $_POST['Item'] , 'category' => $_POST['Category']];
   }
  header ("Location: ./index.php");
  die;
}

if (!isset($_SESSION['shop'])) {
  $_SESSION['shop'] = [];
}






