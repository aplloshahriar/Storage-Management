<?php
require("db-connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- get data from signup -->
    <?php

    if (isset($_POST['user_email'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $sql = "SELECT * FROM user WHERE user_email='$user_email' AND
        user_password='$user_password' ";

        $query = $conn->query($sql);

        // Sql query validation
        if (mysqli_num_rows($query) > 0) {
            
            $data = mysqli_fetch_array($query);
            // session start code 
            $user_firstName = $data['user_firstName'];
            $user_email = $data['user_email'];
            $_SESSION['name'] = $user_firstName;
            $_SESSION['email'] =  $user_email;

            header("location:index.php");
        } else {
            echo "Error";
        }
    }
    ?>
    <!-- form to input -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2> Login here</h2> <br>
        E-mail: <input type="email" name="user_email" placeholder="email"><br>
        Password <input type="password" name="user_password" placeholder="Password"><br>
        <input type="submit" value="Login">
        <h3>New here? <a href="sign-up.php"> Signup</a> </h3>
    </form>
</head>

<body>

</body>

</html>