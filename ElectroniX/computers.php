<?php 
    $title = 'Computers';
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
                <img src="images/banner/local/computing_banner.png" alt="phone">
            </div>

            <!-- -----------------------------ITEM ONE-----------------------------  -->
            <div class="item_section">

                <a class="item_container" onclick='openForm("7")'>
                    <div class="item_title">
                        <h2>Tornado R5 Gaming PC - AMD Ryzen 5, RTX 3060</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/computing/pc_computing.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Numeric keypad</li>
                                    <li>• RAM: 16 GB / Storage: 2 TB HDD & 512 GB SSD</li>
                                    <li>• Graphics: NVIDIA GeForce RTX 3060 12 GB</li>
                                    <li>• 258 FPS when playing Fortnite at 1080p</li>
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
                                <H1>£1299</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="7">
                                <input type="submit" value="add to cart">
                            </form>  
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM TWO-----------------------------  -->

            <div class="item_section">

                <a class="item_container" onclick='openForm("8")'>
                    <div class="item_title">
                        <h2>GIGABYTE GeForce RTX 3070 Ti Graphics Card</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/computing/gpu_computing.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• With 16 million colours to choose from - GPU lighting </li>
                                    <li>• Max-covered cooling keeps everything running optimally.</li>
                                    <li>• Clock speed: 1875 MHz</li>
                                    <li>• 4 x HDMI / DisplayPorts</li>
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
                                <H1>£1099</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="8">
                                <input type="submit" value="add to cart">
                            </form>   
                        </div>
    
                    </div>
                </a>

            </div>

            <!-- -----------------------------ITEM three------------------------------->

            <div class="item_section">

                <a class="item_container" onclick='openForm("9")'>
                    <div class="item_title">
                        <h2>ADX MK0419 Mechanical Gaming Keyboard</h2>
                    </div>
    
                    <div class="item_pic">
                        <img src="images/products/computing/keyboard_computing.jpg" class="display_item" alt="ElectroniX">
                    </div>
    
                    <div class="item_info_wrapper">
    
                        <div class="item_desc">

                            <div class="item_delivery">
                                <p>✅ 1 day delivery</p>
                                <p>✅ Free collection from stores</p>
                            </div>

                            <div class="item_list">
                                <ul>
                                    <li>• Red switches</li>
                                    <li>• RGB backlit keys</li>
                                    <li>• Anti-ghosting</li>
                                    <li>• Numeric keypad</li>
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
                                <H1>£69</H1>
                            </div>
    
                            <form action="" method="GET" class="item_price_disscount">
                                <input type="hidden" name="cart_p_id" id="cart_p_id" value="9">
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