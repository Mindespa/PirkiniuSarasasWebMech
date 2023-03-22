<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 
   if ( $_POST['Item'] != "" ) {
    $_SESSION['shop'][] = ['item' => $_POST['Item'] , 'category' => $_POST['Category']];
   }

}

print_r($_SESSION['shop']); // jei sita eilute meta erora del sitos eilutes - nekriepk demesio ir idek preke. dings

// $shop = array (
//     array("obuoliai",100),
    
//   );
