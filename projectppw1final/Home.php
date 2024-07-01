<!-- connect -->
<?php
include 'db_connect.php';

// ambil data product nya dari database
$sql = "SELECT * FROM  Product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascendre</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- LightSlider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
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
    <div class="container">

        <!-- start of carousel -->
        <div id="carouselHome" class="carousel slide carousel-fade" data-bs-ride="carousel" data-aos="fade-down" data-aos-duration="3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner" role="listbox">
                <a href="productView.php?product_id=1">
                    <div class="carousel-item active">
                        <img src="img/carousel/carousel1_kyrie.png" class="d-block w-100" alt="First slide">
                    </div>
                </a>
                <a href="productView.php?product_id=4">
                    <div class="carousel-item">
                        <img src="img/carousel/carousel2_ronaldo.jpg" class="d-block w-100" alt="Second slide">
                    </div>
                </a>
                <div class="carousel-item">
                    <img src="img/carousel/carousel3_running.png" class="d-block w-100" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel/carousel4_volley.jpg" class="d-block w-100" alt="Fourth slide">
                </div>
                <a href="productView.php?product_id=6">
                    <div class="carousel-item">
                        <img src="img/carousel/carousel6_mu.png" class="d-block w-100" alt="Fifth slide">
                    </div>
                </a>
                <a href="productView.php?product_id=3">
                    <div class="carousel-item">
                        <img src="img/carousel/carousel5_abraham.jpg" class="d-block w-100" alt="sixth slide">
                    </div>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden" aria-label="Previous"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden" aria-label="Next"></span>
            </button>
        </div>
        <!-- end of carousel -->

        <!-- disc image -->
        <div class="row gx-5 mt-5 px-4">
            <div class="col text-center disc-container me-2" data-aos="fade-right">
                <a href="#Special-promotions" class="text-decoration-none" style="color:black">
                    <div class="p-3">
                        Don't Miss Out! Special Promotions
                    </div>
                </a>
            </div>
            <div class="col text-center disc-container ms-2" data-aos="fade-left">
                <a href="#Best-sellers" class="text-decoration-none" style="color:black">
                    <div class="p-3">
                        Best Sellers
                    </div>
                </a>
            </div>
        </div>
        <!-- end of disc image -->

        <h2 class="mt-5 whats-new-text" data-aos="flip-up">What's New</h2>
        <!-- product slider -->
        <div class="row mt-4" data-aos="fade-left">
            <ul id="card-slider" class="list-unstyled">
                <li>
                    <a href="productView.php?product_id=1" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product1_kyrie.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Anta Kyrie 1</h3>
                                <p class="small">a brand new Anta basketball shoe engineered for superior agility and
                                    performance on the court</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=11" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product11_nfinity.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Ardiles Nfinity Raiton</h3>
                                <p class="small">a brand new running shoe for ultimate comfort and performance from
                                    Ardiles</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=7" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product7_jerseyfootball2.png" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Jersey Dortmund Home 24/25</h3>
                                <p class="small">Brand new Borussia Dortmund Home Jersey, featuring the iconic black n
                                    yellow design
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=15" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product15_ardilesad2.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Ardiles AD2 Cyclone</h3>
                                <p class="small"> a cutting-edge basketball shoe Made by Ardiles, designed for
                                    unstoppable performance on the court</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=5" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product5_insignia.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Ortuseight Insignia FG</h3>
                                <p class="small">an affordable soccer cleat that delivers great performance and control
                                    on the field</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end of product slider -->


        <!-- all category -->
        <h2 class="mt-4" data-aos="flip-up">All Category</h2>
        <div class="row gy-3">
            <div class="col-6 align-center">
                <a href="productPage.php?category_id=1" class="text-decoration-none">
                    <div class="p-3 all-category-container" style="color:black" data-aos="fade-right">Basketball</div>
                </a>
            </div>
            <div class="col-6">
                <a href="productPage.php?category_id=3" class="text-decoration-none">
                    <div class="p-3 all-category-container" style="color:black" data-aos="fade-left">Volley Ball</div>
                </a>
            </div>
            <div class="col-6">
                <a href="productPage.php?category_id=2" class="text-decoration-none">
                    <div class="p-3 all-category-container" style="color:black" data-aos="fade-right">Football</div>
                </a>
            </div>
            <div class="col-6">
                <a href="productPage.php?category_id=4" class="text-decoration-none">
                    <div class="p-3 all-category-container" style="color:black" data-aos="fade-left">Running</div>
                </a>
            </div>
        </div>
        <!-- end of all category container -->

        <div id="Best-sellers"></div>

        <!-- best sellers -->
        <h2 class="mt-5" data-aos="flip-up">Best Sellers</h2>
        <!-- product slider -->
        <div class="row mt-4" data-aos="fade-left">
            <ul id="best-sellers-slider" class="list-unstyled">
                <li>
                    <a href="productView.php?product_id=2" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product3_BBRX7.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Ballerbro RX7</h3>
                                <p class="small">Check out the BallerBro RX7, our best-selling basketball designed for
                                    exceptional grip and durability on the court</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=10" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product10_mizunokneepad.png" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Mizuno T10 Plus volleyball Kneepad</h3>
                                <p class="small">offering top-notch protection and comfort for peak performance on the
                                    court.</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=12" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product12_ortuseightphyton.jpg" alt="Card Title"
                                class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Ortuseight Phyton</h3>
                                <p class="small">a local brand running shoe designed for exceptional comfort and
                                    performance</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=6" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product6_jerseyfootball.jpg" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Jersey Manchester United Home 23/24</h3>
                                <p class="small">Glory GLory Man United</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="productView.php?product_id=14" class="text-decoration-none">
                        <div class="card">
                            <img src="img/products/product14_mizunomorelio.png" alt="Card Title" class="card-img-top">
                            <div class="card-body">
                                <h3 class="fs-6">Mizuno Morelia Neo IV Pro FG</h3>
                                <p class="small">a top-tier soccer cleat engineered for superior agility and precision
                                    on the field.</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end of product slider -->
        <!-- end of best sellers -->

        <!--  -->
        <div id="Special-promotions"></div>

        <!-- start today promo -->
        <div class="row">
            <h2 class="mt-5" class="green-asc-text" data-aos="flip-up">Special Promotions</h2>
            <div class="container-card-carousel" data-aos="flip-down">
                <div class="card-today-promo">
                    <div class="content-card-carousel">
                        <img src="img/todaypromo/today_promo1.png" alt="" class="img-content-card-carousel">
                    </div>
                </div>
                <div class="card-today-promo">
                    <div class="content-card-carousel">
                        <img src="img/todaypromo/today_promo2.png" alt="" class="img-content-card-carousel">
                    </div>
                </div>
                <div class="card-today-promo">
                    <div class="content-card-carousel">
                        <img src="img/todaypromo/today_promo3.png" alt="" class="img-content-card-carousel">
                    </div>
                </div>
                <div class="card-today-promo">
                    <div class="content-card-carousel">
                        <img src="img/todaypromo/today_promo4.png" alt="" class="img-content-card-carousel">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of card carousel -->


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

                Discover the excellence in sports gear with Acendre – where passion and quality unite.</p>
                <p class="p-footer green-asc-text text-center text-xs mt-5" data-aos="fade-up">Copyright @ 2024 ASCENDRE - limee</p>
                <br>
            </div>
    </div>
    <!-- end of footer -->

    </div>
    <!-- end of main container -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- LightSlider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        AOS.init();
        window.addEventListener('load', AOS.refresh)
    </script>
</body>

</html>


<!-- https://via.placeholder.com/800x400?text=First+Slide -->