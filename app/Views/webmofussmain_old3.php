<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Web version of MoFuSS tool.">
    <meta name="keywords" content="UNAM, Web, MoFuSS, ENES, CIGA">
    <meta name="author" content="UNAM">
    <title>Web MoFuSS-Home</title>

    <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url();?>/public/app-assets/webmofuss/favicon.ico"/>

    <link rel="stylesheet" href="<?php echo base_url();?>/public/app-assets/webmofuss/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/hover-effects/media-hover-effects.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>

        /*body {*/
        /*    margin: 0;*/
        /*    background: #D1EBD4;*/
        /*    overflow: hidden;*/
        /*    text-align: center;*/
        /*    height: 100vh;*/
        /*}*/

        body {

            overflow-x: hidden;

        }

        body svg {
            margin: 0 auto;
            width: 400px;
            position: relative;
            z-index: 1;
            top: 50%;
            height: 100%;
        }
        body svg .line:nth-of-type(1) {
            -webkit-animation: dash_loader 1s 1.5s linear forwards;
            animation: dash_loader 1s 1.5s linear forwards;
        }
        body svg .line:nth-of-type(2) {
            -webkit-animation: dash_loader 1s 1.6s linear forwards;
            animation: dash_loader 1s 1.6s linear forwards;
        }
        body svg .line:nth-of-type(3) {
            -webkit-animation: dash_loader 1s 1.7s linear forwards;
            animation: dash_loader 1s 1.7s linear forwards;
        }
        body svg .line:nth-of-type(4) {
            -webkit-animation: dash_loader 1s 1.8s linear forwards;
            animation: dash_loader 1s 1.8s linear forwards;
        }
        body svg .line:nth-of-type(5) {
            -webkit-animation: dash_loader 1s 1.9s linear forwards;
            animation: dash_loader 1s 1.9s linear forwards;
        }
        body svg .line:nth-of-type(6) {
            -webkit-animation: dash_loader 1s 2s linear forwards;
            animation: dash_loader 1s 2s linear forwards;
        }
        body svg .line:nth-of-type(7) {
            -webkit-animation: dash_loader 1s 2.1s linear forwards;
            animation: dash_loader 1s 2.1s linear forwards;
        }
        body svg .line:nth-of-type(8) {
            -webkit-animation: dash_loader 1s 2.2s linear forwards;
            animation: dash_loader 1s 2.2s linear forwards;
        }
        body svg .line:nth-of-type(9) {
            -webkit-animation: dash_loader 1s 2.3s linear forwards;
            animation: dash_loader 1s 2.3s linear forwards;
        }
        body svg .line:nth-of-type(10) {
            -webkit-animation: dash_loader 1s 2.4s linear forwards;
            animation: dash_loader 1s 2.4s linear forwards;
        }

        .forest img {
            height: 100%;
            max-height: 1000px;
            position: absolute;
            bottom: 100%;
            left: 0;
        }
        .forest img:nth-of-type(1) {
            -webkit-animation: popup 0.7s 0.1s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.1s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(2) {
            -webkit-animation: popup 0.7s 0.2s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.2s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(3) {
            -webkit-animation: popup 0.7s 0.3s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.3s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(4) {
            -webkit-animation: popup 0.7s 0.4s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.4s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(5) {
            -webkit-animation: popup 0.7s 0.5s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.5s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(6) {
            -webkit-animation: popup 0.7s 0.6s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.6s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(7) {
            -webkit-animation: popup 0.7s 0.7s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.7s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(8) {
            -webkit-animation: popup 0.7s 0.8s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.8s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(9) {
            -webkit-animation: popup 0.7s 0.9s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 0.9s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        .forest img:nth-of-type(10) {
            -webkit-animation: popup 0.7s 1s forwards cubic-bezier(0, 0.615, 0, 0.995);
            animation: popup 0.7s 1s forwards cubic-bezier(0, 0.615, 0, 0.995);
        }
        @-webkit-keyframes popup {
            from {
                bottom: -100%;
            }
            to {
                bottom: 0;
            }
        }
        @keyframes popup {
            from {
                bottom: -100%;
            }
            to {
                bottom: 0;
            }
        }
        path, polyline, line {
            stroke-dasharray: 750;
            stroke-dashoffset: 750;
            stroke-width: 12px;
            stroke-miterlimit: 10;
            stroke-linejoin: round;
            fill: none;
            stroke: white;
            z-index: 1;
            opacity: 1;
        }

        @-webkit-keyframes dash_loader {
            to {
                stroke-dashoffset: 0;
                stroke-width: 3px;
                stroke: white;
            }
        }

        @keyframes dash_loader {
            to {
                stroke-dashoffset: 0;
                stroke-width: 3px;
                stroke: white;
            }
        }

        #container-about {
            scroll-margin-top: 120px;
        }
        .text-size-14{
            font-size: 14pt;
        }

    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, {});

            var elems = document.querySelectorAll('.dropdown-trigger');

            var dropdownOptions = {
                'closeOnClick': true,
                'hover':false,
                'coverTrigger':false
            }
            var instances = M.Dropdown.init(elems, dropdownOptions);

        });

        function setCookies(countryID, countryName) {
            document.cookie = 'country' + "=" + countryName;
            document.cookie = 'id' + "=" + countryID;
        }



    </script>
</head>
<body class="frontend-index">
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#container-about">About</a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownDatasets">Data repositories<i class="material-icons right" style="margin-left: 0">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownCode">Code<i class="material-icons right" style="margin-left: 0">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownSubcountries">Case studies<i class="material-icons right" style="margin-left: 0">arrow_drop_down</i></a></li>

                </ul>
            </div>
        </nav>

    </div>
</div>

<!-- Dropdown Structure -->
<ul id="dropdownSubcountries" class="dropdown-content">
    <li><a href="/platform/country/H1" onclick="setCookies('H1','SantaBarbara')">Santa Bárbara, Honduras</a></li>
    <li><a href="/platform/country/I1" onclick="setCookies('I1','Koppal')">Koppal, KA, India</a></li>
    <li><a href="/platform/country/M1" onclick="setCookies('M1','Mulanje')">Mulanje Mountain, Malawi</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdownDatasets" class="dropdown-content">
<!--    <li><a href= "http://132.247.186.48/assets/datasets/SourceDataHaiti-20191126T232908Z-001.zip">Haití</a></li>-->
    <li><a href= "#">In progress</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdownCode" class="dropdown-content">
    <li><a href= "https://gitlab.com/mofuss/mofuss">MoFuSS repository</a></li>
    <li><a href= "http://132.247.186.48/assetsHome/pdfsAdrian/ijgi-08-00245.pdf">MoFuSS manuals</a></li>
</ul>


<div class='forest'>
    <img class='p1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_1.svg'>
    <img class='p2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_2.svg'>
    <img class='p3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_3.svg'>
    <img class='p4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_4.svg'>
    <img class='p5' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_5.svg'>
    <img class='p6' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_6.svg'>
</div>


<!--<div id="main" >-->
<div style="position: absolute; top:40vh">
            <div class="container" center-align="center">
                <div style="width: 50vw">
                    <div class="white-text">
                        <h2 class="green-text text-lighten-2">Web-based MoFuSS</h2>
                        <h5 blue-text lighten-2 >Modeling Fuelwood Savings Scenarios</h5>
                    </div>
                </div>
            </div>

</div>

<!--</div>-->


<div class="container-basic" style="margin-top: 100vh;" id="container-about">

    <div class="container" >
        <h3 class="titles text-center"><strong>About</strong></h3>
        <p class="text-size-14">
            MoFuSS is an open-source freeware developed to evaluate potential impacts of firewood harvest and charcoal production over the landscape. It’s a GIS-based model that simulates the spatio-temporal effect of woodfuel harvesting on the landscape vegetation and that accounts for savings in non-renewable woody biomass from reduced consumption. MoFuSS is being developed and supported by the National Autonomous University of Mexico, in close collaboration with the US Center of the Stockholm Environment Institute and the Global Alliance for Clean Cookstoves.
        </p>
    </div>
</div>


<div class="container-basic" style="margin-top: 0;">
    <div class="container" id="container-types">
        <h3 class="titles text-center"><strong>Select type of analysis</strong></h3>
        <p class="text-size-14">
              There are two versions for web-based MoFuSS. The first one considers predefined values for the simulation parameters and, in that sense, it's useful to evaluate the most common scenario. The second version, which is still under development, offers full control of the simulation scenario.
        </p>

        <div class="row center">
            <div class="col s12">
                <div class="row">


                    <div class="col s12 m6 grid">
                        <a href="<?php echo base_url();?>/countrydefault">
                            <!--                            <figure class="effect-zoe">-->
                            <figure class="effect-layla">
                                <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/dashboard/custom_map4.svg" alt="img25"  style="height:100%; object-fit: fill;" />
                                <figcaption>
                                    <h4>Default scenario</h4>
                                    <p class="description">Analysis based on the most common scenario.</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>


                    <div class="col s12 m6 grid">
<!--                        <a href="--><?php //echo base_url();?><!--/webmofuss">-->
                        <a href="javascript:void(0);">

                        <figure class="effect-layla">
                            <img src="<?php echo base_url();?>/public/app-assets/images/mofuss/dashboard/custom_map5c.svg" alt="img26" style="height:100%; object-fit: fill;" />
                            <figcaption>
                                <h4>User-defined scenario</h4>
                                <p class="description">The user can modify the parametrs of the model.</p>
                            </figcaption>
                        </figure>
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<!--<div id="container-map" class="container-medium" >-->
<!---->
<!--</div>-->




<!-- Footer -->
<footer class="page-footer" >
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <h5 class="white-text">MoFuSS</h5>
                <p class="grey-text text-lighten-4">
                    This is a prototype of the Web Based MoFuSS tool. Developing a full beta version for all countries in the Global South will require external funding.           </p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li>
                        <p class="grey-text text-lighten-4">
                            Please send questions, comments, <br> and suggestions to mofussfreeware@gmail.com</p>
                    </li>
                    <li>

                        <p class="grey-text text-lighten-4">

                            <a href="https://groups.google.com/forum/#!forum/MoFuSS" target="blank" class="green-text text-lighten-1">Join our Google Group</a>

                            to receive updates about the development of Web MoFuSS, and new available country datasets.</p>
                    </li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Partners</h5>
                <ul>
                    <li>
                        <a href="https://www.unam.mx/" target="blank" class="grey-text text-lighten-3">UNAM</a>
                    </li>

                    <li>
                        <a href="https://www.sei.org/" target="blank" class="grey-text text-lighten-3">SEI</a>
                    </li>
                    <li>
                        <a href="https://www.cleancookingalliance.org/home/index.html" target="blank" class="grey-text text-lighten-3">CCA</a>
                    </li>
                    <li>
                        <a href="https://unfccc.int/ " target="blank" class="grey-text text-lighten-3">UNFCCC</a>
                    </li>
                    <li>
                        <a href="https://www.goldstandard.org/" target="blank" class="grey-text text-lighten-3">GS</a>
                    </li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Follow MoFuSS</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/MoFuSSfreeware/" target="_blank">
                            <img id="logoFace" src="<?php echo base_url();?>/public/app-assets/webmofuss/facebook.png"
                                 style="width:40px;height:40px;">
                        </a>
                        <!--/li>
                        <li-->
                        <a class="white-text" href="https://twitter.com/mofussfreeware?lang=es" target="_blank">
                            <img id="logoTweet" src="<?php echo base_url();?>/public/app-assets/webmofuss/twitter.png"
                                 style="width:40px;height:40px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © UNAM 2022 Copyright.
            This website uses cookies to provide you with an improved user experience. By continuing to browse this site, you consent to the use of cookies an similar technologies.
        </div>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>

<!--<script defer src="http://132.247.186.48/js/frontend/app.js"></script>-->
<script defer src="<?php echo base_url();?>/public/app-assets/js/custom/home.js"></script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>

<script src="<?php echo base_url();?>/public/app-assets/js/scripts/media-hover-effects.js"></script>
<script>

    $(document).ready(function(){
        $(this).scrollTop(0);
    });

    var subtleness = 20 // The higher this number the more subtle the effect will be
    var max_width = 700 // Your max width without px
    var piece1 = $(".p1"); // Elem
    var piece2 = $(".p2"); // Elem
    var piece3 = $(".p3"); // Elem
    var piece4 = $(".p4"); // Elem
    var piece5 = $(".p5"); // Elem
    var piece6 = $(".p6"); // Elem

    function reset(){
        piece.attr("style", "transform: rotate(0deg)")
    }

    $(document).on("mousemove",function(e) {
        if($(window).width() > max_width){ // Do the check
            var ax = -($(window).innerWidth()/2- e.pageX)/subtleness;
            var ay = ($(window).innerHeight()/2- e.pageY)/subtleness;
            piece1.attr("style", "transform:translateX(" + -(ax/5) + "px)");
            piece2.attr("style", "transform:translateX(" + ax/4 + "px)");
            piece3.attr("style", "transform:translateX(" + -(ax/5) + "px)");
            piece4.attr("style", "transform:translateX(" + ax/6 + "px)");
            piece5.attr("style", "transform:translateX(" + -(ax/8) + "px)");
            piece6.attr("style", "transform:translateX(" + ax/10 + "px)");
        } else {
            reset();
        }
    });

</script>



</body>
</html>
