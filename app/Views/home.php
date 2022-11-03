<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="MOFUSS">
    <meta name="keywords" content="UNAM, Web, MoFuSS, ENES, CIGA">
    <meta name="author" content="UNAM">
    <title>Mofuss</title>
    <link rel="apple-touch-icon" href="<?php echo base_url();?>/public/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/public/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/magnific-popup/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/pages/page-knowledge.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/pages/page-timeline.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/horizontal-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/horizontal-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/layouts/style-horizontal.css">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/hover-effects/media-hover-effects.css">

    <style>

        /*.titlemain {*/
        /*    margin: 0 auto;*/
        /*    max-width: 1280px;*/
        /*    !*width: 90%;*!*/
        /*    width: 1140px;*/
        /*}*/

        .anchor{
            display: block;
            height: 64px; /*same height as header*/
            margin-top: -64px; /*same height as header*/
            visibility: hidden;
        }
        .container {
            margin: 0 auto;
            max-width: 1280px;
            /*width: 90%;*/
            width: 1140px;
        }

        .card-panel1{
            width: 220px;
            height: 350px;
            margin:0 auto;
        }

        .card-panel2{
            width: 230px;
            height: 500px;
            margin:0 auto;
        }


        .card-panel3{
            /*width: 230px;*/
            height: 200px;
        }
        .card-image1{
            margin:40px;
        }
        .card-content1{
            margin-top: -60px;
        }
        .img-friends1{
            /*width: 200px;*/
            max-height: 100px;
            max-width: 150px;
        }
        .card1{
            width: 180px;
            height: 180px;
            margin:0 auto;
        }


        @media only screen and (min-width: 601px) {
            .container {
                width: 85%;
                width: 85%;
            }
        }
        @media only screen and (min-width: 993px) {
            .container {
                /*width: 70%;*/
                width: 1140px;
            }
        }
        /*---------------------------------
    Horizontal Menu
    -----------------------------------*/
        #main,
        .main-full
        {
            padding-left: 0 !important;
        }

        footer
        {
            padding-left: 11px !important;
        }

        header nav.navbar-color
        {
            box-shadow: none;
        }

        header .brand-logo
        {
            font-size: 2.1rem;
            line-height: 0;

            position: absolute;
            top: 0;

            display: inline-block;

            /*margin: 1px -250px;*/
            margin: 1px -0px;
            padding: 0px 0px;

            color: #fff;
        }

        header .brand-logo img
        {
            height: 64px;
        }

        header .brand-logo .logo-text
        {
            font-size: 24px;

            visibility: visible;

            padding-left: 8px;

            -webkit-transition: opacity .2s linear;
            transition: opacity .2s linear;

            opacity: 1;
        }

        @media only screen and (max-width: 992px)
        {
            header nav.navbar-color ul.left
            {
                position: relative;
                top: -6px;
                left: 55px;
            }
        }

        .horizontal-layout .sidenav-main .sidenav-trigger
        {
            position: absolute;
            top: 7px;
            left: 10px;

        }

        #header .header-search-wrapper
        {
            margin: 10px auto 0 260px;
        }

        #ul-horizontal-nav > li > a
        {
            padding: 0 8px;
            text-align: center;
        }

        .navbar
        {
            z-index: unset;
        }

        .navbar .navbar-main
        {
            position: relative;
            z-index: 997;
        }

        .navbar-fixed .navbar-main
        {
            position: fixed;

        }

        .navbar-fixed #horizontal-nav
        {
            z-index: 15;

            margin-top: 0px;


        }

        @media only screen and (min-width: 993px)
        {
            .navbar-fixed
            {
                margin-bottom: 65px;
            }
        }

        .doughnut-chart-status
        {
            top: -85px;
        }

        #horizontal-nav
        {
            box-shadow: 0 16px 16px 0 rgba(0, 0, 0, .04), 0 1px 5px 0 rgba(0, 0, 0, .02), 0 3px 1px -2px rgba(0, 0, 0, .02);
        }

        #horizontal-nav ul li
        {
            text-align: center;
        }

        #horizontal-nav ul li a i
        {
            font-size: 1.4rem;
            line-height: 45px;

            display: block;

            height: 0;

            color: #787878;
        }

        #horizontal-nav ul li a span
        {
            position: relative;
            top: 14px;

            color: rgba(0, 0, 0, .87);
        }

        #horizontal-nav ul li a span .dropdown-title
        {
            top: 0;
        }

        #horizontal-nav .dropdown-menu span i
        {
            font-size: 14px;

            position: absolute;
            top: -12px;
            right: -14px;
        }

        #ul-horizontal-nav
        {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            overflow-x: scroll;

            width: 96%;
            margin-left: 170px;

            white-space: nowrap;
        }

        #ul-horizontal-nav .active
        {
            background-color: rgba(0, 0, 0, .05);
        }

        #ul-horizontal-nav .dropdown-content
        {
            overflow-y: visible;
        }

        #ul-horizontal-nav .dropdown-content li a
        {
            padding: 10px 15px;
        }

        #ul-horizontal-nav .dropdown-content li span
        {
            top: 0;
        }

        #ul-horizontal-nav .dropdown-content li i
        {
            line-height: 1;

            position: relative;
            left: 1rem;
        }

        #ul-horizontal-nav .dropdown-content .dropdown-content
        {
            height: auto !important;
        }

        #ul-horizontal-nav .dropdown-content .dropdown-content.left-open
        {
            right: auto !important;
            left: 100% !important;
        }

        #ul-horizontal-nav .dropdown-content .dropdown-content.right-open
        {
            right: 100% !important;
            left: auto !important;
        }

        .dropdown-content li
        {
            min-height: 43px;
        }

        .dropdown-content li a
        {
            color: rgba(0, 0, 0, .87);
        }

        .dropdown-horizontal-list li a
        {
            font-size: 1rem;
            font-weight: 400;

            min-width: 150px;
            padding: 10px;

            text-align: left;
        }

        /*IE Specific CSS */
        @media screen and (min-width: 0\0) and (-webkit-min-device-pixel-ratio: .75), screen and (min-width: 0\0) and (min-resolution: 72dpi)
        {
            #horizontal-nav ul li
            {
                min-width: 110px;
            }
            #horizontal-nav .dropdown-menu span i
            {
                line-height: 0;

                position: absolute;
                top: 10px;
                right: -20px;
            }
        }

    </style>

    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed ">

        <!--        <a class="brand-logo right darken-1" href="#"><img src="--><?php //echo base_url();?><!--/public/app-assets/images/mofuss/unamR.png" alt="mofuss logo"></a>-->
        <!-- BEGIN: Horizontal nav start-->
        <nav class=" white hide-on-med-and-down" id="horizontal-nav">
            <!--        <nav class="navbar-main white hide-on-med-and-down" id="horizontal-nav">-->
            <div class="nav-wrapper nav-center  container">

                <!--                <a class="brand-logo right darken-1" href="#"><img src="--><?php //echo base_url();?><!--/public/app-assets/images/mofuss/unamR.png" alt="mofuss logo"></a>-->
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="https://www.unam.mx/" target="_blank"><img src="<?php echo base_url();?>/public/app-assets/images/mofuss/unamR.png" alt="materialize logo"></a></h1>
                    </li>
                </ul>
                <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
                    <li><a  href="#people" ><i class="material-icons">person</i><span><span class="dropdown-title" data-i18n="Dashboard">People</span></span></a></li>
                    <li><a  href="#former" ><i class="material-icons">group</i><span><span class="dropdown-title" data-i18n="Dashboard">Former Members</span></span></a></li>
                    <li><a  href="#projects" ><i class="material-icons">extension</i><span><span class="dropdown-title" data-i18n="Dashboard">Projects</span></span></a></li>
                    <li><a  href="#publications" ><i class="material-icons">library_books</i><span><span class="dropdown-title" data-i18n="Dashboard">Publications</span></span></a></li>
                    <li><a  href="#opportunities" ><i class="material-icons">work</i><span><span class="dropdown-title" data-i18n="Dashboard">Opportunities</span></span></a></li>
                    <li><a  href="#teaching" ><i class="material-icons">school</i><span><span class="dropdown-title" data-i18n="Dashboard">Teaching</span></span></a></li>
                    <li><a  href="#models" ><i class="material-icons">assessment</i><span><span class="dropdown-title" data-i18n="Dashboard">Models</span></span></a></li>
                    <li><a  href="#outreach" ><i class="material-icons">video_library</i><span><span class="dropdown-title" data-i18n="Dashboard">Outreach</span></span></a></li>
                    <li><a  href="#friends" ><i class="material-icons">domain</i><span><span class="dropdown-title" data-i18n="Dashboard">Friends</span></span></a></li>
                    <li><a  href="#gallery" ><i class="material-icons">perm_media</i><span><span class="dropdown-title" data-i18n="Dashboard">Gallery</span></span></a></li>

                </ul>
            </div>
            <!-- END: Horizontal nav start-->
        </nav>
    </div>
