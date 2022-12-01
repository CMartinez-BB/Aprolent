<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import styles of Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- My styles -->
    <link rel="stylesheet" href="css/home.css">
    <!-- Kit iCons by Font Awesome -->
    <script src="https://kit.fontawesome.com/85d631ed4b.js" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Style to Slide -->
    <link rel="stylesheet" href="/css/slider.css">
    <!-- Sweep css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title>Cursos en linea: Aprende a tu tiempo</title>
</head>

<body>
    <!-- Container father -->
    <div class="container-box d-flex flex-column">
           <!-- Header section -->
        <?php 
            include('../components/HeaderAprolent.php');
        ?>

        <!-- Carousel -->
        <main id="carousel-cont" class="carousel  slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-cont" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-cont" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-cont" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner modify">
                <div class="carousel-item active">
                    <img src="/imgs/school.jpg" height="100%" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="/imgs/Web-debeloper.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item phrase-cont">
                    <img src="/imgs/phrase.jpg" class="d-block w-100" alt="...">
                    <div class="phrase position-absolute d-flex">
                        <div class="card">
                            <h3>Si lo puede imaginar <br> lo puedes programar</h3>
                            <span>Aprende habilidades para tu futuro, da tus primeros pasos con nosotros</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev left" type="button" data-bs-target="#carousel-cont"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next right" type="button" data-bs-target="#carousel-cont"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </main>

        <!-- Start info to user see the content -->
        <div class="info mt-5 d-flex justify-content-center flex-column align-content-center w-100">
            <section class="title-cont">
                <h2 class="fs-2 text-dark fw-bold">Escoje un tema dentro de nuestro amplio repertorio</h2>
                <span class="fs-4 text-dark" style="margin-left: 100px;">Elige entre 195.000 cursos de video en vivo con
                nuevo contenido cada mes</span>
            </section>

            <nav class="navbar nabvar">
                <ul class="d-flex flex-row w-75">
                    <li class="m-auto">
                        <a href="">Programacion web</a>
                    </li>

                    <li class="m-auto">
                        <a href="">Excel</a>
                    </li>

                    <li class="m-auto">
                        <a href="">JavaScript</a>
                    </li>

                    <li class="m-auto">
                        <a href="">Back-End</a>
                    </li>

                    <li class="m-auto">
                        <a href="">Linux</a>
                    </li>

                    <li class="m-auto">
                        <a href="">Redes</a>
                    </li>
                </ul>
            </nav>

            <section class="programming-cont" style="margin-top: 10px;">
                <div class="title mt-4">
                    <h3>Amplia tus conocimientos como Front-End developer</h3>
                    <div class="sub w-75" style="margin-left: 22px !important;">
                        <span>La empresa de diseño web ha experimentado muchos cambios para descubrir y satisfacer la
                            demanda de los usuarios de todo el mundo, con nostros desarollaras grandes habilidades y
                            profesionalismo desarollando tu creatividad e imaginacion, brindando asi soluciones
                            creativas.</span>
                    </div>

                    <button type="submit">
                        Explorar
                    </button>
                </div>

                <section
                    class="carrousel-cont d-flex flex-row justify-content-center flex-column align-content-center w-100 mt-5">
                    <!-- Swiper -->
                    <div class="swiper mySwiper flex-row d-flex">
                        <div class="swiper-wrapper d-flex flex-row">
                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/html.jpg" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3>HTML maquetacion: aprende maquetacion con 5 ejercicios reales!</h3>
                                    </div>
                                    <div class="master">
                                        <span>Carlos Martinez, DeveroCode</span>
                                    </div>
                                    <div class="price">
                                        <p>$350 MX</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/laravel.jpg" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3>Aprende laravel 9 sin rodeos: crea una aplicacion desde cero</h3>
                                    </div>
                                    <div class="master">
                                        <span>Grijalva romero, Deskode</span>
                                    </div>
                                    <div class="price">
                                        <p>$550 MX</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/vue.jpg" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3>Vue js desde cero: lleva tu nivel a intermedio</h3>
                                    </div>
                                    <div class="master">
                                        <span>Alfonso Marquez, DDCourse</span>
                                    </div>
                                    <div class="price">
                                        <p>$650 MX</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/bootstrap.jpg" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3>Bootstrap 5: flexbox y grid</h3>
                                    </div>
                                    <div class="master">
                                        <span>Carlos Martinez, DeveroCode</span>
                                    </div>
                                    <div class="price">
                                        <p>$150 MX</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/php.png" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3>Master en PHP: emprende practicando con 55 ejercicios practicos</h3>
                                    </div>
                                    <div class="master">
                                        <span>Grijalva romero, Deskode</span>
                                    </div>
                                    <div class="price">
                                        <p>$2350 MX</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Course DJango -->
                            <div class="swiper-slide flex-column">
                                <div class="image">
                                    <img src="/imgs/Carrousel/django.jpg" alt="layout_in_html">
                                </div>

                                <div class="cont-text d-flex flex-column mt-2">
                                    <div class="title">
                                        <h3> La ruta del Back-End | Desarollo web Back-End con python</h3>
                                    </div>
                                    <div class="master">
                                        <span>Isaac Neftali, M.G.T.I</span>
                                    </div>
                                    <div class="price">
                                        <p>$500 MX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>

        <!-- most viewed -->
        <section class="categoria mt-5">
            <div class="cont-category mt-5">
                <h3 class="mt-5">Categorias mas destacadas</h3>
                <div class="card-cont d-flex flex-row mt-4">
                    <section class="development cart">
                        <h4>Desarollo</h4>
                        <div class="list mt-4 d-flex flex-column">
                            <div class="cont mb-3">
                                <a href="">Python</a>
                                <div class="students mb-3">
                                    <span class="text-secondary">312,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Web development</a>
                                <div class="students">
                                    <span class="text-secondary">312,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Machine learning</a>
                                <div class="students">
                                    <span class="text-secondary">312,129 estudiantes</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="business cart">
                        <h4>Business</h4>
                        <div class="list mt-4 d-flex flex-column">
                            <div class="cont mb-3">
                                <a href="">Financil analysis</a>
                                <div class="students">
                                    <span class="text-secondary">1,312,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Financial</a>
                                <div class="students">
                                    <span class="text-secondary">12,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Marketing</a>
                                <div class="students">
                                    <span class="text-secondary">512,129 estudiantes</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="software cart">
                        <h4>Software y Tics</h4>
                        <div class="list mt-4 d-flex flex-column">
                            <div class="cont mb-3">
                                <a href="">Programmer</a>
                                <div class="students">
                                    <span class="text-secondary">2,302,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Mobile Application</a>
                                <div class="students">
                                    <span class="text-secondary">512,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">Web Application</a>
                                <div class="students">
                                    <span class="text-secondary">112,129 estudiantes</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="design cart">
                        <h4>Diseño</h4>
                        <div class="list mt-4 d-flex flex-column">
                            <div class="cont mb-3">
                                <a href="">Information Designer</a>
                                <div class="students">
                                    <span class="text-secondary">312,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">UX Designer</a>
                                <div class="students">
                                    <span class="text-secondary">3,112,129 estudiantes</span>
                                </div>
                            </div>
                            <div class="cont mb-3">
                                <a href="">UI Designer</a>
                                <div class="students">
                                    <span class="text-secondary">3,612,129 estudiantes</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <button>
                    Descubre mas
                </button>
            </div>
        </section>
    </div>



    <!-- Import js of Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            centeredSlides: true,
            loop: true,
            spaceBetween: 30,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>