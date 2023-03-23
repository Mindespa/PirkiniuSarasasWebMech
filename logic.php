<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
   if (strlen( preg_replace("/[^a-z]/i","", $_POST['Item'])) >= 3 && strlen( preg_replace("/[^a-z]/i","", $_POST['Category'])) >= 3 ) {
    $_SESSION['shop'][] = ['item' => $_POST['Item'] , 'category' => $_POST['Category']];
   }
  header ("Location: ./index.php");
  die;
}

// print_r($_SESSION['shop']); // jei sita eilute meta erora del sitos eilutes - nekriepk demesio ir idek preke. dings


