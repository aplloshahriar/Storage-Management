<?php
require("db-connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>


</head>

<body>

    <?php
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];

        // data select into table by id
        $sql = "SELECT * FROM product WHERE product_id=$get_id ";

        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);

        $product_id = $data['product_id'];
        $product_name = $data['product_name'];
        $product_category = $data['product_category'];
        $product_code = $data['product_code'];
        $product_entryDate = $data['product_entryDate'];
    }

    // <!-- get updated data -->
    
    if (isset($_GET['product_name'])) {
        $new_product_name = $_GET['product_name'];
        $new_product_id = $_GET['product_id'];
        $new_product_category = $_GET['product_category'];
        $new_product_code = $_GET['product_code'];
        $new_product_entryDate = $_GET['product_entryDate'];

        $sql1 = "UPDATE product SET 
        product_name='$new_product_name'  ,  
        product_category='$new_product_category',          
        product_code='$new_product_code'  ,           
        product_entryDate='$new_product_entryDate'          
        WHERE product_id= $new_product_id";

        if ($conn->query($sql1) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }


    ?>






    <!-- data acquire from category table for product category -->
    <?php
    $sql_2 = " SELECT * FROM category";
    $query = $conn->query($sql_2);

    ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        <label for="product_id hidden" hidden>Product Name</label>
        <input type="text" name="product_id" value="<?php echo $product_id ?>" hidden>

        <label for="product_name">Product Name</label><br>
        <input type="text" name="product_name" value="<?php echo $product_name ?>"><br>

        <label for="product_category">Product Category</label><br>
        <select name="product_category"><br>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $category_id = $data['category_id'];
                $category_name = $data['category_name'];

                echo "<option value='$category_id'> $category_name</option>";
            }

            ?>

        </select><br>


        <label for="product_code">Product Code</label><br>
        <input type="text" name="product_code" value="<?php echo $product_code ?>"><br>

        <label for="product_entryDate">Product Entry Date</label><br>
        <input type="date" name="product_entryDate" value="<?php echo $product_entryDate ?>"><br>

        <input type="submit" value="submit">
    </form>
</body>

</html>