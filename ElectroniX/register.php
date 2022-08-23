<?php 
    $title = 'Register';
    $styles = 'styles/styles-login.css';

    session_start();
    include_once "includes/connect.php";

    $message = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['password'] == $_POST['re-password']){
            $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['fName']; 
        $lastName = $_POST['lName']; 

        echo $email." Password: ". $password ." first name: ".$firstName." last name: ".$lastName;

        if ($email != "" && $password != ""){
            $query = "INSERT INTO tbl_login (email,password,firstName,lastName) VALUES ('$email','$password','$firstName','$lastName');";
            mysqli_query($con,$query);

            header("Location: login.php");
        }else{
            echo "wrong";
        }
        }else{
            $message = "<p style='color:red'>Passwords do not match!</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo $styles?>>
        <link rel="icon" href="icon_electronix.ico">
        <title><?php echo $title?></title>
    </head>
    
    <body>
        <header>
            <div class="nav">
                <div class="nav-belt">

                    <div class="nav-left">
                        <div class="nav-logo">
                            <a href="index.php"><img src="logo_Electronix.png" alt="ElectroniX logo" height="49px" width="150px"></a>
                        </div>
                    </div>

                    <div class="nav-fill"></div>

                </div>

                <div class="nav-bar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#section1">Products</a></li>
                            <li><a href="Computing.html">Contact Us</a></li>
                            <li><a href="Phones.html">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
     
        <main>
            <!-- MAIN content -->
            <div class="login-container">

                <div class="login-head">
                    <h1>Register</h1>
                </div>

                <?php echo $message ?>

                <div class="login-body">
                    <form action="" method="post">
                        <div class="register-fullname">

                            <div class="login-email">
                                <input type="text" name="fName" id="fName" placeholder="First name">
                            </div>

                            <div class="login-email">
                                <input type="text" name="lName" id="lName" placeholder="Last name">
                            </div>
                        </div>
                        
                        <div class="login-email">
                            <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9]+@[a-z0-9]+\.[a-z]{2,}" title="The email address must container an @ and a domain" required>
                        </div>

                        <div class="login-password">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="login-password">
                            <input type="password" name="re-password" placeholder="Re-Password">
                        </div>

                        <div class="register-fill">

                        </div>

                        <div class="login-btn">
                            <input type="submit" name="submit" value="Register">
                        </div>
        
                    </form>
                </div>

            </div>
        </main>

        <footer>
            <!-- &copy; Alexandre Rodrigues  -->
        </footer>
        
    </body>
</html>