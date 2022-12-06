<?php  
    include('.././php/mail.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/progra.css">
    <title>Programación</title>
</head>

<body>
    <!-- Header section -->
    <?php 
        include('../components/HeaderProgramacion.php');
    ?>

    <!-- section Main-->
    <section class="main-container">

        <div class="img"
            style="background-image: url(../assets/imgs/wallpapers/programacion-2.png) !important; background-position: center;">

        </div>


        <!-- Info Principal -->
        <div class="container-principal">
            <h2 id="logo-2">CURSOS DE PROGRAMACIÓN</h2>
            <h2 id="single-text">Aprende cualquier tipo de lenguaje con nosotros</h2>


        </div>

        <a href="#contac" class="button">✉ Mensaje</a>
    </section>

    <!-- Start section caracteristicas -->
    <section class="caracteristicas">

        <h2 id="title">Herramientas totalmente especializadas</h2>
        <span>Soluciones a la palma de tu mano</span>
        <hr>
        <div class="content">

            <div class="cubo">

                <div class="arriba">
                    <div class="sop">

                        <h2 id="centrame">HTML:5 Avanzado</h2>


                        <img src="../assets/imgs/iCons/html.png" alt="">
                    </div>

                    <div class="sop">
                        <h2 class="re-size">CSS <br> Flexbox y Grid</h2>
                        <img class="size" src="../assets/imgs/iCons/css.png" alt="">
                    </div>
                </div>

                <div class="abajo">
                    <div class="sop">
                        <h2 class="re-size">Js y Java Vanilla</h2>
                        <img class="size" src="../assets/imgs/iCons/java.png" alt="">
                    </div>


                    <div class="sop">
                        <h2 class="re-zise" style="margin-bottom: -23px;">Front-End Developer</h2>
                        <img class="size" src="../assets/imgs/iCons/front-end.png" alt="">
                    </div>
                </div>
            </div>

            <div class="img-presentation">
                <div class="img" style="background-image: url('.././assets/imgs/wallpapers/pngegg.png')">

                </div>
            </div>
        </div>
    </section>

    <!-- Section contact -->
    <section id="contac">

        <form class="form" method="post">

            <h2 class="form__title">Enviar mensaje</h2>

            <div class="form-container">

                <div class="form-group">
                    <input type="text" id="name" name="name" class="form_input" placeholder=" ">
                    <label for="name" class="form_label">Nombre</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="email" name="email" class="form_input" placeholder=" ">
                    <label for="email" class="form_label">Email</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="asunto" name="asunto" class="form_input" placeholder=" ">
                    <label for="asunto" class="form_label">Asunto</label>
                    <span class="form_line"></span>
                </div>

                <div class="form-group">
                    <input type="text" id="mensaje" name="mensaje" class="form_input" placeholder=" ">
                    <label for="mensaje" class="form_label">Mensaje</label>
                    <span class="form_line"></span>
                </div>


            </div>

            <input type="submit" class="form_submit" name="enviar" value="Enviar mensaje">
        </form>

    </section>


    <!-- Footer -->
    <?php
        include('../components/Footer.php');
    ?>

</body>

</html>