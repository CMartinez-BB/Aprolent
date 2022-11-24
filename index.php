<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles-home.css">
    <title>DeveroCode</title>
</head>

<body>
    <?php 
        include('components/Header.php');
    ?>
 

    <!-- Background Main -->
    <section class="main-container">
        <img id="hero" src="assets/imgs/backgroun-html.jpg" alt="">

        <!-- Info Principal -->
        <div class="container-principal">
            <h1 id="logo-2">DeveroCode</h1>
            <h2 id="single-text">Solucionar tus problemas es mi trabajo</h2>
            <span id="text-info">
                En DeveroCode diseñamos y solucionamos tus problemas, implementando soluciones adaptables de acuerdo a
                tus necesidades. Nuestra tecnología es tu mayor solución.
            </span>
            <a href="#contac" class="button-contac button"> 📞 Contactanos</a>

        </div>
    </section>

    <!-- Section Category -->
    <section class="category-container">

        <h2 id="Title-text" style="font-weight:bolder;">¿Necesitas encargar un trabajo?</h2>
        <span style="font-weight:400; font-size: 1.7em; color: #575757; ">
            Somos una compañia que nos caracterizamos por entregas inmediatas
        </span>
        <hr>

        <div class="container">


            <div class="web">

                <img id="nav-web" src="assets/imgs/iCons/pantalla.png" alt="">
                <h3 style="font-weight:bolder;">SITIOS WEB</h3>
                <span id="cristo" style="color: #575757; font-weight: bolder;">
                    Desarrollamos tus ideas justo como lo tengas en mente. Utilizando la mejor tecnología.
                </span>
            </div>

            <div class="Elige-frelancer">

                <img id="nav-web" src="assets/imgs/iCons/programacion.png" alt="">
                <h3 style="font-weight:bolder;"> PROGRAMACION</h3>
                <span id="text-frelancer" style="color: #575757; font-weight: bolder;">
                    Manejamos cualquier tipo de software que pueda facilitar el trabajo. Desde bases de datos hasta
                    control de gastos
                </span>


            </div>


            <div class="movil-res">

                <img id="responsive-img" src="assets/imgs/iCons/responsive.png" alt="">
                <h3 style="font-weight:bolder;">RESPONSIVE</h3>
                <span id="text-movil" style="color: #575757; font-weight: bolder;">
                   Desarrollamos aplicaiones web hechas a la medida. Recibe de nosotros una solución para su negocio
                </span>
            </div>
        </div>
    </section>


    <section class="destacados-container">


        <div class="box">
            <h2>Nuestros trabajos <span>destacados</span></h2>
        </div>

        <figure class="father">


            <figure>
                <img id="app-movil" src="assets/imgs/Work/App movil.jpg" alt="">

                <div class="title">
                    <span class="span-text val-1" style="font-size: 1.2em; font-weight: bold;">App móvil
                        de reparto de comida
                    </span><br>
                    <span style="font-size: 1em; font-weight: bold; color: #575757;">
                        $699 USD
                    </span>
                </div>
            </figure>

            <figure>
                <img id="app-movil" src="assets/imgs/Work/billetera.png" alt="">

                <div class="title">
                    <span class="span-text val-1" style="font-size: 1.2em; font-weight: bold;">Wallet
                        Bancario y Bitcoin
                    </span><br>
                    <span style="font-size: 1em; font-weight: bold; color: #575757;">
                        $899 USD
                    </span>
                </div>
            </figure>

            <figure>
                <img id="app-movil" src="assets/imgs/Work/comercio.png" alt="">

                <div class="title">
                    <span class="span-text val-1" style="font-size: 1.2em; font-weight: bold;">Tienda
                        móvil
                    </span><br>
                    <span style="font-size: 1em; font-weight: bold; color: #575757;">
                        $799 USD
                    </span>
                </div>
            </figure>
        </figure>
    </section>


    <!-- Section contac -->
    <section id="contac">

        <form class="form">

            <h2 class="form__title">Enviar mensaje</h2>

            <div class="form-container">

                <div class="form-group">
                    <input type="text" id="name" class="form_input" placeholder=" ">
                    <label for="name" class="form_label">Nombre</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="email" class="form_input" placeholder=" ">
                    <label for="email" class="form_label">Email</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="asunto" class="form_input" placeholder=" ">
                    <label for="asunto" class="form_label">Asunto</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="mensaje" class="form_input" placeholder=" ">
                    <label for="mensaje" class="form_label">Mensaje</label>
                    <span class="form_line"></span>
                </div>


            </div>

            <input type="submit" class="form_submit" value="Enviar mensaje">
        </form>

    </section>

    <!-- Scction footer -->
   <?php
        include('./components/Footer.php');
   ?>
</body>

</html>