</header>
<!-- END: Header-->


<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
    <div class="brand-sidebar sidenav-light"></div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="navigation-header"><a class="navigation-header-text">Mofuss </a><i class="navigation-header-icon material-icons">more_horiz</i></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#people"><i class="material-icons">person</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#former"><i class="material-icons">group</i><span class="menu-title" data-i18n="Dashboard">Former Members</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#projects"><i class="material-icons">extension</i><span class="menu-title" data-i18n="Dashboard">Projects</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#publications"><i class="material-icons">library_books</i><span class="menu-title" data-i18n="Dashboard">Publicatios</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#opportunities"><i class="material-icons">work</i><span class="menu-title" data-i18n="Dashboard">Opportunities</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#teaching"><i class="material-icons">school</i><span class="menu-title" data-i18n="Dashboard">Teaching</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#models"><i class="material-icons">assessment</i><span class="menu-title" data-i18n="Dashboard">Models</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#outreach"><i class="material-icons">video_library</i><span class="menu-title" data-i18n="Dashboard">Outreach</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#friends"><i class="material-icons">domain</i><span class="menu-title" data-i18n="Dashboard">Friends</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#gallery"><i class="material-icons">perm_media</i><span class="menu-title" data-i18n="Dashboard">Gallery</span></a></li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only green" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">




    <div class="row" style="margin-top: -64px">

        <div class="col s12" >
            <div class="container">

                <div class="section" id="inicio">
                    <!--                <div class="section mt-2" id="inicio">-->
                    <div class="slider fullscreen" >

                        <ul class="slides">
                            <li>
                                <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/slider/2.jpg" class="responsive-img" alt="sample img">
                                <!-- random image -->
                                <div class="caption center-align" style="top: 40%">
                                    <h3 class="white-text ">Modeling Woodfuel Environmental Impacts within Dynamic Landscapes</h3>
                                    <!--                                    <h5 class="light grey-text text-lighten-3">texto.</h5>-->
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/slider/4.jpg" class="responsive-img" alt="sample img">
                                <!-- random image -->
                                <div class="caption left-align " style="top: 35%">
                                    <!--                                        <br><br><br>-->
                                    <!--                                    <h3 class="white-text">Left Aligned</h3>-->
                                    <h3 class="white-text">Modeling Woodfuel Environmental Impacts within Dynamic Landscapes</h3>
                                    <h5 class="light grey-text text-lighten-3">Our main interest is on spatial and temporal modeling of woodenergy environmental impacts and production potential, within the broader area of energy security for the poor.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/slider/3.jpg" class="responsive-img" alt="sample img">
                                <!-- random image -->
                                <div class="caption right-align" style="top: 35%">
                                    <!--                                        <br><br><br>-->
                                    <!--                                    <h3 class="white-text">Right Aligned</h3>-->
                                    <h3 class="white-text">Modeling Woodfuel Environmental Impacts within Dynamic Landscapes</h3>
                                    <h5 class="light grey-text text-lighten-3">Our approach is by means of models and computer simulations built for landscape level analysis, integrating various drivers of land change and woodfuel demand sources.</h5>
                                </div>
                            </li>
                        </ul>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                </div>
            </div>
        </div>
    </div>



    <div class="row" style="margin-top: 100vh;">
        <!--    <div class="row" style="margin:0; padding: 0">-->
        <div class="col s12">
            <div class="container">

                <!--                <div class="section mt-2" id="blog-list">-->

                <span class="anchor" id="people"></span>
                <!--                <div class="section" id="people">-->
                <div class="section" >

                    <h5 class="center-align">PEOPLE</h5>
                    <br>

                    <div class="row">

                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align ">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/adrian_ghilardi.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Adrian Ghilardi</a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">PI</h6>
                                <span>Spatial analysis and modeling.</span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">aghilardi@ciga.unam.mx</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/RSuarez.jpeg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Ranyart Rodrigo Suárezi</a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">Project technician</h6>
                                <span>Programming and Web developer. </span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">ranyart.rodrigo@gmail.com</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/RTauro.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Raúl Tauro</a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">Posdoc</h6>
                                <span>Bioenergy supply chains.</span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">rtauro@cieco.unam.mx</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/lourdes_calderon.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Lourdes Calderón </a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">Lab Admin</h6>
                                <!--                                <span>Spatial analysis and modeling.</span>-->
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">lcalderon@ciga.unam.mx</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/JLCaballero.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">José Luis Caballero </a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">PhD student</h6>
                                <span>Spatial resources modeling. </span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">jlcaballerobios@gmail.com</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/TGarcia.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Tatiana García </a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">PhD student</h6>
                                <span>Biomass off-grid solutions. </span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">inglaterra16@hotmail.com</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/CNavarro.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Celia Teresa Navarro </a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">PhD student</h6>
                                <span>Fire modeling. </span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">jauregui.teresa@gmail.com</span>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card-panel card-panel1 border-radius-6 mt-10 card-animation-1 center-align">
                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas/LSalas.jpg" alt="">
                                <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Lidia Salas </a></h6>
                                <h6 class=" deep-purple-text text-darken-3 mt-5">PhD student</h6>
                                <span>PhD student</span>
                                <hr>
                                <span class="material-icons">email</span>
                                <span class="ml-3 vertical-align-top ultra-small">lisa_canela@hotmail.com</span>
                            </div>
                        </div>



                    </div>

                    <br>
                    <div class="divider"></div>

                </div>

                <span class="anchor" id="former"></span>
                <div class="section ">
                    <h5 class="center-align">FORMER MEMBERS</h5>
                    <br>
                    <div class="row">


                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2  hoverable" >
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/RRangel.jpg" alt="sample"  />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Roberto Rangel </span>
                                    <p>
                                        <b>PROJECT TECHNICIAN</b>
                                    </p>
                                    <p>
                                        <small>Programming and Web developer.</small>
                                    </p>
                                    <hr>
                                    <p class="ultra-small" >mcrangelheras@gmail.com </p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2  hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/MSerrano.jpeg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Montserrat Serrano </span>
                                    <p>
                                        <b>POSDOC</b>
                                    </p>
                                    <p>
                                        <small>Proyecto Posdoctoral: Análisis espacial de la demanda de leña en México a través de modelos estadísticos y sus implicaciones socio-ambientales y económicas (Abr 2017- Mar 2019).</small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >mttserrano@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/MSalinas.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Miguel Salinas </span>
                                    <p>
                                        <b>POSDOC</b>
                                    </p>
                                    <p>
                                        <small>Biomass resources modeling. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >miguels@cieco.unam.mx</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/RAdame.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Rita Adame </span>
                                    <p>
                                        <b>PhD student</b>
                                    </p>
                                    <p>
                                        <small>Patrones espaciales de degradación forestal por uso de leña en un ejido de la Meseta Purépecha, Michoacán, México. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >rladame@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/ACastro.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Ana Castro </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Tesis (2019): Impactos ambientales de la producción de bioenergía en México a partir de residuos agrícolas (2016-2018). </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >acstrrys@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/VLopez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Vania López </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Master student</small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >vanialopezgarcia@gmail.com
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/rene_orozco.jpeg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">René Orozco </span>
                                    <p>
                                        <b>Undergraduate student</b>
                                    </p>
                                    <p>
                                        <small>Tesis (2019): Optimización de rutas de exploración y posicionamiento geográfico de plantas de producción de energía eléctrica utilizando una propuesta de refinamiento adaptativo, heurísticas de aproximación y los algoritmos de exploración binaria en anchura y Bellman-Ford (2017-2018).</small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >jr.orozco@gmail.com</p>
                                </div>

                            </div>
                        </div>                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/AVargas.jpeg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Andrés Vargas</span>
                                    <p>
                                        <b>Undergraduate student</b>
                                    </p>
                                    <p>
                                        <small>Tesis (2019): Optimización de rutas de exploración y posicionamiento geográfico de plantas de producción de energía eléctrica utilizando una propuesta de refinamiento adaptativo, heurísticas de aproximación y los algoritmos A* y Dijkstra (2017-2018).</small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >andresvs13@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/SMartinez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Silvia Martínez </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2018): Estrategias para la conservación de la selva baja en la cuenca media del río Ayuquila, Jalisco, a partir de modelos prospectivos del paisaje (2010-2015). </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >silviamrz@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/AQuevedo.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Alexander Quevedo  </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2018): Validación de un modelo global de degradación forestal por uso de leña mediante índices de vegetación de imágenes MODIS multitemporales.
                                            Currently at: GIS technician at Environmental Geography Research Center, UNAM, México. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >alequech@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/DRamirez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Diana Ramírez </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2015): Estimación de biomasa leñosa aérea de encinos empleando alometría y fotografías aéreas de pequeño formato.
                                            Currently at: PhD. Student at UNAM, México and GIS and programing technician at CONABIO, Mexico. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >diana.masher@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/MLopez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Mariaclara López </span>
                                    <p>
                                        <b>Undergraduate student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2015): Análisis espacial de la degradación forestal en comunidades de encinos (Quercus spp.) utilizados para producción de carbón vegetal. Caso de estudio en la Cuenca del Lago Cuitzeo (Michoacán, México).</small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >mariaclaralopezr@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/JLCaballero.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">José Luis Caballero </span>
                                    <p>
                                        <b>Maestría</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2015): Modelado de los patrones espaciales de extracción de madera para producir carbón vegetal en la cuenca del lago de Cuitzeo.
                                            Actualmente: Estudiante de doctorado de la UNAM. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >jlcaballerobios@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/RGonzalez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Rafael González </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2013): Modelado espacial de la dinámica de los bosques de Quercus manejados para carbón vegetal en la cuenca del lago de Cuitzeo, Michoacán.
                                            Currently at: PhD student at Universitat Autònoma de Barcelona, Spain. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >jrglezlpz@gmail.com</p>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m6 l4 ">
                            <div class="card card-panel2 hoverable">
                                <div class="card-image card-image1" >
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/personas2/AFernandez.jpg" alt="sample" />
                                </div>
                                <div class="card-content center-align card-content1">
                                    <span class="card-title grey-text text-darken-4">Ana Fernández </span>
                                    <p>
                                        <b>Master student</b>
                                    </p>
                                    <p>
                                        <small>Thesis (2012): Impactos de la producción clandestina de carbón vegetal sobre los patrones espaciales de degradación forestal en la Cuenca de Cuitzeo, Michoacán.
                                            Currently at: PhD. Student at UNAM, México and GIS technician at Centro de Cambio Global y la Sustentabilidad en el Sureste, Mexico. </small>
                                    </p>
                                    <hr>
                                    <p style="font-size: smaller" >anaferm03@gmail.com</p>
                                </div>

                            </div>
                        </div>






                    </div>


                </div>

                <div class="divider"></div>

                <span class="anchor" id="projects"></span>
                <div class="section">

                    <h5 class="center-align">PROJECTS</h5>
                    <div class="row">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2018-2020"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Woodfuel Landscape Interactions in Haiti</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2018-2020 <br>
                                            Location: Haiti <br>
                                            Client: Clean Cooking Alliance <br>
                                            Main project features: Geospatial assessment of woodfuel sustainability in Haiti<br>
                                            Co-PIs: Adrian Ghilardi & Rob Bailis <br>
                                            Activities performed: Spatial Analysis and Modeling <br>
                                        </p>

                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2018-2019"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Explorador de Cambio Climático y Biodiversidad</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2018-2019 <br>
                                            Location: México <br>
                                            Client: Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO) <br>
                                            Main project features: Development of a map server for the deployment and analysis of spatial informatoin on biodiversity and climate change <br>
                                            PI: Adrian Ghilardi <br>
                                            Co-PIs: Roberto Rangel &amp; Ranyart Suárez <br>
                                            Activities performed: Coordination <br>
                                        </p>
                                        <div class="display-flex justify-content-between flex-wrap mt-2">
                                            <div class="display-flex align-items-center mt-1">
                                            </div>
                                            <div class="display-flex mt-3 right-align">
                                                <span class="material-icons">link</span> <a href="http://www.wegp.unam.mx/Conabio" class="green-text"><span class="ml-3 vertical-align-top">webpage</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2017-2018"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Geospatial Bioenergy Potentials in the Central American Integration System (SICA)</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2017-2018 <br>
                                            Location: Central America + Dominican Republic + Haiti <br>
                                            Client: United Nations <br>
                                            Main project features: Geospatial web-based platform for real-time analyses of woodfuel sustainability and bioenergy potentials <br>
                                            PI: Adrian Ghilardi <br>
                                            Activities performed: Coordination, Spatial Analysis and Modeling
                                        </p>
                                        <div class="display-flex justify-content-between flex-wrap mt-2">
                                            <div class="display-flex align-items-center mt-1">
                                            </div>
                                            <div class="display-flex mt-3 right-align">
                                                <span class="material-icons">link</span> <a href="http://www.wegp.unam.mx/sicabioenergy" class="green-text"><span class="ml-3 vertical-align-top">webpage</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2016-2020"> <i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Research branch within the Cluster on Solid Biomass for Heat and Power at the Centro Mexicano de Innovación en Bioenergía (CEMIE-Bio)</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2016-2020 <br>
                                            Location: Mexico <br>
                                            Client: Secretaría de Energía (SENER) y Consejo Nacional de Ciencia y Tecnología (CONACYT), México-SENER CONACYT 2014 246911<br>
                                            Main project features: Geospatial assessment of bioenergy potentials in Mexico and developing a web-based interface for querying results and replicating some of the GIS-based analyses <br>
                                            PI (research branch): Adrian Ghilardi <br>
                                            PI (Cluster): Omar Masera <br>
                                            Activities Performed: Coordination, Spatial Analysis and Modeling <br>
                                        </p>
                                        <div class="display-flex justify-content-between flex-wrap mt-2">
                                            <div class="display-flex align-items-center mt-1">
                                            </div>
                                            <div class="display-flex mt-3 right-align">
                                                <span class="material-icons">link</span> <a href="http://www.wegp.unam.mx/cemie" class="green-text"><span class="ml-3 vertical-align-top">webpage</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2013-2015"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel mb-4">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Geospatial Analysis and Modeling of Non-Renewable Biomass: WISDOM and Beyond</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2013-2015 <br>
                                            Location: Global, with focus in Honduras, Kenya and India <br>
                                            Client: Clean Cooking Alliance <br>
                                            Main project features: Geospatial assessment of woodfuel sustainability in the global south, and three focal countries <br>
                                            <!--PI: <br>-->
                                            Co-PIs: Rob Bailis &amp; Adrian Ghilardi <br>
                                            Activities performed: Spatial Analysis and Modeling <br>
                                        </p>
                                        <div class="display-flex justify-content-between flex-wrap mt-2">
                                            <div class="display-flex align-items-center mt-1">
                                            </div>
                                            <div class="display-flex mt-3 right-align">
                                                <span class="material-icons">link</span> <a href="#" class="green-text"><span class="ml-3 vertical-align-top">webpage</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2012"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i> Estado de degradación y potencial de restauración en ecosistemas forestales bajo manejo de la Cuenca baja del río Ayuquila</span>
                                        <p class="mt-4 mb-0">

                                            Year: 2012 <br>
                                            Location: Ayuquila river basin, México <br>
                                            <!--Duration: September 2009 to December 2014 <br>-->
                                            Client: Agence Francaise de Développement (AFD), Comisión Nacional Forestal (CONAFOR) <br>
                                            <!--Institutions directly involved: UNAM <br>-->
                                            PI: Adrian Ghilardi <br>
                                            Activities Performed: Coordination, Spatial Analysis and Modeling <br>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2011-2013"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i>Addressing Forest Degradation in Mexico Through REDD+</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2011-2013 <br>
                                            Location: Mexico <br>
                                            Client: ClimateWorks Foundation <br>
                                            Main project features: Understand the potential role fo woodfuels within the REDD+ mechanism <br>
                                            PI: Margaret Skutsch<br>
                                            Co-PIs: Adrian Ghilardi <br>
                                            Activities performed: Case studies and public policies were linked to a geodatabase

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2011-2013"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i>Fuelwood Sustainability in Western Honduras</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2011-2013 <br>
                                            Location: Western Honduras<br>
                                            <!--Duration: September 2011 to August 2013 <br>-->
                                            Client: Proyecto Mirador and Yale Institute for Biospheric Studies <br>
                                            <!--Institutions directly involved: CIGA-UNAM and Yale University <br>-->
                                            Co-PIs: Rob Bailis &amp; Adrian Ghilardi <br>
                                            <!--Geographic Context: Western Honduras-->
                                            Activities Performed: Spatial Analysis and Modeling

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2011 - 2012"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i>Análisis de cambio de cobertura y uso de suelo en la Cuenca baja del río Ayuquila</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2011 - 2012 <br>
                                            Location: Ayuquila river basin, México <br>
                                            <!--Duration: September 2009 to December 2014 <br>-->
                                            Client: Agence Francaise de Développement (AFD), Comisión Nacional Forestal (CONAFOR) <br>
                                            <!--Institutions directly involved: UNAM <br>-->
                                            PI: Adrian Ghilardi <br>
                                            Activities Performed: Coordination, Spatial Analysis and Modeling

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge green">
                                    <a class="tooltipped" data-position="top" data-tooltip="2009-2014"><i class="material-icons white-text">done</i></a>
                                </div>
                                <div class="timeline-panel">
                                    <div class="card-panel border-radius-6 pt-4 pb-4 hoverable">
                                        <span class="green-text"><i class="material-icons vertical-align-bottom"> star</i>Análisis geoespacial de la degradación forestal por la extracción de madera para leña y carbón vegetal en el centro de México</span>
                                        <p class="mt-4 mb-0">
                                            Year: 2009-2014 <br>
                                            Location: Cuitzeo basin, central México <br>
                                            <!--Duration: September 2009 to December 2014 <br>-->
                                            Client: ClimateWorks, PAPIIT-UNAM IA101513 and CONAFOR <br>
                                            <!--Institutions directly involved: UNAM <br>-->
                                            PI: Adrian Ghilardi <br>
                                            Activities Performed: Coordination, Spatial Analysis and Modeling

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix" style="float: none;"></li>

                        </ul>
                    </div>


                </div>


                <div class="divider"></div>



                <span class="anchor" id="publications"></span>
                <div class="section">
                    <h5 class="center-align">PUBLICATIONS</h5>
                    <div class="card  hoverable">
                        <div class="card-content">
                            <p>2019. Variables Selection for Aboveground Biomass Estimations Using Satellite Data: A Comparison between Relative Importance Approach and Stepwise Akaike’s Information Criterion<br><small class="text-lighten-1">Adame-Campos, Rita L., Ghilardi, A., Gao, Y., Paneque-Galvez, J., Mas, J.F. ISPRS International Journal of Geo-Information 8 6</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2019. Fuelwood use patterns in Rural Mexico: a critique to the conventional energy transition model.<br><small class="small-2 text-light ls-1">Serrano-Medrano, M., Arias-Chalico, T., Ghilardi, A., Masera, O. Historia Agraria 77  </small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2018. Promoting LPG, clean woodburning cookstoves or both? Climate change mitigation implications of integrated household energy transition scenarios in rural Mexico.<br><small class="small-2 text-light ls-1">Serrano-Medrano, García-Bustamante, C., Berrueta, V.,Martínez-Bravo, R., Ruíz-García, V., Ghilardi, A., Masera, O. Environmental Research Letters 13 11</small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2018. Unprecedented plant species loss after a decade in fragmented subtropical chaco serrano forests<br><small class="small-2 text-light ls-1">Aguilar, R.,  Calviño, A.,  Ashworth, L.,  Aguirre-Acosta, N.,  Carbone, L.M.,  Albrieu-Llinás, G.,  Nolasco, M.,  Ghilardi, A.,  Cagnolo, L. PLoS ONE 13 11</small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2018. Assessing forest cover change in Mexico from annual MODIS VCF data (2000–2010)<br><small class="small-2 text-light ls-1">Gao, Y., Ghilardi, A., Mas, J., Quevedo, A., Paneque-Gálvez, J., Skutsch, M. International Journal of Remote Sensing  </small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2018. Using aerial photography to estimate wood suitable for charcoal in managed oak forests<br><small class="small-2 text-light ls-1">Ramírez-Mejía, D., Gómez-Tagle, A., Ghilardi, A. Environmental Research Letters 13 2</small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2018. Potential environmental benefits from woodfuel transitions in Haiti: Geospatial scenarios to 2027<br><small class="small-2 text-light ls-1">Ghilardi, A., Tarter, A., Bailis, R. Environmental Research Letters 13 3</small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2017. Getting the numbers right: Revisiting woodfuel sustainability in the developing world<br><small class="small-2 text-light ls-1">Bailis, R., Wang, Y., Drigo, R., Ghilardi, A., Masera, O. Environmental Research Letters 12 11</small>
                            </p>

                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2017. Adapting REDD+ policy to sink conditions<br><small class="small-2 text-light ls-1">Skutsch, M., Paneque-Gálvez, J., Ghilardi, A., Balderas Torres, A., Morfin-Rios, J., Michel-Fuentes, J.M., Carrillo, O., Ross, D. Forest Policy and Economics 80</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2017. Estrategias para la conservación de la selva baja en la Cuenca Media del Río Ayuquila, Jalisco, a partir de modelos prospectivos del paisaje (2010-2025)<br><small class="small-2 text-light ls-1">Martínez-Rodríguez, S.G., Ghilardi, A., Carlón-Allende, T., Jardel-Peláez, E. Análisis y Modelación de patrones y procesos de cambio.  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2016. Validation of MODIS Vegetation Continuous Fields for monitoring deforestation and forest degradation: two cases in Mexico<br><small class="small-2 text-light ls-1">Gao, Y., Ghilardi, A., Paneque-Galvez, J., Skutsch, M., Mas, J.F. Geocarto International 31 9</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2016. Charcoal contribution to wealth accumulation at different scales of production among the rural population of Mutomo District in Kenya<br><small class="small-2 text-light ls-1">Ndegwa, G., Anhuf, D., Nehren, U., Ghilardi, A., Iiyama, M. Energy for Sustainable Development 33</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2016. Spatiotemporal modeling of fuelwood environmental impacts: Towards improved accounting for non-renewable biomass<br><small class="small-2 text-light ls-1">Ghilardi, A., Bailis, R., Mas, J.-F., Skutsch, M., Elvir, J.A., Quevedo, A., Masera, O., Dwivedi, P., Drigo, R., Vega, E. Environmental Modelling and Software 82 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2016. Patterns of distribution of nine Quercus species along an environmental gradient in a fragmented landscape in central Mexico<br><small class="small-2 text-light ls-1">Aguilar-Romero, R., García-Oliva, F., Pineda-García, F., Torres, I., Peña-Vega, E., Ghilardi, A., Oyama, K. Botanical Sciences 94 3</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2016. Evaluation Of annual modis PTC data for deforestation and forest degradation analysis<br><small class="small-2 text-light ls-1">Gao, Y., Ghilardi, A., Mas, J.F., Paneque-Galvez, J., Skutsch, M. International Archives of the Photogrammetry, Remote Sensing and Spatial Information Sciences - ISPRS Archives 41 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2015. The carbon footprint of traditional woodfuels<br><small class="small-2 text-light ls-1">Bailis, R., Drigo, R., Ghilardi, A., Masera, O. Nature Climate Change 5 3</small>
                            </p>
                        </div>
                    </div>
                    <div class="card  hoverable">
                        <div class="card-content">
                            <p>
                                2015. Environmental Burden of Traditional Bioenergy Use<br><small class="small-2 text-light ls-1">Masera, O.R., Bailis, R., Drigo, R., Ghilardi, A., Ruiz-Mercado, I. Annual Review of Environment and Resources 40 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2015. Sustainable bioenergy options for Mexico: GHG mitigation and costs<br><small class="small-2 text-light ls-1">García, C.A., Riegelhaupt, E., Ghilardi, A., Skutsch, M., Islas, J., Manzini, F., Masera, O. Renewable and Sustainable Energy Reviews 43 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2015. Unas herramientas de uso libre para evaluar la fiabilidad temática de datos espaciales.<br><small class="small-2 text-light ls-1">Mas, J-F.*, Pérez-Veja, A., Ghilardi, A., Martínez, S., Loya-Carrillo, J.O., Vega, E. Anais XVII Simpósio Brasileiro de Sensoramiento Remoto.  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card  hoverable">
                        <div class="card-content">
                            <p>
                                2014. Diffusion of non-traditional cookstoves across western Honduras: A social network analysis<br><small class="small-2 text-light ls-1">Ramirez, S., Dwivedi, P., Ghilardi, A., Bailis, R. Energy Policy 66 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2014. Potential greenhouse gas benefits of transatlantic wood pellet trade<br><small class="small-2 text-light ls-1">Dwivedi, P., Khanna, M., Bailis, R., Ghilardi, A. Environmental Research Letters 9 2</small>
                            </p>
                        </div>
                    </div>
                    <div class="card  hoverable">
                        <div class="card-content">
                            <p>
                                2014. Spatial and temporal projection of fuelwood and charcoal consumption in Mexico<br><small class="small-2 text-light ls-1">Serrano-Medrano, M., Arias-Chalico, T., Ghilardi, A., Masera, O. Energy for Sustainable Development 19 1</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2014. Validation of MODIS vegetation continuous fields in two areas in Mexico<br><small class="small-2 text-light ls-1">Gao, Y., Mas, J.F., Paneque-Galvez, J., Skutsch, M., Ghilardi, A., Navarrete Pacheco, J.A., Paniagua, I. 3rd International Workshop on Earth Observation and Remote Sensing Applications, EORSA 2014 - Proceedings  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2014. Operationalizing the definition of forest degradation for REDD+, with application to Mexico<br><small class="small-2 text-light ls-1">
                                    Morales-Barquero, L., Skutsch, M., Jardel-Peláez, E.J., Ghilardi, A., Kleinn, C., Healey, J.R. Forests 5 7</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2014. A Suite of Tools for Assessing Thematic Map Accuracy<br><small class="small-2 text-light ls-1">Mas, J-F.*, Pérez-Veja, A., Ghilardi, A., Martínez, S., Loya-Carrillo, J.O., Vega, E. Geographic Journal  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2014. Análisis de la producción de carbón vegetal en la Cuenca del Lago de Cuitzeo, Michoacán, México: Implicaciones para una producción sustentable.<br><small class="small-2 text-light ls-1">Camou-Guerrero, A.*, Ghilardi, A., Mwampamba, T., Serrano, M., Ortiz-Avila, T., Vega, E., Oyama, K., Masera, O. Investigación Ambiental  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2013. Dispelling common misconceptions to improve attitudes and policy outlook on charcoal in developing countries<br><small class="small-2 text-light ls-1">Mwampamba, T.H., Ghilardi, A., Sander, K., Chaix, K.J. Energy for Sustainable Development 17 2</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2013. What role will charcoal play in the coming decades? Insights from up-to-date findings and reviews<br><small class="small-2 text-light ls-1">Ghilardi, A., Mwampamba, T., Dutt, G. Energy for Sustainable Development 17 2</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2013. Estimating the spatial distribution of woody biomass suitable for charcoal making from remote sensing and geostatistics in central Mexico<br><small class="small-2 text-light ls-1">Castillo-Santiago, M.Á., Ghilardi, A., Oyama, K., Hernández-Stefanoni, J.L., Torres, I., Flamenco-Sandoval, A., Fernández, A., Mas, J.-F. Energy for Sustainable Development 17 2</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2013. Analysis of deforestation hot-spots in mexico over 2000-2010 using time-series modes vegetation continuous fields (VCF) data.<br><small class="small-2 text-light ls-1">Gao, Y., Mas, J-F., Paneque, J., Skutsch, M., Navarrete, A., Ghilardi, A. Memorias de la XX Reunión Nacional de la Sociedad de Especialistas Latinoamericanos en Percepción Remota y Sistemas de Información Espaciales (SELPER).  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2013. Modelado espacial de la dinámica de bosques de encino bajo producción de carbón vegetal en la cuenca del lago de Cuitzeo, Michoacán.<br><small class="small-2 text-light ls-1">González-López, R., Ghilardi, A. Memorias de la XX Reunión Nacional de la Sociedad de Especialistas Latinoamericanos en Percepción Remota y Sistemas de Información Espaciales (SELPER).  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2012. Perceptions of stakeholders about nontraditional cookstoves in Honduras<br><small class="small-2 text-light ls-1">Ramirez, S., Dwivedi, P., Bailis, R., Ghilardi, A. Environmental Research Letters 7 4</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2012. Sprouting productivity and allometric relationships of two oak species managed for traditional charcoal making in central Mexico<br><small class="small-2 text-light ls-1">Aguilar, R., Ghilardi, A., Vega, E., Skutsch, M., Oyama, K. Biomass and Bioenergy 36 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2011. Dealing with locally-driven degradation: A quick start option under REDD+<br><small class="small-2 text-light ls-1">Skutsch, M.M., Torres, A.B., Mwampamba, T.H., Ghilardi, A., Herold, M. Carbon Balance and Management 6 </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2011. Spatial Modeling of Fuelwood Extraction Dynamics: A Case Study for Honduras.<br><small class="small-2 text-light ls-1">Ghilardi, A., Mas, J-F. Memorias de la XIX Reunión Nacional de la Sociedad de Especialistas Latinoamericanos en Percepción Remota y Sistemas de Información Espaciales (SELPER).  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2009. A GIS-based methodology for highlighting fuelwood supply/demand imbalances at the local level: A case study for Central Mexico<br><small class="small-2 text-light ls-1">Ghilardi, A., Guerrero, G., Masera, O. Biomass and Bioenergy 33 06-jul</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2009. Quantification of carbon savings from improved biomass cookstove projects<br><small class="small-2 text-light ls-1">Johnson, M., Edwards, R., Ghilardi, A., Berrueta, V., Gillen, D., Frenk, C.A., Masera, O. Environmental Science and Technology 43 7</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2009. Estado y tendencia de los servicios ecosistémicos<br><small class="small-2 text-light ls-1">Oropeza-Aburto, O., Aguilar-Contreras, A., Peña-Aguilera, M., Aluja, M., Cetto-Andrade, A., Quiroz-Arroyo, I., Ashworth, L., Astier, M., Ávila, P., Bitrán-Bitrán, D., Camargo, T., Campo, J., Cárdenas-González, B., Casas, A., Díaz-Fleisher, F., Etchevers, J.D., Ghilardi, A., González-Padilla, E., Guevara, A., Lazos, E., López-Sagástegui, C., López-Sagástegui, R., Martínez, J., Masera, O., Mazari, M., Nadal, A., Pérez-Salicrup, D., Pérez-Gil-Salcido, R., Quesada, M., Ramos-Elorduy, J., Robles-González, A., Rodríguez, H., Rull, J., Susan, G., Vergara, C.H., Xolalpa-Molina, S., Zambrano, L., Zarco, A. Capital Natural de México, vol. II: Estado de conservación y tendencias de cambio.  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2007. Spatial analysis of residential fuelwood supply and demand patterns in Mexico using the WISDOM approach<br><small class="small-2 text-light ls-1">Ghilardi, A., Guerrero, G., Masera, O. Biomass and Bioenergy 31 7</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2007. Spatial analysis of residential fuelwood supply and demand patterns in Mexico using the WISDOM approach<br><small class="small-2 text-light ls-1">Ghilardi, A., Guerrero, G., Masera, O. Biomass and Bioenergy 31 7</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2007. Mitigación de gases de efecto invernadero mediante el uso de estufas eficientes de leña.<br><small class="small-2 text-light ls-1">Berrueta, V., Ghilardi, A., Masera, O. Memorias de la IV Reunión Nacional de Bioenergía  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2006. WISDOM: A GIS-based supply demand mapping tool for woodfuel management<br><small class="small-2 text-light ls-1">Masera, O., Ghilardi, A., Drigo, R., Angel Trossero, M. Biomass and Bioenergy 30 7</small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2006. Woodfuels Asessment and Management: Case Studies and Results from the WISDOM Approach.<br><small class="small-2 text-light ls-1">Masera, O., Ghilardi, A., Guerrero, G., Drigo, R., Trossero, MA. Memorias de la 30 Semana Nacional de Energía Solar. Asociación Nacional de Energía Solar (ANES).  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2006. Los Recursos Bioenergéticos en México<br><small class="small-2 text-light ls-1">Ghilardi, A., Saldaña, R., Riegelhaupt, E. La Bioenergía en México: Un catalizador del desarrollo sustentable.  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2004. Woodfuel Integrated Supply/Demand Overview Mapping: WISDOM.<br><small class="small-2 text-light ls-1">Ghilardi, A., Guerrero, G., Drigo, R., Trossero, MA. Proceedings of the 2nd World Conference on Biomass for Energy, Industry and Climate Protection.  </small>
                            </p>
                        </div>
                    </div>
                    <div class="card hoverable">
                        <div class="card-content">
                            <p>
                                2003. A multi-scale assessment of woodfuel hot spots: A case of study for Mexico.<br><small class="small-2 text-light ls-1">Guerrero, G., Ghilardi, A., Masera, O. Proceedings of the First International Seminar on Bioenergy &amp; Sustainable Rural Development.  </small>
                            </p>
                        </div>
                    </div>




                </div>

                <div class="divider"></div>

                <span class="anchor" id="opportunities"></span>
                <div class="section">
                    <h5 class="center-align">OPPORTUNITIES</h5>
                    <br>

                    <div class="row">

                        <div class="col s12 m6 xl4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo base_url();?>/public/app-assets/images/mofuss/campus.jpg" alt="user bg" />
                                </div>
                                <div class="card-content">
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/unam5.gif" alt="" class="circle responsive-img activator card-profile-image green padding-2" />
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light green accent-2 z-depth-4 right">
                                        <i class="material-icons">expand_more</i>
                                    </a>
                                    <h5 class="card-title activator grey-text text-darken-4">Technician (programmer)</h5>
                                    <p><i class="material-icons profile-card-i">domain</i> UNAM</p>
                                    <p><i class="material-icons profile-card-i">email</i> aghilardi@ciga.unam.mx</p>
                                </div>
                                <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Requisitos mínimos<i class="material-icons right">close</i>
                                        </span>
                                    <p>Ing. en Computación, Ing. en Sistemas o afín, programación en C, C++, Java, Python. Páginas Web en HTML5 usando CSS3. Bases de datos: MySQL, Postgres, Oracle, SQL Server. Experiencia mínima de 5 años programando.</p>
                                    <span class="card-title grey-text text-darken-4">Requisitos deseables</span>
                                    <p>Maestro o Doctor en Ciencias de la computación o afín, Programación orientada a objetos en Java y C++, polimorfismo, métodos, abstracción, herencia. HTML5 con CSS3, JQuery, JQuery UI, Bootstrap, Ajax.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 xl4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo base_url();?>/public/app-assets/images/mofuss/campus.jpg" alt="user bg" />
                                </div>
                                <div class="card-content">
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/unam5.gif" alt="" class="circle responsive-img activator card-profile-image green padding-2" />
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light green accent-2 z-depth-4 right">
                                        <i class="material-icons">expand_more</i>
                                    </a>
                                    <h5 class="card-title activator grey-text text-darken-4">Technician (designer) </h5>
                                    <p><i class="material-icons profile-card-i">domain</i> UNAM</p>
                                    <p><i class="material-icons profile-card-i">email</i> aghilardi@ciga.unam.mx</p>
                                </div>
                                <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Requisitos mínimos<i class="material-icons right">close</i>
                                        </span>
                                    <p>Diseñador gráfico con experiencia en páginas web con especialidad en despliegue de mapas. Amplio dominio de CSS3, páginas responsivas de acuerdo a diferentes tamaños de pantalla en diferentes dispositivos Haber sido responsable de al menos 3 desarrollos web activos donde se desplieguen mapas y puedan ser consultados actualmente.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 xl4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?php echo base_url();?>/public/app-assets/images/mofuss/campus.jpg" alt="user bg" />
                                </div>
                                <div class="card-content">
                                    <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/unam5.gif" alt="" class="circle responsive-img activator card-profile-image green padding-2" />
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light green accent-2 z-depth-4 right">
                                        <i class="material-icons">expand_more</i>
                                    </a>
                                    <h5 class="card-title activator grey-text text-darken-4">PhD. Project </h5>
                                    <p><i class="material-icons profile-card-i">domain</i> UNAM</p>
                                    <p><i class="material-icons profile-card-i">email</i> aghilardi@ciga.unam.mx</p>
                                </div>
                                <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Details<i class="material-icons right">close</i>
                                        </span>
                                    <p>PhD project offer within UNAM´s Posgrado en Ciencias Biológicas: "Landscape planning tools for sustainable charcoal production in East Africa".</p>

                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <span class="anchor" id="teaching"></span>
                <div class="section">
                    <h5 class="center-align">TEACHING</h5>
                    <br>

                    <div class="row">

                        <div class="col s12 m6 l6">
                            <div class="card-panel border-radius-6  bg-image-1 pb-4 card-panel3 hoverable">
                                <p class="mt-0 mb-8">Applied statistics to geography and history studies (Estadística elemental aplicada a la geografía e historia).</p>
                                <div class="display-flex justify-content-between flex-wrap mt-4">
                                    <div class="pr-0">
                                        <p class="green-text medium-small">
                                            Fall course within the GeoHistory program at ENES, UNAM.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col s12 m6 l6">
                            <div class="card-panel border-radius-6  bg-image-1 pb-4 card-panel3 hoverable">
                                <p class="mt-0 mb-8">Spatial analysis and modeling (Análisis y modelado espacial).</p>
                                <div class="display-flex justify-content-between flex-wrap mt-4">
                                    <div class="pr-0">
                                        <p class="green-text medium-small">
                                            Spring course within the Environmental Sciences program at ENES, UNAM.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col s12 m6 l6">
                            <div class="card-panel border-radius-6  bg-image-1 pb-4 card-panel3 hoverable">
                                <p class="mt-0 mb-8">Elementary geostatistics (Fundamentos de geoestadística).</p>
                                <div class="display-flex justify-content-between flex-wrap mt-4">
                                    <div class="pr-0">
                                        <p class="green-text medium-small">
                                            Fall course within the Geography postgraduate program at CIGA, UNAM.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6">
                            <div class="card-panel border-radius-6  bg-image-1 pb-4 card-panel3 hoverable">
                                <p class="mt-0 mb-8">Woodenergy analysis and modeling in space and time.</p>
                                <div class="display-flex justify-content-between flex-wrap mt-4">
                                    <div class="pr-0">
                                        <p class="green-text medium-small">
                                            It is a one to three-day training course in learning how to use Mofuss. In 3-day settings, topics and exercises cover some general issues about wood energy scenario building.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="divider"></div>

                <span class="anchor" id="models"></span>
                <div class="section">
                    <h5 class="center-align">MODELS</h5>

                    <p>Visit our <a href="http://www.wegp.unam.mx/test/testNewWEGP.html" target="_blank">Wood-Energy Geospatial Portal</a> for detailed information about these three tools. (Site currently under development).</p>
                    <div class="row">
                        <div class="col s12">
                            <div class="card horizontal  hoverable">
                                <div class="card-image"><img src="<?php echo base_url();?>/public/app-assets/images/mofuss/16.jpg" alt="" style="width: 310px"/></div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h5>MoFuSS</h5>
                                        <p>MoFuSS is an open-source freeware developed to evaluate potential impacts of firewood harvest and charcoal production over the landscape. It’s a GIS-based model that simulates the spatio-temporal effect of woodfuel harvesting on the landscape vegetation and that accounts for savings in non-renewable woody biomass from reduced consumption. MoFuSS is being developed and supported by the National Autonomous University of Mexico, in close collaboration with the US Center of the Stockholm Environment Institute and the Global Alliance for Clean Cookstoves.</p><small>MoFuSS lead developer: Adrián Ghilardi</small><br>
                                    </div>
                                    <div class="card-action">
                                        <a href="https://gitlab.com/mofuss/mofuss" target="_blank" class="waves-effect waves-light btn green">Get Mofuss</a>
                                        <a href="<?php echo base_url();?>/webmofuss" class="waves-effect waves-light btn green">Web-based Mofuss</a>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--
                        <div class="col s12">
                            <div class="card horizontal  hoverable">
                                <div class="card-image"><img src="<?php echo base_url();?>/public/app-assets/images/mofuss/FUrDest2.png" alt="" style="width: 310px"/></div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h5>FuRDEST</h5>
                                        <p>FUrDest is a free software tool to estimate the current and projected demand of biomass in the residential sector. Fuelwood demand values are available at both, spatio-temporal level and aggregated level. FUrDest is being developed by National Autonomous University of Mexico and recently also funded by the Solid biofuels Cluster of the Mexican Center of Energy Innovation (CEMIE-BIO for its acronym in spanish).</p><small>FUrDest lead developer: Monterrat Serrano</small><br>

                                    </div>
                                    <div class="card-action">
                                        <a href="http://www.wegp.unam.mx/test/testNewWEGP.html#furdest" target="_blank" class="waves-effect waves-light btn green">Try FURDEST (BETA)</a>

                                    </div>
                                </div>
                            </div>
                        </div>
