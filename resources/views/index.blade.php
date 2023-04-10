<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Presentation</title>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="#">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="antialiased">
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Jesnar Erpe</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#hero">Home</a></li>
                    <li><a class="getstarted" href="#values">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Project Demonstration</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        <small>I turn coffee into code</small>

                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#values"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <main id="main">

        <section id="values" class="values">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>PROJECTS</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://fil-global-admin.test" target="_blank">
                            <div class="box">
                                <img src="crm.PNG" class="img-fluid" alt="">
                                <h3>Fil-Global CRM</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <a href="https://fil-global.test" target="_blank">
                            <div class="box">
                                <img src="fg.PNG" class="img-fluid" alt="">
                                <h3>Fil-Global Main Page</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://hris.test" target="_blank">
                            <div class="box">
                                <img src="hris.PNG" class="img-fluid" alt="">
                                <h3>HRIS</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://fil-global-admin.test/hr" target="_blank">
                            <div class="box">
                                <img src="hrsite.PNG" class="img-fluid" alt="">
                                <h3>HR Site</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://www.cozmicsolar.com/" target="_blank">
                            <div class="box">
                                <img src="cozmic.PNG" class="img-fluid" alt="">
                                <h3>Cozmic Solar</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://cs.cda.gov.ph/index.html" target="_blank">
                            <div class="box">
                                <img src="cais.PNG" class="img-fluid" alt="">
                                <h3>CAIS</h3>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Jesnar Erpe</span></strong>. All Rights Reserved
                </div>

            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>


        <script src="assets/js/main.js"></script>


</body>

</html>
