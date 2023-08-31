<?php
session_start();
$user_name = $_SESSION['name'];

if (!empty($user_name)) {


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap css -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>P-P</title>
        <h2 class="">Demo PHP</h2>
        <div class="">
            <h1 >Welcome to My PHP Page</h1>
        
        </div>
       
        <a class="btn btn-outline-warning" href="logout.php">Logout</a>

        




    </head>

    <body>

    </body>

    </html>

    <?php
} else {
    header('location:login.php');
}
?>