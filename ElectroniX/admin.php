<?php 
    $title = 'Account';
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

    //update user
    $message = "";
    if(isset($_GET['ent-id'])){
        $ent_id = $_GET['ent-id'];
        $selected_field = $_GET['selectedField'];
        $change = $_GET['change'];
        $updateQuery = "UPDATE tbl_login SET $selected_field = '$change' WHERE id = $ent_id;";

        echo $updateQuery; 
        $result_update = mysqli_query($con,$updateQuery);

        if($result_update){
            $message = "<p style='color:green'>id($ent_id)'s <u>$selected_field</u> successfully updated </p>";
        }
    }

    //add user
    if(isset($_GET['new_email'])){
        $new_email = $_GET['new_email'];
        $new_fName = $_GET['firstName'];
        $new_lName = $_GET['lastName'];
        $new_password = $_GET['password'];

        $updateQuery = "INSERT INTO tbl_login(email,password,firstName,lastName)VALUES('$new_email','$new_password','$new_fName','$new_lName');";

        echo $updateQuery; 
        $result_update = mysqli_query($con,$updateQuery);

        if($result_update){
            $message = "<p style='color:green'>$new_fName $new_lName: successfully added </p>";
        }
    }

    //remove user
    if(isset($_GET['rmv-id'])){
        $rmv_id = $_GET['rmv-id'];

        $removeQuery = "DELETE FROM tbl_login WHERE id = $rmv_id;";

        echo $removeQuery; 
        $result_update = mysqli_query($con,$removeQuery);

        if($result_update){
            $message = "<p style='color:red'>id($rmv_id): successfully Removed </p>";
        }
    }
    
?>

<?php include 'includes/header.php' ?>
     
        <main>
            <!-- MAIN content -->
            <h1>Admin Page</h1>
            <?php echo $message ?>
            <div class="account-container">
                <h2>Login Table</h2>
                <table>
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>password</th>
                    </tr>

                    
                    <?php 
                    $query = "SELECT * FROM tbl_login;";
                    $result = mysqli_query($con,$query);

                    if(mysqli_num_rows($result) > 0){
                        while($user_data = mysqli_fetch_assoc($result)){
                            $tbl_id = $user_data['id'];
                            $tbl_fName = $user_data['firstName'];
                            $tbl_lName = $user_data['lastName'];
                            $tbl_email = $user_data['email'];
                            $tbl_password = $user_data['password'];
                            echo "
                            <tr>
                                <td>$tbl_id</td>
                                <td>$tbl_fName</td>
                                <td>$tbl_lName</td>
                                <td>$tbl_email</td>
                                <td>$tbl_password</td>
                            </tr>";
                        }                  
                    }else{
                        echo "No data found";
                    }
                    ?>
                </table>
                <br>
                <h2>Update login</h2>
                <form action="">
                    <input type="text" name="ent-id" placeholder="Enter id">
                    <select name="selectedField" id="">
                        <option value="firstName">First Name</option>
                        <option value="lastName">Last Name</option>
                        <option value="email">Email</option>
                        <option value="password">Password</option>
                    </select>
                    <input type="text" name="change" placeholder="Enter Change">
                    <input type="submit" value="Update">
                </form>
                <br>
                <h2>Add user</h2>
                <form action="">
                    <input type="text" name="new_email" placeholder="Email" required>
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="text" name="password" placeholder="Password" required>

                    <input type="submit" value="Add">
                </form>
                <br>
                <h2>Remove User</h2>
                <form action="">
                    <input type="text" name="rmv-id" placeholder="Enter id" required>

                    <input type="submit" value="Remove">
                </form>
            </div>
        </main>

        
    </body>
</html>