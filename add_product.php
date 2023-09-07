<?php
require("db-connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>


</head>

<body>

    <?php
    if (isset($_GET['product_name'])) {
        $product_name = $_GET['product_name'];
        $product_category = $_GET['product_category'];
        $product_code = $_GET['product_code'];
        $product_entryDate = $_GET['product_entryDate'];

        // data insert into table
        $sql = "INSERT INTO product (product_name, product_category,product_code,product_entryDate)
VALUES ('$product_name',  '$product_category','$product_code','$product_entryDate')";

        // sql error validation
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    ?>

    <!-- data acquire from category table for product category -->
    <?php
    $sql = " SELECT * FROM category";
    $query = $conn->query($sql);

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        <label for="product_name">Product</label><br>
        <input type="text" name="product_name"><br>

        <label for="product_category">Product Category</label><br>
        <select name="product_category"><br>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $category_id = $data['category_id'];
                $category_name = $data['category_name'];

                echo "<option name='$category_id'> $category_name</option>";
            }

            ?>

        </select><br>


        <label for="product_code">Product Code</label><br>
        <input type="text" name="product_code"><br>

        <label for="product_entryDate">Product Entry Date</label><br>
        <input type="date" name="product_entryDate"><br>

        <input type="submit" value="submit">
    </form>
</body>

</html>