-->


                        <div class="col s12">
                            <div class="card horizontal  hoverable">
                                <div class="card-image"><img src="<?php echo base_url();?>/public/app-assets/images/mofuss/WCT.jpeg" alt="" style="width: 310px"/></div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h5>WoodFuel Collection Tracker</h5>
                                        <p>Woodfuel Collection Tracker was designed to integrate data from Columbus v990 GPS trackers with semi-structured field surveys to quantify the time effort and places visited by peasants in collecting firewood across the landscape.
                                            People need to carry the GPS unit wherever they go during their daily activities, for a period determined by the local conditions and research question.
                                            Every 3 to 5 days, tracks recorded by Columbus v990 GPS trackers are loaded into a widescreen tablet and display over a google maps satellite image.
                                            A concise multiple-choice interview is conducted to recognize what the person wearing the GPS unit was doing at various times and places along the recorded track. Places where people did some work (e.g. collected firewood, graze, work in the crops) are saved as polygons drawn over the screen by the interviewer.
                                            Depending on internet connectivity, data is saved into the tablet or send to the cloud to be analyzed remotely in almost real time.
                                            Spatial and temporal descriptive statistics regarding tracks and people’s activities are calculated automatically.
                                            Please email comments and suggestions to <a href="mailto: aghilardi@ciga.unam.mx">aghilardi@ciga.unam.mx</a>.</p><small>WCT lead developer: Roberto Rangel and Adrián Ghilardi</small><br>
                                    </div>
                                    <div class="card-action">
                                        <a href="https://play.google.com/store/apps/details?id=unam.lanase&hl=es" target="_blank" class="waves-effect waves-light btn green">Try WCT</a>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="divider"></div>
                <span class="anchor" id="outreach"></span>
                <div class="section">
                    <h5 class="center-align">OUTREACH</h5>
                    <br>

                    <div class="row">
                        <div class="col s12 m6 l4">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="header">Clean cooking forum</h4>
                                    <p class="mb-2">Adrian Ghilardi at the clean cooking forum 2015.</p>
                                </div>
                                <div class="col s12">
                                    <div class="video-container">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/n83w3FdR1OA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col s12 m6 l4">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="header">Ciencia a las 10</h4>
                                    <p class="mb-2">La importancia del carbón vegetal. Agosto 2015.</p>
                                </div>
                                <div class="col s12">
                                    <div class="video-container">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mlZ1Bkv-Rrw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l4">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="header">Clean cooking forum</h4>
                                    <p class="mb-2">Adrian Ghilardi at the clean cooking forum 2015.</p>
                                </div>
                                <div class="col s12">
                                    <div class="video-container">
                                        <iframe src="https://player.vimeo.com/video/116091561" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> <p><a href="https://vimeo.com/116091561">Entrevista con Adri&aacute;n Ghilardi</a> from <a href="https://vimeo.com/mrvmexico">MRV Mexico</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>

                <div class="divider"></div>
                <span class="anchor" id="friends"></span>
                <div class="section">
                    <h5 class="center-align">FRIENDS</h5>
                    <br>

                    <div class="row knowledge-content">

                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://www.charcoalproject.org/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <!--                                        <h5><b>The Charcoal Project</b></h5>-->
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/10.png" alt="friends" class="img-friends1"/>
                                        <p class="mb-2 black-text">The Charcoal Project</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://www.iemss.org/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/11.gif" alt="friends"  class="img-friends1"/>
                                        <p class="mb-2 black-text">iEMSs</p>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://www.wisdomprojects.net/global/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/12.gif" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">WISDOM</p>


                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://csr.ufmg.br/dinamica/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/13.jpg" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">Dinamica EGO</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://cleancookstoves.org/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/14.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">Gloval Alliance for Clean Cookstoves</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://www.itc.nl/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/15.jpg" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">ITC</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://www.energycommunity.org/Default.asp">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/16.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">LEAP</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://www.weap21.org/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/17.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">WEAP</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://chans-net.org/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/18.jpg" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">CHANS</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://www.iiasa.ac.at/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/19.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">IIASA</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://www.fao.org/forestry/energy/en/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/20.gif" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">FAO Wood-Energy</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="http://www.ccg.leeds.ac.uk/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/21.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">CCG at University of Leeds</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://geog.ucsb.edu/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/22.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">UC Santa Barbara</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://geog.ucsb.edu/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/ubcForestry1.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">UBC Forestry</p>


                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card card-hover z-depth-0 card-border-gray card1">
                                <a href="https://geog.ucsb.edu/" target="_blank">
                                    <div class="card-content center-align hoverable">
                                        <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/friends/ubcGeography1.png" alt="friends"  class="img-friends1" />
                                        <p class="mb-2 black-text">UBC Geography</p>


                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>




                </div>


                <div class="divider"></div>
                <span class="anchor" id="gallery"></span>
                <div class="section">
                    <h5 class="center-align">GALLERY</h5>
                    <br>

                    <div class="masonry-gallery-wrapper">
                        <div class="popup-gallery">
                            <div class="gallery-sizer"></div>
                            <div class="row">
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/7.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/7.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/8.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/8.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/9.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/9.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/10.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/10.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/11.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/11.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/12.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/12.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/13.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/13.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/15.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/15.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/16.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/16.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/17.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/17.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/18.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/18.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/19.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/19.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/20.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/20.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/21.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/21.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/22.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/22.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 xl3">
                                    <div>
                                        <a href="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/32.jpg" title="">
                                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/gallery/32.jpg" class="responsive-img mb-10" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>

            </div>
            <div class="content-overlay">




            </div>
        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- BEGIN: Footer-->


