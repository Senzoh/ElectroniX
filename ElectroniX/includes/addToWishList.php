<?php

//CART
if(!(isset($_SESSION['wishList']))){
    $_SESSION['wishList'] = array();
}

if(isset($_GET["wish_p_id"])){
    $p_id = $_GET['wish_p_id'];

    if(isset($_SESSION['wishList'][$p_id])){
        $_SESSION['wishList'][$p_id] += 1;
    }
    else{
        $_SESSION['wishList'][$p_id] = 1;
    }
}


// echo "<pre>";
// print_r($_SESSION['wishList']);
// echo "</pre>";
// echo count($_SESSION['wishList']);