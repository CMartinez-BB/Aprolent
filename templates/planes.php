<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Diseño Web</title>
</head>

<body>

    <!-- Header - Menu -->
    <?php 
        include('../components/HeadePlanes.php');
   ?>

    <!-- section Main-->
    <section class="main-container">

        <div class="img">

        </div>


        <!-- Info Principal -->
        <div class="container-principal">
            <h2 id="logo-2">Desarrollo web</h2>
            <h2 id="single-text">Expresamos y programamos tu idea</h2>


        </div>

        <a href="#contac" class="button">✉ Mensaje</a>
    </section>

    <!-- Section caracteristicas -->
    <section class="caracteristicas">

        <h2 id="title">Desarollamos tu sitio hecho a tu medida</h2>
        <span>recibe de nosotros la mejor asesoría</span>
        <hr>
        <div class="content">
            <div class="sop">

                <h2 id="centrame">Soporte y asesoría</h2>


                <img src="../assets/imgs/iCons/soporte.png" alt="">
            </div>

            <div class="sop">
                <h2 class="re-size">Alojamiento y <br> dominio</h2>
                <img class="size" src="../assets/imgs/iCons/dominio.png" alt="">
            </div>

            <div class="sop">
                <h2 class="re-size">Formulario de <br> contacto</h2>
                <img class="size" src="../assets/imgs/iCons/formulario.png" alt="">
            </div>


            <div class="sop">
                <h2 class="re-zise" style="margin-bottom: -23px;">Aplicaciones web <br> para móviles</h2>
                <img class="size" src="../assets/imgs/iCons/app movil.png" alt="">
            </div>
        </div>
    </section>

    <!-- Planes backgrounds + info -->
    <section class="cont-planes">
        <h2 style="color: #868e96; font-weight: 900;">CONOCE NUESTROS PRECIOS</h2>

        <div class="content-plan">
            <div class="ba var">

                <h2>BÁSICO</h2>
                <div class="ba-back">
                    <h2 class="var2" style="font-size: 3em;">---</h2>
                    <span class="var2" style="color: #868e96; font-size: 1.2em">pago único</span>
                </div>

                <div class="info-content">
                    <p> 5 <span>Secciones</span> </p>
                    <p> Dominio<span> y hosting</span> </p>
                    <p> 2 <span>Meses de Soporte</span> </p>
                </div>

                <div class="button-div">
                    <a href="#" class="button-contac button">Pagar</a>
                </div>

            </div>

            <div class="ba var">

                <h2>AÚTONOMO</h2>
                <div class="ba-back">
                    <h2 class="var2" style="font-size: 3em;">---</h2>
                    <span class="var2" style="color: #868e96; font-size: 1.2em">pago único</span>
                </div>

                <div class="info-content">
                    <p>Panel de Administración</p>
                    <p> Dominio<span> y hosting</span> </p>
                    <p>Formulario <span> de contacto</span> </p>
                </div>

                <div class="button-div">
                    <a href="#" class="button-contac button">Pagar</a>
                </div>

            </div>

            <div class="ba var">

                <h2>TIENDA</h2>
                <div class="ba-back">
                    <h2 class="var2" style="font-size: 3em;">---</h2>
                    <span class="var2" style="color: #868e96; font-size: 1.2em;">pago único</span>
                </div>

                <div class="info-content">
                    <p>Panel de Administración</p>
                    <p style="font-weight: 300 !important;">Inventario</p>
                    <p style="font-weight: 300 !important;">Pagos en lineas</p>
                </div>

                <div class="button-div">
                    <a href="#" class="button-contac button">Pagar</a>
                </div>

            </div>
            

            <div class="ba var">

                <h2>PERSONALIZADO</h2>
                <div class="ba-back">
                    <h2 class="var2" style="font-size: 3em;">---</h2>
                    <span class="var2" style="color: #868e96; font-size: 1.2em">pago único</span>
                </div>

                <div class="info-content">
                    <p>Desarrollo Espécifico</p>
                    <p style="font-weight: 300 !important;">Soluciones únicas</p>
                    <p style="font-weight: 300 !important;">App web</p>
                </div>

                <div class="button-div">
                    <a href="#" class="button-contac button">Pagar</a>
                </div>

            </div>
        </div>

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
    
    <!-- Section footer -->
    <?php
        include('../components/Footer.php');
    ?>
</body>

</html>