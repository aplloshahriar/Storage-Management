<?php
require("db-connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <!-- bootstrap css -->
    <!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>

<body>

    <?php
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];

        // data select into table by id
        $sql = "SELECT * FROM category WHERE category_id=$get_id ";

        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);

        $category_id = $data['category_id'];
        $category_name = $data['category_name'];
        $category_entryDate = $data['category_entryDate'];
        // sql error validation
    
    }

    // get updated data
    if (isset($_GET['category_name'])) {
        $new_category_name = $_GET['category_name'];
        $new_category_entryDate = $_GET['category_entryDate'];
        $new_category_id = $_GET['category_id'];

        $sql1 = "UPDATE category SET 
        category_name='$new_category_name'  ,           
        category_entryDate='$new_category_entryDate'    
        WHERE category_id= $new_category_id";

        if ($conn->query($sql1) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }


    ?>

    <form class="container d-flex justify-content-center align-items-center " action="edit_category.php" method="GET">

        <label for="category_name">Category</label><br>
        <input type="text" name="category_name" value="<?php echo $category_name ?>"><br>
        <label for="category_entryDate">Category Entry Date</label><br>
        <input type="date" name="category_entryDate" value="<?php echo $category_entryDate ?>"><br>
        <input type="text" name="category_id" value="<?php echo $category_id ?>" hidden>
        <input type="submit" value="Update">
    </form>
</body>

</html>