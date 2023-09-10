<?php
session_start();
$user_name = $_SESSION['name'];
require("db-connect.php");
require('navbar.php');
if (!empty($user_name)) {



    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap css -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Add Category</title>


    </head>

    <body>

        <?php
        if (isset($_GET['category_name'])) {
            $category_name = $_GET['category_name'];
            $category_entryDate = $_GET['category_entryDate'];

            // data insert into table
            $sql = "INSERT INTO category (category_name, category_entryDate)
VALUES ('$category_name',  '$category_entryDate')";

            // sql error validation
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        ?>

        <div class=" container d-flex justify-content-center align-items-center   ">
            <div>
                <form class="" action="add_category.php" method="GET">

                    <label for="category_name">Category</label><br>
                    <input type="text" name="category_name"><br>
                    <label for="category_entryDate">Category Entry Date</label><br>
                    <input type="date" name="category_entryDate"><br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </body>

    </html>

    <?php
} else {
    header('location:login.php');
}
?>