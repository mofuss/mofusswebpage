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

<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/public/app-assets/webmofuss/appcountry.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/public/app-assets/webmofuss/app.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .logo-mofuss-img {
            height: 77px;
            width: 77px;
        }

        @media only screen and (min-width : 993px) {
            nav a.sidenav-trigger {
                display: none;
            }
        }

        @media screen and (max-width: 900px) {
            .logo-mofuss-img {
                height: 65px;
                width: 65px;
            }
        }

        .logo-mofuss-home {
            height: 10vh;
            margin-left: 15vh;
            position: absolute;
            z-index: 1;
            box-shadow: 20px 25px;
            border: 2px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 76px;
        }

        @media screen and (max-width: 700px) {
            .logo-mofuss-home {
                margin-left: 35vh;
                padding: 10px;
                box-shadow: 10px 13px;
            }
        }

        @media screen and (min-width: 701px) and (max-width: 990px) {
            .logo-mofuss-home {
                margin-left: 50vh;
                padding: 8px;
                height: 7vh;
                box-shadow: 10px 15px;
            }
        }

        @media screen and (min-width: 991px) and (max-width: 1030px) {
            .logo-mofuss-home {
                margin-left: 2vh;
                padding: 8px;
                height: 6vh;
                box-shadow: 18px 18px;
            }
        }

        .logo-mofuss:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }

        #mobile-demo {
            background-color: rgba(45, 125, 50, 0.911);
            color: #fff;
        }

        .green-text {
            color: #4CAF50 !important;
        }
        .green {
            background-color: #4CAF50 !important;
        }
        .navbar-top {
            background-color: #2E7D32;
        }
        .page-footer {
            background-color: #2E7D32;
        }
        .map-menu{
            height: 150px;
        }
        .map-menu:hover{
            transform: scale(1.1);
        }
        .st1{
            /*fill:#2E7D32;*/
            fill:#ff0d5f;;
        }
        .titles {
            color: #2E7D32;
        }
        .card {
            border: 1px solid transparent;
        }

        .card:hover {
            /*background-color: #0a151f;*/
            /*background-color: #2E7D32;*/
            /*background-color: #abcbad;*/
            background-color: #d4eac3;
            /*border: 1px solid  #2E7D32;*/
            transition:background-color 1s, border 1.5s;
        }




    </style>



    <div class="modal" id="info">
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <h5 class="green-text">Information about tier levels</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <p>
                        Tier levels in MoFuSS are inspired by the IPCC classification. Progressing from Tier 1 to Tier 3 generally represents a reduction in the uncertainty of NRB estimates.
                    </p>
                    <p>
                        <i class="tiny material-icons red-text">brightness_1</i>
                        Tier 1 employs global datasets freely available. Input parameters, such as biomass growth functions for example, are derived from global datasets, resulting in wide variations that are propagated within MoFuSS as uncertainty.</p>
                    <p>
                        <i class="tiny material-icons yellow-text">brightness_1</i>
                        Tier 2 employs country datasets mostly available to the general public. Input parameters are based in available information for the country.</p>
                    <p>
                        <i class="tiny material-icons green-text">brightness_1</i>
                        Tier 3 employs country or regional datasets produced specifically for MoFuSS, and sometimes calibrated with ground data. In certain cases, some sort of validation of parameters and /or results are available. </p>


                </div>
            </div>
        </div>

<!--        <div class="modal-footer">-->
<!--            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>-->
<!--        </div>-->
    </div>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var elems = document.querySelectorAll('.tooltipped');
        //     var instances = M.Tooltip.init(elems, {});
        //
        //     var elems = document.querySelectorAll('.dropdown-trigger');
        //
        //     var dropdownOptions = {
        //         'closeOnClick': true,
        //         'hover':false,
        //         'coverTrigger':false
        //     }
        //     var instances = M.Dropdown.init(elems, dropdownOptions);
        //
        // });

        function setCookies(countryID, countryName) {
            document.cookie = 'country' + "=" + countryName;
            document.cookie = 'id' + "=" + countryID;
        }
    </script>
</head>
<body class="frontend-index">
<!--<body >-->
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>/webmofussmain">Web-based mofuss</a></li>
<!--                    <li ><a class="dropdown-trigger" href="#!" data-target="dropdownSubconfigure">Configure<i class="material-icons right" style="margin-left: 0">arrow_drop_down</i></a></li>-->

                </ul>
            </div>
        </nav>


    </div>
</div>



<!-- Dropdown Configure -->
<ul id="dropdownSubconfigure" class="dropdown-content">
    <li><a href="/webmofuss/configure" >Countries</a></li>
</ul>




