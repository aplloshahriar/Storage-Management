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
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>
<body>

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
        $_SESSION['email'] = $user_email;

        header("location:index.php");
    } else {
        echo "Error";
    }
}
?>
<!-- form to input -->

<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2> Login here</h2> <br>
        E-mail: <input type="email" name="user_email" placeholder="email"><br>
        Password <input type="password" name="user_password" placeholder="Password"><br>
        <input type="submit" value="Login">
        <h3>New here? <a href="sign-up.php"> Signup</a> </h3>
    </form> -->
<h1 class=" mt-4 mx-auto p-2 " style="width: 240px">Login Here</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class=" mt-4 mx-auto p-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 240px">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="user_email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="user_password" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-outline-success">Submit</button>

    </div>
    <h3 style="margin-left: 650px; margin-bottom: 30px;">New here?
        <a href="sign-up.php">
            <span class="text-danger" >Signup</span> </a>
    </h3>
</form>

</body>

</html>