<?php
    // Php database connection
    include('../../php/connection.php');
    error_reporting(0);
    session_start();

    // If the user is already logged in, redirect him to welcome page
    if(isset($_SESSION["nombre"])){
        header("location: .././index.php");
        exit;
    }if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=md5($_POST["password"]);

        if($password==){}
    }

 ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Icons Fontawesome -->
    <script src="https://kit.fontawesome.com/85d631ed4b.js" crossorigin="anonymous"></script>
    <!-- Recycling styles -->
    <link rel="stylesheet" href="../../assets/css/login-main.css">
    <!-- Register styles -->
    <link rel="stylesheet" href="../../assets/css/register-min.css">
    <!-- Styles to Header -->
    <link rel="stylesheet" href="../../assets/css/styles-home.css">
    <title>Register</title>
</head>

<body class="register register-card">
    <?php
        include('../../components/HeaderLoginR.php');
    ?>

    <div id="particles-js"></div>
    <div class="container-fluid min-vh-100 w-100">
        <div class="row w-100 min-vh-100">
            <div class="col-lg-4 col-md-8 col-12 mx-auto d-flex justify-content-center align-items-center">
                <div class="card z-index-0">
                    <!-- Cabecera -->
                    <div class="p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1 card-header-1">
                            <div class="cont-text">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registrate con</h4>
                            </div>
                            <!-- sign in with another acount -->
                            <div class="row mt-3">
                                <div class="col-2 text-center ms-auto">
                                    <a href="#" class="btn btn-link px-3">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="col-2 text-center px-2">
                                    <a href="#" class="btn btn-link px-3">
                                        <i class="fa-brands fa-google"></i>
                                    </a>
                                </div>
                                <div class="col-2 text-center me-auto">
                                    <a href="#" class="btn btn-link px-3">
                                        <i class="fa-brands fa-github text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <form action="" method="post" role="form" class="text-start">
                            <div class="data-input my-3">
                                <input type="email" required>
                                <label>Email</label>
                            </div>
                            <div class="data-input my-3">
                                <input type="password" required>
                                <label>Password</label>
                            </div>
                            <div class="data-input my-3">
                                <input type="text" required>
                                <label>Role</label>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn bg-gradient-primary w-75 my-4 mb-2">Iniciar</button>
                    </div>
                    <span class="mt-4 text-center text-sm text-secondary mb-4">Ya tengo una cuenta? <a href="../register and login/login.php" class="text-dark link-login">Iniciar</a></span>
                </div> 
            </div>
        </div>
    </div>

    <!-- Js Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <!-- Particles -->
    <script src="../../assets/Js/effects/particles.min.js"></script>
    <script src="../../assets/Js/effects/app.js"></script>
   
</body>

</html>