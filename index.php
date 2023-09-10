<?php
session_start();
$user_name = $_SESSION['name'];
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
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/285eb7d844.js" crossorigin="anonymous"></script>
        <title>Index</title>


        <div class=" container bg-light ">

            <div class=" text-center">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-sm-3">

                        <!-- category -->
                        <div>
                            <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Category</h4>
                            <div class="list-group">
                                <a href="add_category.php" class="  m-0 list-group-item list-group-item-action "
                                    aria-current="true">
                                    Add Category
                                </a>
                                <a href="category_list.php" class="list-group-item list-group-item-action "
                                    aria-current="true">Category List</a>
                            </div>

                        </div>

                        <!-- product -->
                        <div>
                            <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Product</h4>
                            <div class="list-group">
                                <a href="add_product.php" class="  m-0 list-group-item list-group-item-action "
                                    aria-current="true">
                                    Add Product
                                </a>
                                <a href="product_list.php" class="list-group-item list-group-item-action "
                                    aria-current="true">Product
                                    List</a>

                            </div>


                        </div>

                        <!-- store items -->
                        <div>
                            <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Store</h4>
                            <div class="list-group">
                                <a href="#" class="  m-0 list-group-item list-group-item-action " aria-current="true">
                                    Add Store Product
                                </a>
                                <a href="google.com" class="list-group-item list-group-item-action "
                                    aria-current="true">Store
                                    Product List</a>

                            </div>


                        </div>
                        <div>
                            <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Sell</h4>
                            <div class="list-group">
                                <a href="#" class="  m-0 list-group-item list-group-item-action " aria-current="true">
                                    Add Sell Product
                                </a>
                                <a href="google.com" class="list-group-item list-group-item-action "
                                    aria-current="true">Sell
                                    Product List</a>

                            </div>


                        </div>
                    </div>


                    <!-- col-2 -->
                    <div class="col-sm-9 mt-5 ">

                        <div class="row">
                            <div class="col-sm-3">
                                <a href="add_category.php"> <i class="fa-solid fa-folder-plus fa-2xl"
                                        style="color: #f67104;"></i></a>

                                <h5 class="mt-3">Add Category</h5>
                            </div>
                            <div class="col-sm-3">

                                <a href="category_list.php"><i class="fa-solid fa-list fa-2xl"
                                        style="color: #f67104;"></i></a>
                                <h5 class="mt-3">Category List</h5>
                            </div>
                            <div class="col-sm-3">
                                <a href="add_product.php"> <i class="fa-solid fa-folder-open fa-2xl"
                                        style="color: #f67104;"></i></a>
                                <h5 class="mt-3">Add Product </h5>
                            </div>
                            <div class="col-sm-3">
                                <a href="product_list.php"> <i class="fa-solid fa-list fa-2xl"
                                        style="color: #f67104;"></i></a>
                                <h5 class="mt-3"> Product List</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>









    </head>

    <body>

    </body>

    </html>

    <?php
} 
else {
    header('location:login.php');
}
?>