<!--<div id="container-map"  style="margin: 0; height: 80vh; overflow: hidden">-->
<div id="container-map" class="container-medium" style="margin: 0;">
    <div id="title-countries" class="center"   style="margin: 15px;">
        <h3 class="titles">
            <strong>Select a country</strong>
        </h3>
        <p>
            Tier levels in MoFuSS are inspired by the IPCC classification. Progressing from Tier 1 to Tier 3 generally represents a reduction in the uncertainty of NRB estimates.
        </p>

        <a class="row menu-option waves-effect modal-trigger tooltipped" href="#info" data-position="top" data-tooltip="Tier 1 employs global datasets freely available. Input parameters, such as biomass growth functions for example, are derived from global datasets, resulting in wide variations that are propagated within MoFuSS as uncertainty.">
            <div class="col s12 center-align">
                <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                <i class="grey-text text-darken-2">Tier 1</i>
            </div>
        </a>
        <a class="row menu-option waves-effect modal-trigger tooltipped" href="#info" data-position="top" data-tooltip="Tier 2 employs country datasets mostly available to the general public. Input parameters are based in available information for the country.">
            <div class="col s12 center-align ">
                <i class="tiny material-icons amber-text">brightness_1</i>
                <i class="grey-text text-darken-2">Tier 2</i>
            </div>
        </a>
        <a class="row menu-option waves-effect modal-trigger tooltipped" href="#info" data-position="top" data-tooltip="Tier 3 employs country or regional datasets produced specifically for MoFuSS, and sometimes calibrated with ground data. In certain cases, some sort of validation of parameters and /or results are available.">
            <div class="col s12 center-align ">
                <i class="tiny material-icons green-text text-darken-3">brightness_1</i>
                <i class="grey-text text-darken-2">Tier 3</i>
            </div>
        </a>

<!--    <div id="title-countries" class="center" style="position: absolute; top: 50px;">-->

    </div>

    <div class="row">
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/HT">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/haiti.svg">
                    <h5 class="m-0"><b>Haiti</b></h5>
<!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/KE">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/kenya.svg">
                    <h5 class="m-0"><b>Kenya</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/NG">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/nigeria.svg">
                    <h5 class="m-0"><b>Nigeria</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/RW">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/rwanda.svg">
                    <h5 class="m-0"><b>Rwanda</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/ZM">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/zambia.svg">
                    <h5 class="m-0"><b>Zambia</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/PE">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/peru.svg">
                    <h5 class="m-0"><b>Peru</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="<?php echo base_url();?>/dashdefault/country/MC">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/michoacan.svg">
                    <h5 class="m-0"><b>Michoacán - Mexico</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>
        <div class="col s12 m6 l3 card-width">
            <a href="#">
            <div class="card border-radius-6" >
                <div class="card-content center-align">
                    <img class="map-menu" src="<?php echo base_url();?>/public/app-assets/images/mofuss/mapas-svg/green/peru.svg">
                    <h5 class="m-0"><b>Koppal - India</b></h5>
                    <!--                    <p>Info</p>-->
                    <i class="tiny material-icons red-text text-darken-4">brightness_1</i>
                    <i class="grey-text text-darken-2">Tier 1</i>
                </div>
            </div>
            </a>
        </div>

    </div>


    <!--    <div id="select-map" style="height: 100%; overflow: hidden"></div>-->
<!--    <div id="select-map" style="height: inherit"></div>-->
</div>

<!--<div style="height: 80px"></div>-->

<!-- Footer -->
<!--<footer class="page-footer" style="margin: 0; padding: 0; width: 100%;position:absolute; bottom: 0">-->
<!--<footer class="page-footer" style="width: 100%;position:absolute; bottom: 0">-->
<!--<footer class="page-footer">-->
<footer class="page-footer">
    <div class="footer-copyright" >
        <div class="container center">
            © UNAM 2022 Copyright.
        </div>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>

<!--<script defer src="http://132.247.186.48/js/frontend/app.js"></script>-->
<script defer src="<?php echo base_url();?>/public/app-assets/js/custom/homecountrydefault.js"></script>
<!--<script src="https://www.amcharts.com/lib/3/ammap.js"></script>-->
<!--<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>-->


<script>


    //window.onload = function() {
    //
    //    // map.dataProvider.areas.push({"id": "HN", "color": "#FFC107"});
    //    // map.dataProvider.areas.push({"id": "KE", "color": "#2E7032"});
    //     map.dataProvider.areas.push({"id": "HT", "color": "#990000"});
    //    // map.dataProvider.areas.push({"id": "PE", "color": "#990000"});
    //    map.dataProvider.areas.push({"id": "ZM", "color": "#990000"});
    //    map.validateData();
    //
    //
    //    map.addListener("clickMapObject", function (event) {
    //        countryName = event.mapObject.title;
    //        countryID = event.mapObject.id;
    //
    //        // setCookie(country, countryName);
    //        // setCookieID(id, countryID);
    //
    //
    //        location.href = "<?php //echo base_url();?>///dashdefault/country/" + countryID;
    //    }); //// set method for country name
    //};


</script>

</body>
</html>
