<?php
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}

if(isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if(isset($_SESSION['wishList'])){
    $_SESSION['wishList'] = array();
}

header('Location: index.php');
