<!-- connect -->
<?php
include 'db_connect.php';

// Get category filter from URL if exists
$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

$category_name = 'All Products'; // Default header

if ($category_id > 0) {
    // Query to get products and category name by category_id
    $sql = "SELECT p.*, c.name as category_name 
            FROM product p
            JOIN category c ON p.category_id = c.category_id
            WHERE p.category_id = $category_id";
} else {
    // Query to get all products and their category names
    $sql = "SELECT *
            FROM product";
}

$result = $conn->query($sql);

if ($category_id > 0 && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $category_name = $row['category_name'];
    // Reset the result pointer back to the beginning
    $result->data_seek(0);
}
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
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/productPage.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- start of navbar -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
        <div class="container-fluid  custom-color-navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand green-asc-text" href="Home.php">Ascendre</a>
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
                        <ul class="dropdown-menu custom-color-navbar">
                            <li><a class="dropdown-item text-center green-asc-text"
                                    href="productPage.php?category_id=1">Basketball</a></li>
                            <li><a class="dropdown-item text-center green-asc-text"
                                    href="productPage.php?category_id=2">Football</a></li>
                            <li><a class="dropdown-item text-center green-asc-text"
                                    href="productPage.php?category_id=3">Volley</a></li>
                            <li><a class="dropdown-item text-center green-asc-text"
                                    href="productPage.php?category_id=4">Running</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page"
                            href="productPage.php">Products</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page" href="cart.php">
                            <img src="img/svg/cart.svg" alt="">
                        </a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- start of main container -->
    <div class="container mt-5" style="min-height: 90vh">
        <div class="row">
            <!-- Sidebar for sorting and filtering -->
            <div class="col-md-2" data-aos="fade-right">
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
                    <br>
                    <span id="priceRangeValue">0 - 500</span>
                </div>
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <select multiple class="form-control" id="categories">
                        <option value="1">Basketball</option>
                        <option value="2">Football</option>
                        <option value="3">Volley</option>
                        <option value="4">Running</option>
                    </select>
                </div>
                <button id="applyFilters" class="btn btn-dark background-green-asc grey-asc-text my-3">Apply
                    Filters</button>
            </div>

            <!-- Product List -->
            <div class="col-md-10">
                <div class="row" id="productList" data-aos="fade-left">
                    <!-- products displayed using php (lesgooo) -->
                    <h2><?php echo htmlspecialchars($category_name); ?></h2>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4 mb-4 product-card-container" data-price="' . $row["price"] . '" data-category=' . $row["category_id"] . '>';
                            echo '<div class="card product-card">';
                            echo '<img src="' . $row["image"] . '" class="card-img-top" alt="Product Image">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                            echo '<p class="card-text"><strong>Price: $' . $row["price"] . '</strong></p>';
                            echo '<a href="productView.php?product_id=' . $row["product_id"] . '"><button class="btn btn-sm btn-dark background-green-asc grey-asc-text me-2">View Details</button></a>';
                            echo '<button class="btn btn-sm btn-dark background-green-asc grey-asc-text" onclick="addToCart(' . $row["product_id"] . ', \'' . $row["name"] . '\', ' . $row["price"] . ', \'' . $row["image"] . '\')">Add to Cart</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "No products available";
                    }
                    ?>
                    <!-- emd pf displaying products -->
                </div>
            </div>
        </div>
    </div>
    <!-- end of main container -->

    <!-- footer -->
    <div class="row" data-aos="fade-up">
        <div class="footer-asc col-md-12 mt-5 p-5">
            <h2 class="h2-footer green-asc-text text-center mb-4" data-aos="fade-up">Ascendre</h2>
            <p class="p-footer green-asc-text text-xs" data-aos="fade-up"> Acendre is your ultimate destination for premium sports
                equipment. We specialize in providing top-tier gear for basketball, soccer, badminton, volleyball,
                and running. Our store features a diverse selection of products from renowned local and
                international brands, ensuring that athletes of all levels have access to the best tools to enhance
                their performance.<br> <br>

                At Acendre, we are committed to supporting both local craftsmanship and global innovation, offering
                a curated collection that meets the highest standards of quality and durability. Whether you're
                gearing up for a professional match or enjoying a casual game, you'll find the perfect equipment to
                meet your needs at Acendre.<br> <br>

                Discover the excellence in sports gear with Acendre – where passion and quality unite.
            </p>
            <p class="p-footer green-asc-text text-center text-xs mt-5" data-aos="fade-up">Copyright @ 2024 ASCENDRE - limee</p>
            <br>
        </div>
    </div>
    <!-- end of footer -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- aos js -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- js -->
    <script src="js/productPage.js"></script>
    <script src="js/cart.js"></script>
    <script>
        AOS.init();
        window.addEventListener('load', AOS.refresh)
    </script>

</body>

</html>