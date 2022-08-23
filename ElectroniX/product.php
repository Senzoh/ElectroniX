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

    //display product
    if(isset($_GET['p_id'])){
        $p_id = $_GET['p_id'];
        $product_query = "SELECT * FROM tbl_products WHERE product_id = $p_id LIMIT 1;";

        $result = mysqli_query($con,$product_query);
        if($result && mysqli_num_rows($result) > 0){
            $product_data = mysqli_fetch_assoc($result);

            $product_name = $product_data['product_name'];
            $product_category = $product_data['category'];
            $product_price = $product_data['price'];
            $product_description = $product_data['description'];
            $product_img = $product_data['product_img'];
        }
    }else{
        $p_id = "null";
        $product_name = "null";
        $product_category = "null";
        $product_price = "null";
        $product_description = "null";
        $product_img = "null";
    }

    

    include_once "includes/addToCart.php";

    //WISH LIST
    include_once "includes/addToWishList.php"; 

?>

<?php include 'includes/header.php' ?>

    <main>
        <!-- MAIN content -->
        <div class="product-container">
            <div class="product-left">
                <div class="product-left-head">
                    <img src="logo_Electronix.png" alt="ElectroniX logo" height="74px" width="225px">
                </div>

                <div class="product-img">
                    <img src="<?php echo $product_img ?>" class="display_item" alt="picture of a computer with a white background">
                </div>
            </div>

            <div class="product-right">
                <div class="product-right-head">
                    <h1><?php echo $product_name ?></h1>
                    <h3><?php echo "Catagory: ".$product_category ?></h3>
                </div>

                <div class="product-right-des">
                    <h3>Description: </h3>
                    <p><?php echo $product_description?></p>
                </div>

                <div class="product-right-fill">
                    <h3>Delivery: </h3>
                    <p>✅ standard delivery</p>
                    <p>✅ Free collection from stores</p>
                </div>

                <div class="product-right-purchase">
                    <div class="product-right-price-con">
                        <span><?php echo "£".$product_price ?></span>
                    </div>

                    <form action="" method="GET" class="item_price_disscount">
                        <input type="hidden" name="wish_p_id" id="wish_p_id" value="<?php echo $p_id ?>">
                        <input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id ?>">
                        <input type="submit" value="add to Wish List">
                    </form>

                    <form action="" method="GET" class="item_price_disscount">
                        <input type="hidden" name="cart_p_id" id="cart_p_id" value="<?php echo $p_id ?>">
                        <input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id ?>">
                        <input type="submit" value="add to cart">
                    </form>  
                </div>
            </div>
        </div>
    </main>
</body>
</html>