<?php 
    $title = 'Phones';
    $styles = 'styles/styles.css';

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
    include_once "includes/addToCart.php"; 
?>
<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <div class="local_banner">
                <img src="images\banner\local\phone_banner.png" alt="phone">
            </div>

            <!-- -----------------------------ITEM ONE-----------------------------  -->
            <div class="item_section">

                <a class="item_container" onclick='openForm("4")'>
                    <div class="item_title">
                        <h2>Apple iPhone 11</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/phone/iphone11_phone.jpg" class="display_item" alt="phone">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• 6.1-inch Liquid Retina HD LCD displayd</li>
                                    <li>• Face ID for secure authentication and Apple Pay</li>
                                    <li>• A13 Bionic chip with third-generation Neural Engine</li>
                                    <li>• Dual-camera system with 12MP Ultra Wide cameras</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>•</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£599</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="4">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM TWO-----------------------------  -->

            <div class="item_section">

                <a class="item_container" onclick='openForm("5")'>
                    <div class="item_title">
                        <h2>Apple iPhone 13 </h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/phone/iphone13_phone.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• 6.1-inch Super Retina XDR display</li>
                                    <li>• A15 Bionic chip for lightning-fast performance</li>
                                    <li>• Up to 19 hours of video playback</li>
                                    <li>• 12MP TrueDepth front camera with Night mode</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>•</p></div>
                                <div class="item_star"><p>•</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£899</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="5">
                                <input type="submit" value="add to cart">
                            </form> 
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM three------------------------------->

            <div class="item_section">

                <a class="item_container" onclick='openForm("6")'>
                    <div class="item_title">
                        <h2>Apple iPhone SE</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/phone/iphoneSE_phone.jpg" class="display_item" alt="phone">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• 4.7-inch Retina HD display</li>
                                    <li>• 7MP front camera with Portrait mode</li>
                                    <li>• Touch ID for secure authentication and Apple Pay</li>
                                    <li>• Water and dust resistant</li>
                                </ul>
                            </div>

                            <div class="item_stars_container">
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                                <div class="item_star"><p>⭐</p></div>
                            </div>
                        </div>
        
                        <div class="item_price_wrapper">
                            <div class="item_price">
                                <H1>£389</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="6">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>


        </main>

        <?php include 'includes/footer.php' ?>
        
    </body>
</html>