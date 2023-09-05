<?php
require("db-connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM category";
    $query = $conn->query($sql);
    echo "<table>
    <tr><td>Category</td><td>Date</td></tr>";
    while ($data = mysqli_fetch_assoc($query)) {
        $category_name = $data['category_name'];
        $category_entryDate = $data['category_entryDate'];
        echo "<tr><td>$category_name</td>
         <td>$category_entryDate</td></tr> ";
    }
    echo "</table>";
    ?>
</body>

</html>