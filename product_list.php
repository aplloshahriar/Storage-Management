<?php
require("db-connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM product";
    $query = $conn->query($sql);
    echo "<table border='1'>
    <tr>
    <th>Product Name</th>
    <th>Product Category</th>
    <th>Product Code</th>
    <th>Action</th>
    </tr>";
    while ($data = mysqli_fetch_assoc($query)) {
        $product_id = $data['product_id'];
        $product_name = $data['product_name'];
        $product_category = $data['product_category'];
        $product_code = $data['product_code'];
        $product_entryDate = $data['product_entryDate'];
        echo "<tr>
        
        <td>$product_name</td>
        <td>$product_category</td>
        <td>$product_code</td>
        <td><a href='edit_product.php?id=$product_id'>Edit</a></td>
         </tr> ";
    }
    echo "</table>";
    ?>
</body>

</html>