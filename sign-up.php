<?php
require("db-connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Sign Up</title>
</head>

<body>
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
  <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <h2> Sign up here</h2> <br>
    Fist Name: <input type="text" name="user_firstName" placeholder="Fist Name"><br>
    Last Name: <input type="text" name="user_lastName" placeholder="Last Name"><br>
    E-mail: <input type="email" name="user_email" placeholder="email"><br>
    Password <input type="password" name="user_password" placeholder="Password"><br>
    <input type="submit" value="submit">
    <h3>Have an account? <a href="login.php">Login</a></h3>
  </form> -->

  <!--form-2 -->
  <h1 class="mt-4" style="margin-left: 650px; margin-bottom: 30px;">Sign up Here</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div class=" mt-4 mx-auto  shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 240px">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input name="user_firstName" type="text" class="form-control" placeholder="First name" aria-label="First name">
      </div>

      <div class="mb-3">
        <label>Last Name</label>
        <input name="user_lastName" type="text" class="form-control" placeholder="Last name" aria-label="First name">
      </div>
      <div class="mb-3">
        <label>Email address</label>
        <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="user_password" id="exampleInputPassword1">

      </div>

      <button type="submit" class="btn btn-outline-success btn-lg">Submit</button>

    </div>
    <h3 style="margin-left: 650px; margin-bottom: 30px;">Have an account?
      <a href="login.php">
        <span class="text-danger"> Login</span> </a>
    </h3>
  </form>
</body>

</html>