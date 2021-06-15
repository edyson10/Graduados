<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top" style="background-color: #aa1916 !important">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">ingsistemas@ufps.edu.co</a>
                <i class="icofont-phone"></i> (57) 7 5776655 Extensiones 201 y 203
            </div>
            <div class="social-links">
                <a href="https://twitter.com/UFPSCUCUTA" class="twitter" target="_blank"><i class="icofont-twitter"></i></a>
                <a href="https://web.facebook.com/Ufps.edu.co/" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/ufpscucuta/" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="index.html">Graduados<span>.</span></a></h1>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="Inicio">Inicio</a></li>
                    <li><a href="#featured-services">Noticia</a></li>
                    <li><a href="#services">Evento</a></li>
                    <li><a href="#contact">Contacto</a></li>
                    <li><a href="Login" target="_blank">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Bienvenidos a <span>Graduados</spa>
            </h1>
            <h2>P&aacute;gina oficial para ver las noticias y eventos de los graduados del programa de Ingenier&iacute;a de Sistemas de la UFPS.</h2>
            <!--<div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>-->
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Noticias</h2>
                    <h3>&Uacute;ltimas noticias</span></h3>
                </div>
                <div class="row">
                    <?php
                    include_once 'model/conexion.php';
                    $query = $conexion->query("SELECT * FROM noticia ORDER BY id DESC LIMIT 4");
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<div class='col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0'>
                                <div class='icon-box' data-aos='fade-up' data-aos-delay='100'>
                                    <h4 class='title'><a>" . utf8_encode($row["titulo"]) . "</a></h4>
                                    <p class='description'>" . utf8_encode($row["descripcion"]) . "</p>
                                    <br>
                                    <p class='title'>Fecha: " . utf8_encode($row["fecha_noticia"]) . "</p>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Eventos</h2>
                    <h3>&Uacute;ltimos eventos</span></h3>
                </div>

                <div class="row">
                    <?php
                    include_once 'model/conexion.php';
                    $query = $conexion->query("SELECT * FROM `evento` ORDER BY id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<div class='col-lg-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in' data-aos-delay='100'>
                                <div class='icon-box'>
                                    <h4><a>" . utf8_encode($row["titulo"]) . "</a></h4>
                                    <p>" . utf8_encode($row["descripcion"]) . "</p>
                                    <p><strong>Fecha evento: </strong>" . utf8_encode($row["fecha_evento"]) . "</p>
                                    <p><strong>Lugar evento: </strong>" . utf8_encode($row["lugar_evento"]) . "</p>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <h3><span>Contactame</span></h3>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    include_once 'model/conexion.php';
                    $query = $conexion->query("SELECT * FROM `universidad`");
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<div class='col-lg-6'>
                                <div class='info-box mb-4'>
                                    <i class='bx bx-map'></i>
                                    <h3>Direcci&oacute;n</h3>
                                    <p>" . utf8_encode($row["direccion"]) . "</p>
                                </div>
                            </div>

                            <div class='col-lg-3 col-md-6'>
                                <div class='info-box  mb-4'>
                                    <i class='bx bx-envelope'></i>
                                    <h3>Correo</h3>
                                    <p>" . utf8_encode($row["correo"]) . "</p>
                                </div>
                            </div>

                            <div class='col-lg-3 col-md-6'>
                                <div class='info-box  mb-4'>
                                    <i class='bx bx-phone-call'></i>
                                    <h3>Tel&eacute;fono</h3>
                                    <p>" . utf8_encode($row["telefono"]) . "</p>
                                </div>
                            </div>";
                    }
                    ?>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.854163290405!2d-72.4884979!3d7.898878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab4b03ed6c85830e!2sUniversidad%20Francisco%20de%20Paula%20Santander!5e0!3m2!1ses-419!2sco!4v1623702916871!5m2!1ses-419!2sco" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Graduados<span>.</span></h3>
                        <p>
                            Avenida Gran Colombia No. 12E-96 <br>
                            Barrio Colsag, Cúcuta,
                            Colombia <br>
                            <strong>Tel&eacute;fono:</strong> (57) 7 5776655 Extensiones 201 y 203<br>
                            <strong>Correo:</strong> ingsistemas@ufps.edu.co<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="Inicio">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#featured-services">Noticia</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Evento</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces de Inter&eacute;s</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://gidis.ufps.edu.co/dsiwebsite/public/">Sitio Web-Departamento de Sistemas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="biblioteca.ufps.edu.co">Biblioteca Eduardo Cote Lamus</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="200.93.148.47/bienestar/">Vicerrectoría de Bienestar Universitario</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://ingsistemas.cloud.ufps.edu.co/index.php?id=27">Cronograma del Comit&eacute; Curricular</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://web.facebook.com/IngSistUFPS/?fref=ts&_rdc=1&_rdr">Facebook</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Redes sociales.</h4>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/UFPSCUCUTA" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="https://web.facebook.com/IngSistUFPS/?fref=ts&_rdc=1&_rdr" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/ufpscucuta/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Graduados</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Diseñado por <a href="https://ingsistemas.cloud.ufps.edu.co/">Programa de Ingenier&iacute;a de Sistemas</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>