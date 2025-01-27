<!DOCTYPE html>

<html>

<head>
    <title>Happy Cart | Advanced Search</title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="resources/img/logo.svg" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body class=" bg-gradient-success">

    <div class=" container-fluid">
        <div class=" row">
            <div class=" col-12 bg-body border-bottom border-primary">
                <?php
                require "header.php";
                ?>
            </div>

            <div class=" col-12 bg-white ">
                <div class=" row">

                    <div class=" offset-lg-4 col-12 col-lg-4 ">
                        <div class=" row">
                            <div class=" col-2 mt-2">
                                <div class=" logo-img "></div>
                            </div>

                            <div class=" col-10">
                                <span class=" text-black-50 fw-bold fs-2">Advanced Search</span>
                            </div>

                        </div>
                    </div>






                </div>
            </div>


            <div class=" offset-lg-2 col-12 col-lg-8 bg-white mt-3 mb-3 rounded">
                <div class="row">

                    <div class=" offset-lg-1 col-12 col-lg-10">
                        <div class="row">

                            <div class=" col-12 col-lg-10 mt-2 mb-3">
                                <input type="text" class=" form-control fw-bold" placeholder="Type keywork to Search..." id="s1">
                            </div>
                            <div class=" col-12 col-lg-2 mt-2 mb-3 d-grid">
                                <button class=" btn btn-success" onclick="advancedSearch(0);">Search</button>
                            </div>
                            <div class=" col-12">
                                <hr class="border border-3 border-primary" />
                            </div>

                        </div>
                    </div>



                    <div class=" offset-lg-1 col-12 col-lg-10">
                        <div class=" row">

                            <div class=" col-12">
                                <div class="row">

                                    <div class=" col-12 col-lg-4 mb-3 ">
                                        <select class=" form-select" id="c1" onchange="advancedSearch(0);">
                                            <option value="0">Select Category</option>
                                            <?php

                                            $category_rs = Database::search("SELECT * FROM `category`");
                                            $category_num = $category_rs->num_rows;
                                            for ($x = 0; $x < $category_num; $x++) {
                                                $category_data = $category_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $category_data["id"] ?>"><?php echo $category_data["name"] ?></option>
                                            <?php
                                            }

                                            ?>

                                        </select>
                                    </div>

                                    <div class=" col-12 col-lg-4 mb-3 ">
                                        <select class=" form-select" id="b1" onchange="advancedSearch(0);">
                                            <option value="0">Select Brand</option>

                                            <?php

                                            $brand_rs = Database::search("SELECT * FROM `brand`");
                                            $brand_num = $brand_rs->num_rows;
                                            for ($y = 0; $y < $brand_num; $y++) {
                                                $brand_data = $brand_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $brand_data["id"] ?>"><?php echo $brand_data["name"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class=" col-12 col-lg-4 mb-3 ">
                                        <select class=" form-select" id="m1" onchange="advancedSearch(0);">
                                            <option value="0">Select Model</option>
                                            <?php

                                            $model_rs = Database::search("SELECT * FROM `model`");
                                            $model_num = $model_rs->num_rows;
                                            for ($z = 0; $z < $model_num; $z++) {
                                                $model_data = $model_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $model_data["id"] ?>"><?php echo $model_data["name"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class=" col-12 col-lg-6 mb-3 ">
                                        <select class=" form-select" id="con" onchange="advancedSearch(0);">
                                            <option value="0">Select Condition</option>

                                            <?php

                                            $condition_rs = Database::search("SELECT * FROM `condition`");
                                            $condition_num = $condition_rs->num_rows;
                                            for ($p = 0; $p < $condition_num; $p++) {
                                                $condition_data = $condition_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $condition_data["id"] ?>"><?php echo $condition_data["name"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class=" col-12 col-lg-6 mb-3 ">
                                        <select class=" form-select" id="col" onchange="advancedSearch(0);">
                                            <option value="0">Select Color</option>

                                            <?php

                                            $color_rs = Database::search("SELECT * FROM `color`");
                                            $color_num = $color_rs->num_rows;
                                            for ($q = 0; $q < $color_num; $q++) {
                                                $color_data = $color_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $color_data["id"] ?>"><?php echo $color_data["name"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class=" col-12 col-lg-6 mb-3">
                                        <input type="text" class=" form-control" placeholder="Price from..." id="pf" onkeyup="advancedSearch(0);">
                                    </div>
                                    <div class=" col-12 col-lg-6 mb-3">
                                        <input type="text" class=" form-control" placeholder="Price to..." id="pt" onkeyup="advancedSearch(0);">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>

            <div class=" offset-lg-2 col-12 col-lg-8 bg-white rounded mb-3">
                <div class=" row">
                    <div class=" offset-8 col-4">
                        <select class=" form-select border border-bottom border-top-0 border-end-0 border-start-0 border-primary border-3" id="sort" onchange="advancedSearch(0);">
                            <option value="0">SORT BY</option>
                            <option value="1">PRICE HIGH TO LOW</option>
                            <option value="2">PRICE LOW TO HIGH</option>
                            <option value="3">QUENTITY HIGH TO LOW</option>
                            <option value="4">QUENTITY LOW TO HIGH</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=" offset-2 col-12 col-lg-8 bg-white rounded mb-3">
                <div class=" row">

                    <div class="  offset-lg-1 col-12 col-lg-10 text-center">
                        <div class=" row" id="view_area">

                            <div class=" offset-5 col-2 mt-5">
                                <span class=" text-black-50 fw-bold h1"><i class="bi bi-search fs-1"></i></span>
                            </div>
                            <div class=" offset-3 col-6 mt-3 mb-5">
                                <span class=" text-black-50 h1">No Items Search Yet...</span>
                            </div>


                            <!-- <div class="card mb-3 mt-3 col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-md-4 mt-4">

                                        <img src="resources/mobile images/iphone12.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">

                                            <h5 class="card-title fw-bold">iPhone 12</h5>
                                            <span class="card-text text-primary fw-bold">Rs.500000.00</span>
                                            <br />
                                            <span class="card-text text-success fw-bold fs">10 Items Left</span>

                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <a href="#" class="btn btn-success fs">Buy Now</a>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <a href="#" class="btn btn-danger fs">Add Cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->


                            <!-- <div class=" col-12 text-center">

                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>

            </div> -->


                        </div>

                    </div>
                </div>




            </div>





        </div>



    </div>
    </div>





    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script src="script.js"></script>

</body>

</html>