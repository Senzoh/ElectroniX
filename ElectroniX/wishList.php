<?php 
    $title = 'Product';
    $styles = 'styles/styles-product.css';

    session_start();
    include_once "includes/connect.php";

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $query = "SELECT * FROM tbl_login WHERE id = $id LIMIT 1;";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);

            $welcome = "Welcome, " .$user_data['firstName'];
            $account = "<a href='logout.php'>Logout</a>";
        }
        // echo "-logged in";
    }else{
        // echo "-not set";
        $welcome = "Welcome Guest!";
        $account = "<a href='login.php'>login</a>";
    }

    //CART
    if(!(isset($_SESSION['wishList']))){
        $_SESSION['wishList'] = array();
    }

    include_once "includes/addToCart.php"; 

    //remove one items from wish list
    if(isset($_GET['p_id'])){
        unset($_SESSION['wishList'][$_GET['p_id']]);
    }

 
?>

<?php include 'includes/header.php' ?>

    <main>
        <!-- MAIN content -->
        <h1>⭐Wish List⭐</h1>
        <div class="cart-container">
            <div class="cart-left">
                    
                <?php 
                    if(!(empty($_SESSION['wishList']))){
                        foreach($_SESSION["wishList"] as $key => $count){
                            $product_query = "SELECT * FROM tbl_products WHERE product_id = $key LIMIT 1;";
                            $result = mysqli_query($con,$product_query);
                            $product_data = mysqli_fetch_assoc($result);
    
                            $product_name = $product_data['product_name'];
                            $product_category = $product_data['category'];
                            $product_price = $product_data['price'];
                            $product_description = $product_data['description'];
                            $product_img = $product_data['product_img'];
    
                            echo "
                            <div class='cart-item-container'>
                                <div class='cart-item-img'>
                                    <img src='$product_img' alt=''>
                                </div>
            
                                <div class='cart-item-name'>
                                    <p> {$product_name} <br> &nbsp; $product_category</p>
                                </div>

                                <div class='cart-item-price'>
                                    <p>£$product_price </p>
                                </div>
            
                                <div style='background-color:#1c2633;' class='cart-item-quantity'>
                                <a style='color:goldenrod' href='wishList.php?cart_p_id=$key'>add to cart</a>
                                </div>
            
                                <div class='cart-item-remove'>
                                    <a href='wishList.php?p_id=$key'>remove</a>
                                </div>
        
                            </div>";
                        }
                    }else{
                        echo "<p style='font-size:22px;'>Add items to your wish list<p>";
                    }
                    
                ?>
            </div>

        </div>
        
    </main>
</body>
</html>