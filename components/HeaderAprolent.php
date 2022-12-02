<div class="cont-nav w-100 h-auto">
    <header class="mt-1 d-flex d-flex container-fluid">
        <div class="cont-title d-flex">
            <h1 class="mt-2 logo">Aprolent</h1>
            <a class="nav-link sub-title mt-3" href="#">Categorias</a>
        </div>

        <div class="form-container bar-search d-flex">
            <form action="form" class="d-flex" role="search">
                <div class="box-cont">
                    <!-- <label class="text-bar">Buscar cualquier cosa</label> -->
                    <input type="text" placeholder="Buscar cualquier cosa" class="rounded-pill mt-1 bar bg-light fs-6">
                    <!-- <span class="text-secondary position-absolute text-bar">Buscar cualquier cosa</span> -->
                    <button class="btn mt-1" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>

        <nav class="navbar navbar-expand-lg mt-1 d-flex">
            <ul class="nabvar-nav me-auto mb-2 mb-lg-0 d-flex mr-2">
                <li class="nav-item">
                    <a href="#" class="nav-link">Aprolent Business</a> <!-- Font size need rem-->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">Enseñe en Aprolent</a> <!-- Font size need rem-->
                </li>
            </ul>

            <div class="icons d-flex">
                <div class="user-learning">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Mi aprendizaje</a> <!-- Show when login -->
                    </li>
                </div>
                <div class="favorites">
                    <a href="#" class="nav-link">
                        <img src=".././assets/imgs/SVG/heart-regular.svg" width="20px" height="30px" alt="cart-shopping">
                    </a>
                </div>

                <div class="cart-shopping">
                    <a href="#" class="nav-link">
                        <img src=".././assets/imgs/SVG/cart-shopping-solid.svg" width="20px" height="30px" alt="">
                    </a>
                </div>


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['admin_name'] ?> </span>
                        <!-- <img class="img-profile rounded-circle" src=""> -->
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=".././php/logoutController.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                            </i>
                            Salir
                            
                        </a>
                    </div>
                </li>
            </div>
        </nav>
    </header>
</div>