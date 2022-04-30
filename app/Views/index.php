<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Umami Ramen & Sushi</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

    <script src="https://unpkg.com/scrollreveal@4.0.0-beta.6"></script>

</head>

<body>
    
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="top-menu  scroll-reveal">
                    <div class="menu">
                        <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
                            <button class="menu-icon dark" type="button" data-toggle="main-nav"></button>
                            <div class="title-bar-title">Menu</div>
                        </div>

                        <nav id="main-nav" data-animate="menu-in menu-out">
                            <ul class="main-navigation">
                                <li><a class="m-active" href="#" data-text="Home">Inicio</a></li>
                                <li><a class="m-anim" href="#specials-grid" data-text="Specials">Promociones</a></li>
                                <li><a class="m-anim" href="#about-us" data-text="About">Nosotros</a></li>
                                <li><a class="m-anim" href="#main-menu" data-text="Menu Cart">Nuestro menú</a></li>
                                <li><a class="m-anim" href="#contact-us" data-text="Contact">Sucursal</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider">
            <div class="a-slide slide1">
                <div class="container">
                    <div class="bottom-section scroll-reveal" data-origin="right" data-distance="20%">
                        <h1 class="header-txt"><img src="<?= base_url('assets/img/Logo-black.png');?>" alt="No hay logotipo"></h1>
                        <div class="divider">
                            <?xml  ?>
                            <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
                        </div>
                        <!--.divider-->

                    </div>
                    <!--.bottom-section-->
                </div>
            </div>

        </div>

    </header>

    <section class="category-icons">
        <div class="container">
            <div class="yellow-content">
                <div class="icon">
                    <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-vege.svg" />
                    <h3 class="scroll-reveal" data-origin="top" data-distance="20%">Calidad de los alimentos</h3>
                    <p class="scroll-reveal" data-distance="0" data-duration="500">
                        Nosotros siempre buscamos la calidad al preparar nuestros platillos para garantizar
                        la satisfacción de nuestros clientes.
                    </p>
                </div>
                <div class="icon">
                    <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-coffee.svg" />
                    <h3 class="scroll-reveal" data-origin="top" data-distance="20%">Nuestro servicio</h3>
                    <p class="scroll-reveal" data-distance="0" data-duration="700">
                        Mantenemos un excelente servicio para la comodidad de nuestros clientes, logrando una
                        atención al cliente fiable y agradable.
                    </p>
                </div>
                <div class="icon">
                    <img class="scroll-reveal" data-origin="top" data-distance="20%" src="assets/icon-sweet.svg" />
                    <h3 class="scroll-reveal" data-origin="top" data-distance="20%">Excelente atmosfera</h3>
                    <p class="scroll-reveal" data-distance="0" data-duration="900">
                        Nuestro restaurante logra una atmósfera cómoda y relajante para los clientes, además que
                        la ubicación es bastante accesible para los clientes
                    </p>
                </div>
            </div>
            <!--.yellow-content-->
        </div>
        <!--.container-->
    </section>
    <!--.category-icons-->

    <!-- This section must be dinamic -->
    <section id="specials-grid" class="month-specials" data-scroll-reveal="enter from the bottom after 0.9s">
        <div class="container">
            <h1 class="header-txt">Promociones</h1>
            <div class="divider">
                <?xml ?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
            </div>
            <!--.divider-->

            <div class="specials-content">

            <?php foreach($promociones as $promocion): ?>
                <div class="special">
                    <div class="special-img img-01">
                        <img src="<?=base_url()?>/uploads/<?=$promocion['imgPromo'];?>" />
                    </div>
                    <div class="special-items spec-01">
                        <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?= $promocion['nombrePromo']; ?></h2>
                        <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                        <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?= $promocion['descripPromo']; ?></p>
                        <span class="scroll-reveal" data-origin="bottom" data-distance="60%">$<?= $promocion['precioPromo']; ?></span>
                    </div>
                </div>
                <!--.special-->
            <?php endforeach; ?>
            </div>
            <!--.specials-content-->
        </div>
        <!--.container-->
    </section>
    <!--.month-specials-->

    <section id="about-us" class="about">
        <div class="container">
            <div class="about-content">
                <h1 class="header-txt scroll-reveal">Acerca de nosotros</h1>
                <div class="divider scroll-reveal">
                    <?xml?>
                    <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
                </div>
                <!--.divider-->
                <p class="scroll-reveal" data-origin="top" data-distance="10%">
                    Somos un restaurante que tiene como objetivo lograr la satisfacción de los clientes
                    a través de nuestros platillos hechos con calidad, manteniendo una atención al 
                    cliente buena para así lograr una buena reputación en el ambiente laboral.
                </p>
                <!--<img class="signature scroll-reveal" data-origin="right" data-distance="20%" src="assets/signature.png" />-->
            </div>
        </div>
        <!--.container-->
    </section>
    <!--.about-->

    <!-- This section must be dinamic -->
    <section id="main-menu" class="menu-cart scroll-reveal">
        <div class="container">
            <h1 class="header-txt">Menú</h1>
            <div class="divider">
                <?xml ?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>             
                                <h5 class="header-txt">Presiona una categoría</h5>
            </div>
            <!--.divider-->
            <ul class="menu-navigation" data-tabs data-match-height="true" id="example-tabs">

            <?php foreach($categorias as $categoria): ?>

                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel<?= $categoria['idCategoria'] ?>" href="#panel<?= $categoria['idCategoria'] ?>" data-text="<?= $categoria['nombreCat'] ?>"><?= $categoria['nombreCat'] ?></a></li>

            <?php endforeach; ?>
            <!--
                <li class="tabs-title"><a class="m-anim" href="#panel1" aria-selected="true" data-text="Starters">Starters</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel2" href="#panel2" data-text="Main Dishes">Main Dishes</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel3" href="#panel3" data-text="Desserts">Desserts</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel4" href="#panel4" data-text="Drinks">Drinks</a></li>
            -->
            </ul>

            <div class="tabs-content" data-tabs-content="example-tabs">

                <?php foreach($categorias as $categoria): ?>

                    <div class="tabs-panel" id="panel<?= $categoria['idCategoria'] ?>">

                    <?php $platillo = $platillos->where('idCategoria',$categoria['idCategoria'])->findAll(); ?>

                    <div class="menu-content">
                    <?php foreach($platillo as $menu): ?>
                            <div class="menu-section">
                                <table>
                                    <tr>
                                        <td><span><?= $menu['nombrePlatillo']; ?></span></td>
                                        <td><span>$<?=$menu['precioPlatillo']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?= $menu['descripPlatillo']; ?></td>
                                    </tr>
            
                                </table>
                            </div>
                            <!--.menu-section-->
                            <?php endforeach; ?>
                        </div>
                        <!--.menu-content-->
                    </div>
                <?php endforeach; ?>    
                <!--panel-->

            </div>
        </div>
        <!--.container-->
    </section>
    <!--.menu-cart-->

    <a href="#0" class="cd-top">Top</a>

    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <h1 class="header-txt scroll-reveal">¿Donde encontrarnos?</h1>
                <div class="divider scroll-reveal">
                    <?xml ?>
                    <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
                </div>
                <!--.divider-->
                <div class="contact-info scroll-reveal">
                    <div class="info-address">
                        <h3>Ubicación</h3>
                        <p>Allende Norte #21<br>Santiago de Querétaro, Querétaro, c.p 76000</p>
                    </div>
                    <div class="reservations">
                        <h3>Contacto</h3>
                        <p>gilbeltranmad@hotmail.com<br>+52 442 343 4700</p>
                    </div>
                </div>
                <!--.contact-info-->

                <div class="contact-form scroll-reveal" data-origin="bottom" data-distance="20%">
                    <h3>Encuentranos</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9970.886592920264!2d-100.3969453448777!3d20.593668444238457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35bcadcb01419%3A0x2eb228f3b408677d!2sUmami%20Ramen%20Bar!5e0!3m2!1ses-419!2smx!4v1649190092594!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!--.Map-->
                
                <div class="social-icons scroll-reveal" data-duration="1500">
                    <div class="fb-i">

                        <?xml?>
                        <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 288.861 288.861" style="enable-background:new 0 0 288.861 288.861;" xml:space="preserve" width="30px" height="30px">
                                <path d="M167.172,288.861h-62.16V159.347H70.769v-59.48h34.242v-33.4C105.011,35.804,124.195,0,178.284,0   c19.068,0,33.066,1.787,33.651,1.864l5.739,0.746l-1.382,55.663l-6.324-0.058c-0.013,0-14.223-0.135-29.724-0.135   c-11.536,0-13.066,2.847-13.066,14.171v27.629h50.913l-2.821,59.48h-48.086v129.501H167.172z M117.858,276.007h36.453V146.5h48.677   l1.607-33.779h-50.284V72.238c0-13.368,3.078-27.025,25.919-27.025c9.178,0,17.899,0.045,23.509,0.09l0.778-31.292   c-5.675-0.508-15.116-1.157-26.247-1.157c-44.544,0-60.419,27.693-60.419,53.613v46.254H83.61V146.5h34.242v129.507H117.858z" fill="#3c3c3c"/>
                            </svg>
                    </div>
                    <div class="insta-i">
                        <?xml?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve" width="30px" height="30px">
                            <path d="M40.4,5.5H35.6c-1.434,0-2.6,1.166-2.6,2.6V12.9c0,1.434,1.166,2.6,2.6,2.6H40.4c1.434,0,2.6-1.166,2.6-2.6V8.1    C43,6.666,41.834,5.5,40.4,5.5z M41,12.9c0,0.331-0.269,0.6-0.6,0.6H35.6c-0.331,0-0.6-0.269-0.6-0.6V8.1    c0-0.331,0.269-0.6,0.6-0.6H40.4c0.331,0,0.6,0.269,0.6,0.6V12.9z" fill="#3c3c3c"/>
                            <path d="M37.8,0.5H10.2C4.576,0.5,0,5.089,0,10.731V17.5v2v17.77C0,42.911,4.576,47.5,10.2,47.5h27.6    c5.624,0,10.2-4.589,10.2-10.23V19.5v-2v-6.769C48,5.089,43.424,0.5,37.8,0.5z M46,37.27c0,4.538-3.679,8.23-8.2,8.23H10.2    c-4.522,0-8.2-3.692-8.2-8.23V19.5h12.221C11.62,22.043,10,25.584,10,29.5c0,7.72,6.28,14,14,14s14-6.28,14-14    c0-3.916-1.62-7.457-4.221-10H46V37.27z M36,29.5c0,6.617-5.383,12-12,12s-12-5.383-12-12s5.383-12,12-12S36,22.883,36,29.5z     M31.174,17.5c-2.101-1.261-4.55-2-7.174-2s-5.073,0.739-7.174,2H2v-6.769C2,6.192,5.679,2.5,10.2,2.5h27.6    c4.521,0,8.2,3.692,8.2,8.231V17.5H31.174z" fill="#3c3c3c"/>
                            <path d="M15,29.5c0,4.962,4.037,9,9,9s9-4.038,9-9s-4.037-9-9-9S15,24.538,15,29.5z M31,29.5c0,3.86-3.141,7-7,7s-7-3.14-7-7    s3.141-7,7-7S31,25.64,31,29.5z" fill="#3c3c3c"/>

                        </svg>
                    </div>
                </div>
                <!--.social-icons-->
            </div>
            <!--.footer-content-->
            <p class="copy-info">Copyright 2022 © by Umami Ramen & Sushi</p>
        </div>
        <!--.container-->
    </footer>

    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.0.2/what-input.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script type="text/javascript">
        $('.slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3500,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });

    </script>

    <script>
        $(window).on('load', function() {
            $("#preloader").fadeOut();
        });
    </script>

</body>

</html>
