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

    <link rel="stylesheet" href="<?php echo base_url();?>/public/app-assets/webmofuss/appcountry.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<!--<body >-->
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>/webmofuss">Home</a></li>
                    <li ><a class="dropdown-trigger" href="#!" data-target="dropdownSubconfigure">Configure<i class="material-icons right">arrow_drop_down</i></a></li>

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

    <!--    <div id="select-map" style="height: 100%; overflow: hidden"></div>-->
    <div id="select-map" style="height: inherit"></div>
</div>



<!-- Footer -->
<footer class="page-footer" style="margin: 0; padding: 0; width: 100%;position:absolute; bottom: 0">
<!--<footer class="page-footer">-->
    <div class="footer-copyright" >
        <div class="container center">
            © UNAM 2019 Copyright.
        </div>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>

<!--<script defer src="http://132.247.186.48/js/frontend/app.js"></script>-->
<script defer src="<?php echo base_url();?>/public/app-assets/js/custom/homecountrydefault.js"></script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>


<script>


    window.onload = function() {

        // map.dataProvider.areas.push({"id": "HN", "color": "#FFC107"});
        // map.dataProvider.areas.push({"id": "KE", "color": "#2E7032"});
         map.dataProvider.areas.push({"id": "HT", "color": "#990000"});
        // map.dataProvider.areas.push({"id": "PE", "color": "#990000"});
        map.dataProvider.areas.push({"id": "ZM", "color": "#990000"});
        map.validateData();


        map.addListener("clickMapObject", function (event) {
            countryName = event.mapObject.title;
            countryID = event.mapObject.id;

            // setCookie(country, countryName);
            // setCookieID(id, countryID);


            location.href = "<?php echo base_url();?>/dashdefault/country/" + countryID;
        }); //// set method for country name
    };


</script>

</body>
</html>
