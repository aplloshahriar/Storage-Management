<?php
 require("db-connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- get data from form -->
    <?php
    if (isset($_GET['user_firstName'])) {
        $user_firstName = $_GET['user_firstName'];
        $user_lastName = $_GET['user_lastName'];
        $user_email = $_GET['user_email'];
        $user_password = $_GET['user_password'];

        $sql = "INSERT INTO user(user_firstName,user_lastName,user_email,user_password)
VALUES('$user_firstName','$user_lastName','$user_email','$user_password')";

// Sql query validation
if ($conn->query($sql) === TRUE) {
    echo "Signup successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    }
    ?>
    <!-- form to input -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <h2> Sign up here</h2> <br>
        Fist Name: <input type="text" name="user_firstName" placeholder="Fist Name"><br>
        Last Name: <input type="text" name="user_lastName" placeholder="Last Name"><br>
        E-mail: <input type="email" name="user_email" placeholder="email"><br>
        Password <input type="password" name="user_password" placeholder="Password"><br>
        <input type="submit" value="submit">
        <h3>Have an account? <a href="login.php">Login</a></h3>
    </form>
</head>

<body>

</body>

</html>