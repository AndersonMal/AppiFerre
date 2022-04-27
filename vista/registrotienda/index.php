<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        AppiFerre, tiendas Agro, ferreterias, campo,herramientas del campo
    </title>
    <link rel="shortcut icon" href="../img/LogoColor.png" type="image/x-icon" />

    <link rel="stylesheet" href="css/normalize.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css" />

    <link rel="stylesheet" href="../css/tiendas.css" />
</head>

<body class="body">
    <header class="">
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img class="logoApiFerre" src="../img/LogoWhite.svg" alt="" />
                    <h3 class="nombre__logo">Appiferre</h3>
                </a>

                <div class="barra__busqueda">
                    <input class="busqueda__input" type="text" placeholder="Busca tus tiendas" />
                    <img src="../img/buscar.png" alt="buscar" />
                </div>

                <div>
                <!-- <button>Carrito</button> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <?php if(isset($_SESSION['NOMBRE_USUARIO'])) include('../recursos/menuLogin.php');
                
                    else include('../recursos/menuLogout.php');?>
                </div>
            </div>
        </nav>
    </header>
    <!-- Inicio carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel_fondo" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="contenidohero"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/ferrer.jpg" class="d-block w-100" alt="promociones" />
            </div>
            <div class="carousel-item">
                <img src="../img/ferrer.jpg" class="d-block w-100" alt="promociones" />
            </div>
            <div class="carousel-item">
                <img src="../img/ferrer.jpg" class="d-block w-100" alt="promociones" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- fin hero carrusel -->

    <main class="contenedor">
        <section class="tiendas tiendas--ferreterias">
            <h1>ferreterias</h1>

            <div class="carouselTienda">
                <button aria-label="Anterior" class="carousel__anterior">
                    <svg xmlns="http://www.w3.org/2000/svg" class="centrar icon icon-tabler icon-tabler-chevron-left"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <button aria-label="Siguiente" class="carousel__siguiente">
                    <svg xmlns="http://www.w3.org/2000/svg" class="centrar icon icon-tabler icon-tabler-chevron-right"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
                <div class="carouselTienda__contenedor">
                    <div id="ferreterias__carousel" class="carouselTienda__lista">
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda1</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda2</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda3</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda4</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda5</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda6</p>
                        </div>
                    </div>
                </div>
                <div role="tablist" class="carousel__indicadores"></div>
            </div>
        </section>
        <!-- Final seccion tiendas ferreterías -->
        <hr>
        <section class="tiendas tiendasAgro">
            <h1>Para el Agro</h1>
            <div class="carouselTienda">
                <button aria-label="Anterior" class="carousel__anterior carousel__anterior-g ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="centrar icon icon-tabler icon-tabler-chevron-left"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <button aria-label="Siguiente" class="carousel__siguiente carousel__siguiente-g">
                    <svg xmlns="http://www.w3.org/2000/svg" class="centrar icon icon-tabler icon-tabler-chevron-right"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
                <div class="carouselTienda__contenedor">
                    <div id="Agro__carousel" class="carouselTienda__lista carouselTienda__lista-g">
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda1</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda2</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda3</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda4</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda5</p>
                        </div>
                        <div class="carouselTienda__elemento">
                            <img src="../img/Banner.jpg" alt="Tiendas" />
                            <p>Tienda6</p>
                        </div>
                    </div>
                </div>
                <div role="tablist" class="carousel__indicadores carousel__indicadores-g"></div>
            </div>
        </section>
    </main>
    <footer class="fondo">
        <div class="footer">
            <div class="footer__contenido footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
            <div class="footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
            <div class="footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
            <div class="footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
            <div class="footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
            <div class="footer__contenido">
                <h4>Titulo</h4>
                <div>
                    <a href="#" class="enlacesFooter">Enlace</a>
                    <a href="#" class="enlacesFooter">Enlace</a>
                </div>
            </div>
        </div>
        <div class="derechosReservados">
            <p>Todos los derechos reservados 2022 Copyright ©</p>
            <a href="https://hojavidajesuscarrillo.netlify.app/" target="_blank" class="enlacesFooter">JESUS
                CARRILLO</a><br />
            <a href="https://aldomorales.netlify.app/" class="enlacesFooter" target="_blank">ALDO MORALES</a><br />
            <a href=" https://andersonmaldonado.netlify.app/ " class="enlacesFooter" target="_blank ">
                ANDERSON MALDONADO
            </a>
        </div>
    </footer>
    <script src="../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>