<footer class="page-footer grey-text" style="margin-top:0px;padding-left:0px; background-color: white;" id="contact">
    <div class="container">

        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Contact</h5>
            </div>
        </div>
        <div class="row">
            <div class="col l4 s12" style="text-align: left;">
                <!--                <h5 class="white-text">Contact</h5>-->
                <p><b>Centro de Investigaciones en Geografía Ambiental (CIGA) <br>
                        Laboratorio Nacional de Análisis y Síntesis Ecológica (LANASE) <br>
                        Escuela Nacional de Estudios Superiores (ENES) <br>
                        Universidad Nacional Autónoma de México (UNAM) </b><br>
                    Antigua Carretera a Pátzcuaro No. 8701. <br>
                    Col. Ex-Hacienda de San José de La Huerta. <br>
                    C.P. 58190 Morelia, Michoacán, MÉXICO. <br>
                    Tel CIGA: +52 443 322-38-54 <br>
                    Tel ENES: +52 443 689-35-00 ext: 80607 <br>
                    E-mail: aghilardi@ciga.unam.mx <br>
                    Skype: adrian.ghilardi.</p>
                <div class="social social-sm social-bg-brand social-cycling mt-6">
                    <a class="social-facebook" href="https://www.facebook.com/MoFuSSfreeware/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/mofussfreeware?lang=es" target="_blank"><i class="fa fa-twitter"></i></a>

                </div>
                <!--                <a href="https://www.android-kiosk.com/contact-us/"><h5 class="white-text">Contact</h5></a>-->
                <!--                <ul>-->
                <!--                    <li><span class="white-text">ProCo IT<br/>Unit 3 Castle Road, Chelston Business Park, Wellington, Somerset, TA21 9JQ, UK</span></li>-->
                <!--                    <li><a href="javascript:$crisp.push(['do', 'chat:open']);"  class="white-text">&#115;up&#112;&#111;rt&#64;a&#110;droid&#45;k&#105;o&#115;&#107;&#46;&#99;om</a></li>-->
                <!--                    <li><a href="https://play.google.com/store/apps/details?id=com.procoit.kioskbrowser"><img alt="Get it on Google Play" src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/google-play-badge.png" width="128"/></a></li>-->
                <!--                    <li><a href="javascript:$crisp.push(['do', 'chat:open']);" class="white-text"><i class="small mdi mdi-email right" style="color:white;margin-top:10px;"></i></a><a href="https://www.youtube.com/channel/UCIRzVcBrPTMfCDYQfZJhm6A" target="_blank"><i class="small mdi mdi-youtube-play right" style="color:white; margin-top:10px"></i></a><a href="https://twitter.com/kiosk_browser" target="_blank"><i class="small mdi mdi-twitter right" style="color:white;margin-top:10px;"></i></a></li>-->
                <!--                </ul>-->
                <!--                <span class="white-text right" style="font-size:0.7em;clear:both;">Android, Google Play and the Google Play logo are trademarks of Google Inc.</span>-->
            </div>
            <div class="col offset-l2 l6 s12">
                <div class="row">
                    <div class="col s12" id="map" style="height: 300px;">
                    </div>
                </div>
            </div>


        </div>
        <div class="footer-copyright">
            <div class="container">
                <span class="white-text">© 2020 <a href="http://www.proco-it.com" class="white-text" target="_blank">UNAM</a></span>

            </div>
        </div>
</footer>






<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>


<script src="<?php echo base_url();?>/public/app-assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/masonry.pkgd.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/search.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/custom/custom-script.js"></script>


<script src="<?php echo base_url();?>/public/app-assets/js/scripts/media-hover-effects.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhirqGqJQrKLc7ibt728sQ_9yb9UirXKg&callback=initMap"></script>



<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 19.649066, lng: -101.221435};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 14, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }


</script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>

</html>
