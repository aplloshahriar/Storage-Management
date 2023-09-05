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
        <title>Index</title>

        <!-- navbar -->
     <div class=" container bg-light ">
     <div class="px-0 pt-3 bg-warning-subtle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="text-center "><a class=" text-danger text-decoration-none" href="index.php">Storage Management System</a></h2>
                    </div>

                    <div class="col-sm-2">
                       <p class=""><?php echo $user_name?> <a class="btn btn-outline-warning " href="logout.php">Logout</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class=" text-center">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-sm-3">

                    <!-- category -->
                    <div>
                        <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Category</h4>
                        <div class="list-group">
                            <a href="#" class="  m-0 list-group-item list-group-item-action " aria-current="true">
                                Add Category
                            </a>
                            <a href="google.com" class="list-group-item list-group-item-action "
                                aria-current="true">Category List</a>
                        </div>

                    </div>

                    <!-- product -->
                    <div>
                        <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Product</h4>
                        <div class="list-group">
                            <a href="#" class="  m-0 list-group-item list-group-item-action " aria-current="true">
                                Add Product
                            </a>
                            <a href="google.com" class="list-group-item list-group-item-action " aria-current="true">Product
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
                            <a href="google.com" class="list-group-item list-group-item-action " aria-current="true">Store
                                Product List</a>

                        </div>


                    </div>
                    <div>
                        <h4 class="p-2 border-rounded" style="background-color: #ff8c00">Sell</h4>
                        <div class="list-group">
                            <a href="#" class="  m-0 list-group-item list-group-item-action " aria-current="true">
                                Add Sell Product
                            </a>
                            <a href="google.com" class="list-group-item list-group-item-action " aria-current="true">Sell
                                Product List</a>

                        </div>


                    </div>
                </div>


                <!-- col-2 -->
                <div class="col-sm-9">
                    Column
                </div>

            </div>
        </div>
     </div>









    </head>

    <body>

    </body>

    </html>

    <?php
} else {
    header('location:login.php');
}
?>