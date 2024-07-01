<?php
include 'db_connect.php';

$product_id = $_GET['product_id'];

// ambil detail depends of id
$sql = "SELECT * FROM product WHERE product_id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Ascendre - View ' . $product["name"]; ?></title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add padding to the top and bottom of the content */
        .content-padding {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- start of navbar -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
        <div class="container-fluid custom-color-navbar">
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
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page"
                            href="productPage.php">Products</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link active green-asc-text" aria-current="page" href="cart.php">
                            <img src="img/svg/cart.svg" alt="Cart">
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

    <!-- start product content -->
    <div class="container mt-5 content-padding">
        <div class="row">
            <div class="col-md-6">
                <!-- Simple Image Display -->
                <img src="<?php echo $product["image"] ?>" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <!-- Product Details -->
                <h2><?php echo $product["name"] ?></h2>
                <p><?php echo $product["description"] ?></p>
                <p>Price: $<?php echo $product["price"] ?></p>
                <button class="btn btn-dark background-green-asc"
                    onclick="addToCart(<?php echo $product["product_id"] ?>, '<?php echo $product["name"] ?>', <?php echo $product["price"] ?>, '<?php echo $product["image"] ?>')">Add
                    to Cart</button>

            </div>
        </div>
    </div>
    <!-- end of product content -->

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
    <script>
        AOS.init();
        window.addEventListener('load', AOS.refresh)
    </script>
    <!-- Custom JS -->
    <script src="js/cart.js"></script>
</body>

</html>