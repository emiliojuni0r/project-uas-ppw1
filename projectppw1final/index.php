<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascendre - Sign in</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/signin.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- start of left side -->
            <div class="col-md-6 background-grey-asc p-5">
                <div class="container d-flex align-items-center justify-content-center h-100">
                    <img src="img/login/basketball_login.png" alt="basketball_login"
                        class="b-login-img img-fluid mx-0 my-auto">
                    <img src="img/login/football_login.png" alt="football_login"
                        class="f-login-img img-fluid mx-0 my-auto">
                </div>
            </div>
            <!-- end of left side -->
             <!-- start of right side -->
            <div class="col-md-6 background-green-asc p-5">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <!-- title -->
                    <h1 class="text-center mt-5 mb-5">ASCENDRE</h1>
                    <!-- end of title -->
                    <!-- start form -->
                    <form>
                        <div class="mb-4">
                            <label for="InputEmailLogin" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="">
                            <label for="inputPasswordLogin" class="form-label">Password</label>
                            <input type="password" id="inputPasswordLogin" class="form-control"
                                aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long and must not contain spaces, special
                                characters, or emoji.
                            </div>
                        </div>
                        <p class="mt-1">Don't have an account? <a href="SignUp.php" class="click-here"><u>click here</u></a></p>
                    </form>
                    <!-- end of form -->
                    <!-- button -->
                    <div class="text-center">
                        <a href="Home.php">
                            <button type="submit" class="btn btn-lg btn-dark mt-3" onclick="home()">Sign in</button>
                        </a>
                    </div>
                    <!-- end of button -->
                </div>
            </div>
            <!-- end of right side -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>