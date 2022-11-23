<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/about.css">
    <title>Acerca de nosotros</title>
</head>

<body>

    <!-- Head nav bar -->
   <?php 
        include('../components/HeaderAbout.php');
   ?>

    <section class="about-Main">
        <div class="img">

        </div>
        <div id="about-us">
            <h2>
                DeveroCode
            </h2>
            <span>
                Soluciones en la palma de tu mano
            </span>

            <div id="p">
                <p>
                    Somos una empresa que nos caracterizamos por la eficiencia de nuestros proyectos creativos e
                    inovadores.
                    Desde el 2017 hemos desarollado soluciones para estudiantes y empresas, adémas de impartir cursos
                    para
                    la comunidad tecnólogica y para todo público.
                </p>
            </div>
        </div>


    </section>



    <section class="container">
        <div class="Visitas">

            <div class="views">
                <h2> 300+</h2>
                <span>Desde 2017, DeveroCode ha pasado de ser un equipo de 2 a más de 300</span>
            </div>

            <div class="views">
                <h2>12 mil+</h2>
                <span>Más de 12 mil personas usan DeveroCode para crear sus aplicaciones Web</span>
            </div>

            <div class="views">
                <h2>160,000</h2>
                <span>más de 160 mil estudiantes absorbieron cursos gratuitos</span>
            </div>

        </div>
        <hr>
    </section>



    <div class="footer">
        <div class="foter">
            <div class="text">
                <h2>Tienes curiosidad acerca de nuestra plataforma, los precios y planes de DeveroCode?</h2>
                <span>Contactanos y resuelve tus dudas para aprender más sobre nosotros</span>
            </div>

            <div class="butt">
                <a href="/index.html?#contac" class="button-contac">Contactanos</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php 
        include('../components/Footer.php');
    ?>
</body>

</html>
