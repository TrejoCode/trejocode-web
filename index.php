<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index" />
    <meta name="author" content="trejocode" />
    <link rel="manifest" href="./manifest.json" />
    <meta name="theme-color" content="#33c8a3" />
    <title>Trejocode - Diseño y desarrollo Web</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <link rel="stylesheet" href="app/css/style.min.css" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Diseño y desarrollo Web, Progressive Web Apps en Cancún || Sergio Alejandro Trejo | trejocode" />
    <meta name="keywords" content="Diseño Web, Desarrollo Web, Programación, Aplicaciones, Progressive Web App cancún" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.trejocode.com/" />
    <meta property="og:title" content="Trejocode - Diseño y Desarrollo Web en Cancún" />
    <meta property="og:image" content="https://www.trejocode.com/og.jpg" />
    <meta property="og:description" content="Diseño y desarrollo Web, Progressive Web Apps en Cancún || Sergio Alejandro Trejo | trejocode" />
    <!-- IOS Meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="./app/img/icons/icon-96.png /">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
</head>

<body>
    <!-- Cargar Facebook SDK  -->
    <div id="fb-root"></div>
    <script defer>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v3.2'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Messenger Chat -->
    <div class="fb-customerchat" attribution=setup_tool page_id="664372843657624" theme_color="#33c8a3" logged_in_greeting="Hola, ¿cómo puedo ayudarte? 👋" logged_out_greeting="Hola, ¿cómo puedo ayudarte? 👋">
    </div>

    <div class="main flex">
        <div class="column">
            <header class="justify-center">
                <div class="container">
                    <div class="left align-center auto">
                        <div class="logo">
                            <a href="/">
                                <img src="./app/img/logo.png" alt="trejocode logo" title="trejocode logo" class="wow fadeInLeft" />
                            </a>
                        </div>
                    </div>
                    <div class="right align-center">
                        <nav>
                            <a href="#home" class="wow fadeInLeft" data-wow-delay="0.2s">
                                INICIO
                            </a>
                            <a href="#services" class="wow fadeInLeft" data-wow-delay="0.2s">
                                SERVICIOS
                            </a>
                            <a href="#about" class="wow fadeInLeft" data-wow-delay="0.3s">
                                CÓNOCEME
                            </a>
                            <a href="#projects" class="wow fadeInLeft" data-wow-delay="0.3s">
                                PROYECTOS
                            </a>
                            <a href="#contact" class="wow fadeInLeft" data-wow-delay="0.4s">
                                CONTÁCTAME
                            </a>
                        </nav>
                        <div class="social auto wow fadeInLeft" data-wow-delay="0.3s">
                            <a href=" https://www.linkedin.com/in/sergio-alejandro-trejo-cuxim-11b40a17a" rel="follow" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/TrejoCode/" rel="follow" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="https://www.youtube.com/trejocode" rel="follow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.instagram.com/trejocode/" rel="follow" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="home column" id="home">
                <!-- Banner -->
                <div class="banner justify-center wow fadeIn" data-wow-delay="0.2s">
                    <div class="container row-responsive">
                        <div class="left column">
                            <h1 class="color-darkBlue">
                                ¡Hola, soy trejocode! 👋
                            </h1>
                            <div class="white-space-24"></div>
                            <h3 class="color-lightBlue">
                                Diseño y desarrollo sitios Web increíbles, <br />
                                responsivos, rápidos y autoadministrables
                            </h3>
                            <div class="white-space-24"></div>
                            <div class="btn-container">
                                <a href="#services" class="btn btn-large btn-aqua btn-radius color-white weight-medium text-center">
                                    CONOCER MÁS
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="reponsive-img justify-center align-center wow fadeIn" data-wow-delay="0.3s">
                                <img src="./app/img/banner-devices.png" alt="Flat devices" title="Flat devices" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Services -->
                <div class="services justify-center wow fadeIn" id="services">
                    <div class="container row-responsive row-responsive-ipad">
                        <div class="left column">
                            <div class="white-space-64"></div>
                            <h2 class="color-darkAqua">
                                <span class="color-aqua weight-bold">{</span> SERVICIOS
                            </h2>
                            <div class="white-space-16"></div>
                            <p class="text-justify weight-medium">
                                Concepto claro <b>+</b> diseño atractivo <b>+</b> desarrollo preciso <b>+</b> ultimas tecnologías <b>=</b> ¡Proyectos éxitosos y asombrosos!
                            </p>
                            <div class="white-space-8"></div>
                            <p class="text-justify weight-medium">
                                ¡Trabajemos juntos! me encanta desarrollar Web, cuénteme su idea y haré todo lo demás.
                            </p>
                            <div class="white-space-8"></div>
                            <p class="weight-medium">
                                <b> Pasa el mouse sobre el servicio para observar un cool efecto </b>
                            </p>
                            <div class="white-space-32"></div>
                            <h3 class="color-darkAqua">
                                PROCESO
                            </h3>
                            <div class="white-space-16"></div>
                            <p class="weight-medium">
                                <b>1.- Idea</b>
                            </p>
                            <p>
                                Escucho tus ideas y juntos encontramos cómo hacerlas realidad.
                            </p>
                            <div class="white-space-16"></div>
                            <p class="weight-medium">
                                <b>2.- Análisis / Desarrollo</b>
                            </p>
                            <p>
                                Análisis y seguimiento a tu proyecto para darte la mejor solución. Después, iniciará la creación de tu proyecto.
                            </p>
                            <div class="white-space-16"></div>
                            <p class="weight-medium">
                                <b>3.- Testing / Liberación</b>
                            </p>
                            <p>
                                Pruebas funcionales, paso a paso, de usuarios, una vez garantizado el correcto funcionamiento se publicará tu proyecto.
                            </p>
                            <div class="white-space-64"></div>
                        </div>
                        <div class="right column">
                            <div class="white-space-64"></div>
                            <div class="card-container row-responsive">
                                <div class="card column wow fadeIn" data-wow-delay="0.1s">
                                    <div class="card-head justify-center align-center">
                                        <div class="responsive-img">
                                            <img src="./app/img/design.jpg" alt="Diseño Web" title="Diseño Web" class="holder-image" />
                                        </div>
                                    </div>
                                    <div class="card-body column">
                                        <div class="white-space-8"></div>
                                        <p class="text-center card-title">
                                            <strong>
                                                Diseño Web
                                            </strong>
                                        </p>
                                        <div class="white-space-8"></div>
                                        <p class="text-center font-tiny card-description">
                                            Para que una página web sobresalga entre las demás, debe tener un diseño innovador y atrayente, además,
                                            transmita de forma clara y precisa lo que se ofrece.
                                        </p>
                                        <div class="white-space-8"></div>
                                        <div class="card-footer column">
                                            <p class="text-center font-mini footer-content">
                                                Adobe Photoshop, Adobe XD, HTML, CSS y JS serán las herramientas
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card column wow fadeIn" data-wow-delay="0.2s">
                                    <div class="card-head justify-center align-center">
                                        <div class="responsive-img">
                                            <img src="./app/img/develop.jpg" alt="Desarrollo Web" title="Desarrollo Web" class="holder-image" />
                                        </div>
                                    </div>
                                    <div class="card-body column">
                                        <div class="white-space-8"></div>
                                        <p class="text-center card-title">
                                            <strong>
                                                Desarrollo Web
                                            </strong>
                                        </p>
                                        <div class="white-space-8"></div>
                                        <p class="text-center font-tiny card-description">
                                            Maquetación, programación, testing, DevOps, mantenimiento y S.E.O. son actividades de un desarrollo Web exitoso, utilizando las mejores tecnologías actuales.
                                        </p>
                                        <div class="white-space-8"></div>
                                        <div class="card-footer column">
                                            <p class="text-center font-mini footer-content">
                                                HTML, CSS, JS, PHP, Node.js, React, PostgreSQL, MySQL, Jest, Git, G. Analitycs, Trello
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white-space-32"></div>
                            <div class="card-container row-responsive">

                                <div class="card column wow fadeIn" data-wow-delay="0.1s">
                                    <div class="card-head justify-center align-center">
                                        <div class="responsive-img">
                                            <img src="./app/img/apps.jpg" alt="Progressive Web Apps" title="Progressive Web Apps" class="holder-image" />
                                        </div>
                                    </div>
                                    <div class="card-body column">
                                        <div class="white-space-8"></div>
                                        <p class="text-center card-title">
                                            <strong>
                                                Progressive Web app
                                            </strong>
                                        </p>
                                        <div class="white-space-8"></div>
                                        <p class="text-center font-tiny card-description">
                                            Las PWA integran lo mejor de una web y lo mejor de una aplicación móvil nativa, adaptándose por completo al dispositivo el cual se ejecuta.
                                        </p>
                                        <div class="white-space-8"></div>
                                        <div class="card-footer column">
                                            <p class="text-center font-mini footer-content">
                                                HTML, CSS, JS, React, Jest, Analitycs, Push Notifications
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card column wow fadeIn" data-wow-delay="0.2s">
                                    <div class="card-head justify-center align-center">
                                        <div class="responsive-img">
                                            <img src="./app/img/cursos.jpg" alt="Cursos y Capacitaciones" title="Cursos y Capacitaciones" class="holder-image" />
                                        </div>
                                    </div>
                                    <div class="card-body column">
                                        <div class="white-space-8"></div>
                                        <p class="text-center card-title">
                                            <strong>
                                                Cursos y Capacitaciones
                                            </strong>
                                        </p>
                                        <div class="white-space-8"></div>
                                        <p class="text-center font-tiny card-description">
                                            Domina tecnologías Web, desde 0 hasta diseñador/desarrollador Web y Android, capacitaciones presenciales o en línea, próximamente más cursos.
                                        </p>
                                        <div class="white-space-8"></div>
                                        <div class="card-footer column">
                                            <p class="text-center font-mini footer-content">
                                                HTML, CSS, JS, PHP, React.js, Android, Diseño Web, Diseño Móvil
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="white-space-32"></div>
                        </div>
                    </div>
                </div>
                <!-- End Services -->

                <!-- About me -->
                <div class="about justify-center wow fadeIn" id="about">
                    <div class="container row-responsive">
                        <div class="left column">
                            <div class="white-space-64"></div>
                            <div class="me-picture">
                                <div class="responsive-img column">
                                    <img src="./app/img/me.jpg" alt="trejocode perfil" title="trejocode perfil" />
                                    <div class="white-space-8"></div>
                                    <p class="text-center">
                                        Me, feliz porque visitas mi Web
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="right column">
                            <div class="white-space-64"></div>
                            <h2 class="color-darkAqua">
                                <span class="color-aqua weight-bold">{</span> Me: Sergio Alejandro Trejo <span class="color-aqua weight-bold">}</span>
                            </h2>
                            <div class="white-space-16"></div>
                            <p>
                                <b>Ingeniero en Software y apasionado del desarrollo Web, desde Cancún, México 🏖️</b>
                            </p>
                            <div class="white-space-8"></div>
                            <p>
                                Mi primera formación fue como técnico en programación, en educación bachiller, participé en diferentes concursos durante mi preparación siendo en representante estatal en fotografía y ganador en el innovación en el concurso estatal de ciencia y tecnología con mis compañeros.
                            </p>
                            <div class="white-space-8"></div>
                            <p>
                                Cursé en la Universidad Politécnica de Quintana Roo la Ingeniería en Software en la generación 2015 - 2018, durante mi formación adquirí conocimiento en desarrollo Web, aplicaciones móviles, sistemas operativos y desarrollo de Software en general, mi proyecto de titulación:
                                <b><a href="http://new.upqroo.edu.mx/" target="_blank">new.upqroo.com</a></b>, sitio Web de la Universidad.
                            </p>
                            <div class="white-space-16"></div>
                            <p>
                                <span class="color-aqua weight-bold">{</span><b> Empleos </b><span class="color-aqua weight-bold">}</span>
                            </p>
                            <div class="white-space-8"></div>
                            <p>
                                - Desarrollador Frontend medio tiempo en
                                <b><a rel="nofollow" target="_blank" href="https://www.chicleypegacreativo.com/">Chicle y Pega - Estudio Creativo</a></b>
                            </p>
                            <p>
                                - Gestor de contenido Web WordPress medio tiempo en
                                <b><a rel="nofollow" target="_blank" href="http://www.ocho32.com/">Ocho32</a></b>
                            </p>
                            <p>
                                - <b>ACTUAL</b> Desarrollador Web tiempo completo en
                                <b><a rel="nofollow" target="_blank" href="http://www.dwitmexico.com/">Dwit México</a></b>
                            </p>
                            <div class="white-space-16"></div>
                            <p>
                                <span class="color-aqua weight-bold">{</span><b> Freelance </b><span class="color-aqua weight-bold">}</span>
                            </p>
                            <div class="white-space-8"></div>
                            <p>
                                - Desarrollo de aplicaciones Android: OrtoControl y Bomberos App (Aplicaciones privadas), para Brasil y Colombia
                            </p>
                            <p>
                                - Desarrollador Web:
                                <b><a rel="nofollow" target="_blank" href="http://www.em-sistemas.net/">EM-Sistemas</a></b>
                            </p>
                            <div class="white-space-64"></div>
                        </div>
                    </div>
                </div>
                <!-- End About Me -->

                <!-- Portafolio -->
                <div class="portfolio justify-center" id="projects">
                    <div class="container column">
                        <div class="white-space-64"></div>
                        <h2 class="color-darkAqua">
                            <span class="color-aqua weight-bold">{</span> PROYECTOS
                        </h2>
                        <div class="white-space-16"></div>
                        <p class="weight-medium">
                            Esta es una pequeña colección de proyectos profesionales en los que he trabajado a lo largo de mi trayectoria profesional como ingeniero en Software, algunos se encuentran en desarrollo.
                        </p>
                        <div class="white-space-32"></div>
                        <div class="project-container row-responsive">
                            <div class="project column wow fadeInLeft" data-wow-delay="0.1s" id="buenosdias">
                                <div class="image responsive-img justify-center align-center">
                                    <img src="./app/img/buenosdias.png" alt="Buenos días México" title="Buenos días México" />
                                </div>
                                <div class="white-space-16"></div>
                                <div class="information align-center">
                                    <div class="title column">
                                        <h2 class="color-darkAqua">
                                            Buenos días México
                                        </h2>
                                        <a class="color-gray font-tiny" href="https://buenosdiasmexico.mx/" target="_blank" rel="nofollow">
                                            www.buenosdiasmexico.mx
                                        </a>
                                    </div>
                                    <div class="description column">
                                        <h5 class="color-gray">
                                            Diseño Web
                                        </h5>
                                        <h5 class="color-gray">
                                            Desarrollo Web
                                        </h5>
                                    </div>
                                </div>
                                <div class="white-space-16"></div>
                            </div>
                            <div class="project column wow fadeInLeft" data-wow-delay="0.2s" id="bece">
                                <div class="image responsive-img justify-center align-center">
                                    <img src="./app/img/bece.png" alt="BéCé Online" title="BéCé Online" />
                                </div>
                                <div class="white-space-16"></div>
                                <div class="information align-center">
                                    <div class="title column">
                                        <h2 class="color-darkAqua">
                                            BéCé Online
                                        </h2>
                                        <a class="color-gray font-tiny" href="http://test.dwitmexico.com/" target="_blank" rel="nofollow">
                                            www.beceonlie.com
                                        </a>
                                    </div>
                                    <div class="description column">
                                        <h5 class="color-gray">
                                            Responsive Web
                                        </h5>
                                        <h5 class="color-gray">
                                            Desarrollo Web
                                        </h5>
                                    </div>
                                </div>
                                <div class="white-space-16"></div>
                            </div>
                        </div>
                        <div class="white-space-32"></div>
                        <div class="project-container row-responsive">
                            <div class="project column wow fadeInLeft" data-wow-delay="0.1s" id="buenosdias">
                                <div class="image responsive-img justify-center align-center">
                                    <img src="./app/img/em.png" alt="EM-Sistemas" title="EM-Sistemas" />
                                </div>
                                <div class="white-space-16"></div>
                                <div class="information align-center">
                                    <div class="title column">
                                        <h2 class="color-darkAqua">
                                            EM-Sistemas
                                        </h2>
                                        <a class="color-gray font-tiny" href="https://www.em-sistemas.net/" target="_blank" rel="nofollow">
                                            www.em-sistemas.net
                                        </a>
                                    </div>
                                    <div class="description column">
                                        <h5 class="color-gray">
                                            Diseño Web
                                        </h5>
                                        <h5 class="color-gray">
                                            Desarrollo Web
                                        </h5>
                                    </div>
                                </div>
                                <div class="white-space-16"></div>
                            </div>
                            <div class="project column wow fadeInLeft" data-wow-delay="0.2s" id="bece">
                                <div class="image responsive-img justify-center align-center">
                                    <img src="./app/img/orto.JPG" alt="OrtoControl" title="OrtoControl" />
                                </div>
                                <div class="white-space-16"></div>
                                <div class="information align-center">
                                    <div class="title column">
                                        <h2 class="color-darkAqua">
                                            OrtodicalControl
                                        </h2>
                                        <a class="color-gray font-tiny" href="http://www.ortocontol.com" target="_blank" rel="nofollow">
                                            www.ortocontrol.com
                                        </a>
                                    </div>
                                    <div class="description column">
                                        <h5 class="color-gray">
                                            App Android
                                        </h5>
                                        <h5 class="color-gray">
                                            API
                                        </h5>
                                    </div>
                                </div>
                                <div class="white-space-16"></div>
                            </div>
                        </div>
                        <div class="white-space-32"></div>
                        <div class="btn-container justify-center">
                            <a href="/" class="btn btn-large btn-aqua btn-radius color-white weight-bold text-center" id="view-all">
                                VER TODOS LOS PROYECTOS
                            </a>
                        </div>
                        <div class="white-space-64"></div>
                    </div>
                </div>
                <!-- End Portafolio -->

                <!-- Contact -->
                <div class="contact justify-center wow fadeIn" id="contact">
                    <div class="container column">
                        <div class="white-space-64"></div>
                        <h2 class="color-darkAqua text-center">
                            <span class="color-aqua weight-bold">{</span> CONTÁCTAME
                        </h2>
                        <div class="white-space-8"></div>
                        <p class="text-center">
                            Cuéntame tu idea, pregúntame o platiquemos
                        </p>
                        <div class="white-space-32"></div>
                        <div class="justify-center align-center">
                            <form method="POST" action="./app/php/email.php" class="column">
                                <div class="row justify-between">
                                    <input type="text" name="name" maxlength="60" class="input input-radius" placeholder="Nombre" required />
                                    <input type="email" name="email" maxlength="100" class="input input-radius" placeholder="Correo electrónico" required />
                                </div>
                                <div class="white-space-16"></div>
                                <div class="row">
                                    <textarea name="message" rows="10" maxlength="600" class="input input-radius textarea" placeholder="Redacta tu mensaje, proyecto o seamos amigos :)" required></textarea>
                                </div>
                                <div class="white-space-16"></div>
                                <div class="justify-center">
                                    <a href="/privacidad">
                                        Al enviar aceptas la política de privacidad del sitio Web, puedes consultarlo con un click.
                                    </a>
                                </div>
                                <div class="white-space-16"></div>
                                <div class="btn-container justify-center">
                                    <button type="submit" class="btn btn-large btn-aqua btn-radius color-white weight-bold">
                                        ENVIAR
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="white-space-64"></div>
                    </div>
                </div>
                <!-- End Contact -->
            </div>

            <!-- Footer -->
            <footer class="column">
                <div class="footer-top justify-center">
                    <div class="container">
                        <div class="row-responsive">
                            <div class="column">
                                <div class="white-space-24"></div>
                                <div class="logo justify-center align-center wow fadeInDown">
                                    <a href="/" class="responsive-img">
                                        <img src="./app/img/logo-white.png" alt="trejocode logo blanco" title="trejocode logo blanco" />
                                    </a>
                                </div>
                                <div class="white-space-24"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>

    <script src="./app/js/front.js"></script>
    <script src="./app/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116751036-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-116751036-1');
    </script>

</body>

</html> 