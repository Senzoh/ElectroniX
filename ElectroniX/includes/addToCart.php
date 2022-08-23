<?php

//CART
if(!(isset($_SESSION['cart']))){
    $_SESSION['cart'] = array();
}

if(isset($_GET["cart_p_id"])){
    $p_id = $_GET['cart_p_id'];

    if(isset($_SESSION['cart'][$p_id])){
        $_SESSION['cart'][$p_id] += 1;
    }
    else{
        $_SESSION['cart'][$p_id] = 1;
    }
}

// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";
// echo count($_SESSION['cart']);