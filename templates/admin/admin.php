<?php
    // Called BD
    include("../../php/connection.php");
    session_start();
    

    if (!isset($_SESSION['admin_name'])) {
        # code...
        header('../register and login/login.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Icons by Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Icons by Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Icons by Fontawesome -->
    <script src="https://kit.fontawesome.com/85d631ed4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <!-- Import custon css -->
    <link rel="stylesheet" href="../../assets/css/custom.min.css">
    <title>Master</title>
</head>

<body>
    <div class="wrapper d-flex">
        <!-- side menu left -->
        <aside class="navbar-nav w-25 sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Logo -->
            <div class="sidebar-brand-text mx-3 logo">
                <h4>DeveroCode</h4>
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-briefcase-fill"></i>
                    <span>Proyectos</span>
                </a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-book-fill"></i>
                    <span>Curso</span>
                </a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-cloud-upload-fill"></i>
                    <span>Calificaciones</span>
                </a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-gear-fill"></i>
                    <span>Configuraciones</span>
                </a>
            </li>

            <!-- <button class="btn-mas">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button> -->
            <!-- Function wrapp -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->
        </aside>
        <!-- Content page -->
        <div id="content-wrapper" class="d-flex flex-column w-100">
            <!-- Targets -->
            <div id="content">
                <!-- Navbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 w-100 static-top shadow">
                    <!-- Nav search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Estoy de suerte" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <span class="fw-normal">buscar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Messages, username and Notifications -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Notifications -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-bell-fill" viewBox="0 0 20 20">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-info badge-counter camp">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notificaciones
                                </h6>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Date -->
                                        <div class="small text-gray-500">Noviembre 9, 2022</div>
                                        <span class="font-weight-bold">
                                            Aprovecha este buen fin y promociona tus cursos con las mejores rebajas
                                        </span>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Date -->
                                        <div class="small text-gray-500">31 de octubre, 2022</div>
                                        <span class="font-weight-bold">Tu curso HTML + CSS ha quedado en top No.1</span>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-danger">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Date -->
                                        <div class="small text-gray-500">
                                            Noviembre 30, 2022
                                        </div>
                                        <span class="font-weight-bold">
                                            Hemos agregado nuevas configuraciones, por favor actualiza tu información
                                        </span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-chat-left-fill" viewBox="0 0 20 20">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                </svg>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-info badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Mensajes
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-danger">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 12, 2019</div>
                                        <span class="font-weight-bold">
                                            ¿Habra una manera de llamar una funcion dentro de otra?, quedo atento a su
                                            repsuesta :)
                                        </span>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Noviembre 12, 2022</div>
                                        <span class="font-weight-bold">
                                            Semana 2: requiero ayuda al centrar un div, he probado con grid pero no ha
                                            funcionado. ¿alguna solución?
                                        </span>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-secondary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Noviembre 16, 2022</div>
                                        <span class="font-weight-bold">
                                            ¿Vue js para cuando?, tome el curso de conceptoos basicos, pero quiero ver
                                            si existe posibilidades de tomar clases particulares
                                        </span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <!-- Admin name -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['admin_name'] ?> </span>
                                <!-- <img class="img-profile rounded-circle" src=""> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="../aprolent.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Home
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../php/logoutController.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Salir
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="container-fluid">
                <!-- Targets -->
                <div class="container-fluid w-100 mb-4">
                    <!-- Content Row -->
                    <div class="row w-100">
                        <!-- Card cursos -->
                        <div class="w-100 mb-4 col-xl-3 col-md-6">
                            <div class="card card-1 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Cursos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 fs-3">45 Activos</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card visitas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-2 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Visitas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span class="fs-3">1.200</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shoping -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-3 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                <span>
                                                    cursos comprados
                                                </span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 fs-3 mb-0 mr-3 font-weight-bold text-gray-800">85%
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Money -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2 card-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Dinero ganado</div>
                                            <div class="h5 fs-3 mb-0 font-weight-bold text-gray-800">$8,000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table alumnos -->
                <div class="card shadow m-auto" id="card-alumn">
                    <div class="card-container">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-secondary">Alumnos</h6>
                        </div>
                        <!-- Table -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <!-- Show students in tables -->
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length"><label>Mostrar<select
                                                        name="dataTable_length" aria-controls="dataTable"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                    </select></label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="dataTable_filter" class="dataTables_filter"><label>Buscar
                                                    alumno:<input type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="dataTable"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Start section table information -->
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                                cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                                style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 185px;">
                                                            <span class="text-black">Nombre</span>
                                                        </th>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 185px;">
                                                            <span class="text-black">Curso</span>
                                                        </th>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 185px;">
                                                            <span class="text-black">Status</span>
                                                        </th>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 185px;">
                                                            <span class="text-black">Generar certificado</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <!-- Start section dates -->
                                                <tbody>
                                                    <?php 
                                                        $alumnos = "SELECT * FROM alumnos";
                                                        $resul = mysqli_query($conexion, $alumnos);

                                                        while($mostrar =mysqli_fetch_array($resul)){
                                                    ?>
                                                    <tr class="odd">
                                                        <td class="sorting_1">
                                                            <p class="name text"> <?php echo $mostrar['nombre'] ?> </p>
                                                        </td>
                                                        <td>
                                                            <p class="cruso-p">
                                                                <?php echo $mostrar['curso'] ?>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="certificate">
                                                                <?php echo $mostrar['status'] ?>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-secondary">
                                                                <p class="generar">Generar</p>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="dataTable_info" role="status"
                                                aria-live="polite">
                                                <span class="text-danger">*Recuerda generar los certficados de los
                                                    alumnos
                                                    con status finalizado</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="dataTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="dataTable_previous"><a href="#" aria-controls="dataTable"
                                                            data-dt-idx="0" tabindex="0" class="page-link">Páginas</a>
                                                    </li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="2" tabindex="0"
                                                            class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="3" tabindex="0"
                                                            class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="4" tabindex="0"
                                                            class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="5" tabindex="0"
                                                            class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="dataTable" data-dt-idx="6" tabindex="0"
                                                            class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next" id="dataTable_next"><a
                                                            href="#" aria-controls="dataTable" data-dt-idx="7"
                                                            tabindex="0" class="page-link">siguiente</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Section pryvacity -->
                <div class="row gx-5 m-auto">
                    <!-- Privacy suggestions illustrated card-->
                    <div class="col-xl-6 mt-5">
                        <div class="card card-raised h-100">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between text-black">
                                    <div class="me-4">
                                        <h2 class="card-title mb-0">
                                            Sugerencias y Tips
                                        </h2>
                                        <p class="card-text">
                                            Encontramos nuevas sugerencias para que logres ser el número uno
                                        </p>
                                    </div>
                                    <img src="../../assets/imgs/SVG/foco.svg" alt="..." style="height: 6rem">
                                </div>
                            </div>
                            <div class="card-footer bg-transparent position-relative ripple-gray px-4 mdc-ripple-upgraded">
                                <a class="stretched-link link text-decoration-none" href="#!">Revisar sugerencias (4)</a></div>
                        </div>
                    </div>
                    <!-- Account storage illustrated card-->
                    <div class="col-xl-6 mt-5">
                        <div class="card card-raised h-100">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between text-black">
                                    <div class="me-4">
                                        <h2 class="card-title mb-0">Almacenamiento</h2>
                                        <p class="card-text">
                                            El almacenamiento de tu cunta se registra en todos los dispositivos vinculados
                                        </p>
                                        <div class="progress mb-2" style="height: 0.25rem">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="30"></div>
                                        </div>
                                        <div class="card-text">15 GB of 90 GB</div>
                                    </div>
                                    <img src="../../assets/imgs/SVG/storage.svg" alt="..." style="height: 6rem">
                                </div>
                            </div>
                            <div class="card-footer bg-transparent position-relative ripple-gray px-4 mdc-ripple-upgraded">
                                <a class="stretched-link link text-decoration-none" href="#!">Liberar espacio</a></div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; DeveroCode</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>



    <!-- Import JS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

    <!-- Animation -->
    <script src="../../assets/Js/jquery.min.js"></script>
    <script src="../../assets/Js/bootstrap.bundle.min.js"></script>


</body>

</html>