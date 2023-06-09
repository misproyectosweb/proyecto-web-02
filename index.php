<!DOCTYPE html>

<!-- Página principal de la iglesia Hacienda del Rey  -->

<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Iglesia, Hacienda, Rey, invitar, acompañar, adorar, formar, amar, servir, enseñar, solidaridad, doctrina"/>
        <meta name="description" content="Bienvenidos a la página web de la Iglesia Hacienda del Rey, donde encontrará noticias, articulos y mucha más información para tu crecimiento espiritual"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        <link href="librerias/normalize.css" rel="stylesheet" type="text/css"/>        
        <link href="librerias/slick.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="contenedor">

            <!--  ***** Inicio sección encabezado ***** -->            
            <header class="encabezado">            
                <div class="logo">
                    <img src="imagenes/LogoIglesiaColor.png" alt="Logo oficial de la iglesia Hacienda del Rey"/>
                </div>                  
            </header>
            <!--  ***** Fin sección encabezado ***** -->

            <!--  ***** Inicio contenido principal ***** -->
            <main class="contenido">

                <!--  ***** Inicio sección texto de la visión ***** -->
                <div class="imagenFondo">                    
                    <div class="fondoMenu">
                        <div class="marcoTitulo">
                            <h2 class="titulo"><span>Bienvenidos</span></h2>
                        </div>
                        <nav class="menu" data-aos="zoom-in-down" data-aos-duration="2000">
                            <a href="nuestraVision.php" class="item">                        
                                <i class="opcion fas fa-church"></i>
                                <h2 class="tituloItem">Quiénes somos</h2>
                            </a>
                            <a href="reflexiones.php" class="item">                        
                                <i class="opcion fas fa-bible"></i>
                                <h2 class="tituloItem">Reflexiones</h2>
                            </a>
                            <a href="actividades.php" class="item">                        
                                <i class="opcion far fa-calendar-alt"></i>
                                <h2 class="tituloItem">Actividades</h2>
                            </a>
                            <a href="contacto.php" class="item">                        
                                <i class="opcion fas fa-envelope-open-text"></i>
                                <h2 class="tituloItem">Contáctenos</h2>
                            </a>
                        </nav>                        
                    </div>
                </div>

                <!--  ***** Inicio sección galería de imágenes ***** -->
                <div class="carrusel" id="carrusel">
                    <div class="contenedor-imagenes multiple-items">                                                
                        <div class="items">
                            <img src="imagenes/textobiblico_1.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                        <div class="items">
                            <img src="imagenes/textobiblico_2.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                        <div class="items">
                            <img src="imagenes/textobiblico_3.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                        <div class="items">
                            <img src="imagenes/textobiblico_4.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                        <div class="items">
                            <img src="imagenes/textobiblico_5.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                        <div class="items">
                            <img src="imagenes/textobiblico_6.jpg" alt=""/>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <!--  ***** Fin sección galería de imágenes ***** -->

                <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
                <div class="wave">
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C119.35,151.47 320.26,-102.13 500.00,49.98 L500.00,150.00 L-1.41,154.44 Z" style="stroke: none; fill: #003958;"></path>
                    </svg>
                </div>
            </main>    

            <!--  ***** Fin contenido principal ***** -->

            <!-- ***** Inicio sección pie de página ***** -->
            <footer class="contenedorPiepagina">

                <!-- ***** Inicio sección logo iglesia ***** -->
                <div class="columna-logo" data-aos="zoom-in-down" data-aos-duration="1500">
                    <img src="imagenes/LogoIglesiaBlanco.png" alt=""/>
                </div>                
                <!-- ***** Fin sección logo iglesia ***** -->

                <!-- ***** Inicio sección conociendo la iglesia ***** -->
                <div class="columna-menu" data-aos="zoom-in-down" data-aos-duration="1500">
                    <h2>Conozca nuestra iglesia:</h2>
                    <ul>
                        <li><a href="nuestraVision.php">Quiénes somos</a></li>
                        <li><a href="reflexiones.php">Reflexiones</a></li>
                        <li><a href="actividades.php">Actividades</a></li>
                        <li><a href="contacto.php">Contáctenos</a></li>
                    </ul>                                                                                                
                </div>
                <!-- ***** Fin sección conociendo la iglesia ***** -->

                <!-- ***** Inicio sección redes sociales ***** -->
                <div class="columna-redes" data-aos="zoom-in-down" data-aos-duration="1500">
                    <h2>Siganos en redes por:</h2>
                    <div class="redes">
                        <i class="icono fab fa-facebook-f"></i>
                        <a href="#"><label>Facebook</label></a>
                    </div>
                    <div class="redes">
                        <i class="icono fab fa-whatsapp"></i>                        
                        <a href="#"><label>Whatsapp</label></a>
                    </div>
                    <div class="redes">
                        <i class="icono fab fa-instagram"></i>
                        <a href="#"><label>Instagram</label></a>
                    </div>
                </div>
                <!-- ***** Fin sección redes sociales ***** -->

                <div class="columna-contacto" data-aos="zoom-in-down" data-aos-duration="1500">
                    <h2>Información de contacto:</h2>
                    <div class="datos">
                        <i class="icono fab fa-waze"></i>                        
                        <a href="contacto.php">Moravia, Romeral, diagonal 53</a>                        
                    </div>

                    <div class="datos">
                        <i class="icono fas fa-mobile-alt"></i>
                        <label>(+506)&nbsp;XXXX-XXXX</label>
                    </div>

                    <div class="datos">
                        <i class="icono fas fa-envelope-open-text"></i>
                        <label>Lorem_ipsum@sitamet.com</label>
                    </div>
                </div>
                <!-- ***** Fin sección datos de contacto ***** -->

                <!-- ***** Inicio sección datos de copyright ***** -->
                <div class="contenedorInformacion">
                    <div class="barraInfo">
                        <i class="far fa-copyright"></i>
                        <label>&nbsp;2022 Todos los Derechos Reservados&nbsp;&nbsp;-&nbsp;&nbsp;Iglesia Hacienda del Rey</label>
                    </div>
                </div>
                <!-- ***** Fin sección datos de copyright *****-->   

            </footer>
            <!-- ***** Fin sección pie de página ***** -->                         
        </div>    

        <!-- ***** Archivos javascript ***** -->                            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>                                          
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="librerias/slick.min.js" type="text/javascript"></script>
        <script src="javascript/galeriaImagenes.js" type="text/javascript"></script>
        <?php
        // put your code here
        ?>
    </body>
</html>
