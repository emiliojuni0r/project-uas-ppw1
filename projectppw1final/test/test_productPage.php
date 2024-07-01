<!-- connect -->
<?php 
    include '../db_connect.php';

    // ambil data product nya dari database
    $sql = "SELECT * FROM  Product";
    $result = $conn->query( $sql );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascendre - Products</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/productPage.css">
</head>

<body>

    <!-- start of navbar -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
        <div class="container-fluid  custom-color-navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand green-asc-text" href="#">Ascendre</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle green-asc-text" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu  custom-color-navbar">
                            <li><a class="dropdown-item text-center green-asc-text" href="#">Basketball</a></li>
                            <li><a class="dropdown-item text-center green-asc-text" href="#">Football</a></li>
                            <li><a class="dropdown-item text-center green-asc-text" href="#">Volley</a></li>
                            <li><a class="dropdown-item text-center green-asc-text" href="#">Running</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page" href="#">Products</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page" href="cart.php">
                            <img src="img/svg/cart.svg" alt="">
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- start of main container -->
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar for sorting and filtering -->
            <div class="col-md-2">
                <h4>Sort By</h4>
                <select id="sortOrder" class="form-control mb-3">
                    <option value="default">Default</option>
                    <option value="priceLowToHigh">Price: Low to High</option>
                    <option value="priceHighToLow">Price: High to Low</option>
                </select>
                <h4>Filter By</h4>
                <div class="form-group">
                    <label for="priceRange">Price Range</label>
                    <input type="range" class="form-control-range" id="priceRange" min="0" max="500" step="10">
                    <br><span id="priceRangeValue">0 - 500</span>
                </div>
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <select multiple class="form-control" id="categories">
                        <option value="1">Basketball</option>
                        <option value="2">Volley</option>
                        <option value="3">Football</option>
                        <option value="4">Running</option>
                    </select>
                </div>
                <button id="applyFilters" class="btn btn-dark background-green-asc grey-asc-text mt-3 mb-5">Apply
                    Filters</button>
            </div>

            <!-- Product List -->
            <div class="col-md-10">
                <div class="row" id="productList">
                    <!-- Product 1 -->
                    <!-- <div class="col-md-4 mb-4 product-card-container" data-price="29.99" data-category="electronics">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/600x400.png?text=Product+Image+1" class="card-img-top"
                                alt="Product Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Product Name 1 (DUmmy)</h5>
                                <p class="card-text">Short description of the product. This is an excellent product that
                                    you will love.</p>
                                <p class="card-text"><strong>Price: $29.99</strong></p>
                                <button class="btn btn-dark background-green-asc grey-asc-text">Add to Cart</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- product nyoba pake php-->
                     <?php 
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo'<div class="col-md-4 mb-4 product-card-container" data-price="'.$row["price"].'" data-category='.$row["category_id"].'>';
                                echo'<div class="card product-card">';
                                echo'<img src="../'.$row["image"].'" class="card-img-top" alt="Product Image">';
                                echo'<div class="card-body">';
                                echo'<h5 class="card-title">'.$row["name"].'</h5>';
                                // echo'<p class="card-text">'.$row["description"].'"</p>';
                                echo'<p class="card-text"><strong>Price: $'.$row["price"].'</strong></p>';
                                echo'<a href="test_productView.php?product_id='.$row["product_id"].'"><button class="btn btn-sm btn-dark background-green-asc grey-asc-text">View Details</button></a>';
                                echo'<button class="btn btn-sm btn-dark background-green-asc grey-asc-text">Add to Cart</button>';
                                echo'</div>';
                                echo'</div>';
                                echo'</div>';
                            }
                        } else { 
                            echo "No pruduct lmao";
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of main container -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js -->
    <script src="js/productPage.js"></script>
</body>

</html>


<!--  -->
<!-- Product 1 -->
<!-- <div class="col-md-4 mb-4 product-card-container" data-price="29.99" data-category="electronics">
    <div class="card product-card">
        <img src="https://via.placeholder.com/600x400.png?text=Product+Image+1" class="card-img-top"
            alt="Product Image 1">
        <div class="card-body">
            <h5 class="card-title">Product Name 1</h5>
            <p class="card-text">Short description of the product. This is an excellent product that you will love.</p>
            <p class="card-text">Stock : </p>
            <p class="card-text"><strong>Price: $29.99</strong></p>
            <button class="btn btn-dark background-green-asc grey-asc-text">Add to Cart</button>
        </div>
    </div>
</div> -->