<?php 
    $title = 'Home';
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
?>
<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <div class="banner">
                <img src="images/banner/banner_1.png" alt="nature with tv">
            </div>

            <div class="catagories" id="section1">
            <!-- <h2>catagories</h2>  -->

            <a href="television.php" >
                <div class="display_container">
                    <div class="display">
                        <img src="images/items/tv2.jpg" class="display_item" alt="picture of a TV with a white background">
                    </div>

                    <div class="display_title">
                        <h3>Televisions</h3>
                    </div>
                </div>
            </a>
            
            <a href="audio.php">
                <div class="display_container">
                    <div class="display">
                        <img src="images/items/headphones.jpg" class="display_item" alt="picture of headphones with a white background">
                    </div>

                    <div class="display_title">
                        <h3>Audio</h3>
                    </div>
                </div>
            </a>

            <a href="phones.php">
                <div class="display_container">
                    <div class="display">
                        <img src="images/items/phone.jpg" class="display_item" alt="picture of a phone with a white background">
                    </div>

                    <div class="display_title">
                        <h3>Phones</h3>
                    </div>
                </div>
            </a> 

            <a href="computers.php">
                <div class="display_container">
                    <div class="display">
                        <img src="images/items/PC.jpg" class="display_item" alt="picture of a computer with a white background">
                    </div>
                    <div class="display_title">
                        <h3>Computers</h3>
                    </div>
                </div>
            </a>

      

        </div>

            <div class="section">

            </div>
        </main>

        <?php include 'includes/footer.php' ?>
        
    </body>
</html>