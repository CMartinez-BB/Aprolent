<?php
// Called BD
include("../../php/connection.php");

if (isset($_POST['registro'])) {
    $name = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    // encrypting the password
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM usuarios WHERE nombre='$name' && email='$email' && nivel='$user_type' && password='$password' ";
    $result = mysqli_query($conexion, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'Este usuario o correo ya esta registrado';
    } else {
        $inssert = "INSERT INTO usuarios(nombre,email,nivel,password) VALUES('$name','$email', '$user_type', '$password')";
        mysqli_query($conexion, $inssert);
        header('location: ./login.php');
    }
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
                        <form action="" method="POST" role="form" class="text-start">
                            <?php
                            if (isset($error)) {
                                foreach ($error as $error) {
                                    echo '<span>' . $error . '</span>';
                                };
                            }
                            ?>
                            <div class="data-input my-3">
                                <input type="text" name="nombre" required>
                                <label>Nombre</label>
                            </div>
                            <div class="data-input my-3">
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                            <div class="data-input my-3">
                                <input type="password" name="password" required>
                                <label>Password</label>
                            </div>
                            <div class="data-input my-3">
                                <!-- Slect role -->
                                <select name="user_type" id="select">
                                    <option value="title">Seleciona tu destino</option>
                                    <option value="aprendiz">aprendis</option>
                                    <option value="maestro">maestro</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-1" name="registro">Iniciar</button>
                            </div>

                            <span class="mt-1 text-center text-sm text-secondary mb-4">Ya tengo una cuenta? <a href="../register and login/login.php" class="text-dark link-login">Iniciar</a></span>
                        </form>
                    </div>
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