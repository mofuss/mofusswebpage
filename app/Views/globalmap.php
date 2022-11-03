<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Web version of MoFuSS tool.">
    <meta name="keywords" content="UNAM, Web, MoFuSS, ENES, CIGA">
    <meta name="author" content="UNAM">
    <title>Web MoFuSS Global Analysis</title>

    <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url();?>/public/app-assets/webmofuss/favicon.ico"/>

    <!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/public/app-assets/webmofuss/appcountry.css">-->
    <!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--/public/app-assets/webmofuss/app.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />

<!--    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v3.0.11/turf.min.js"></script>-->
<!--    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.js"></script>-->

<!--    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.css"	type="text/css"/>-->

    <style type="text/css">

        html,body { margin: 0; padding: 0; height: 100%;}

        .map-wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
        }
        /*#map { position: absolute; top: -900px; bottom: 0; width: 100%;  background-color: darkred; overflow: hidden}*/
        /*#map { position: absolute; top: 0px; bottom: 0; width: 100%;  background-color: darkred; overflow: hidden}*/
        #map { display: block; position: absolute; top: 0px; bottom: 0; width: 100%;  background-color: white; }

        .mapboxgl-popup {
            max-width: 400px;
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }

        /*.marker {*/
        /*    background-image: url('*/<?php //echo base_url();?>/*/public/assets/images/mapbox-icon.png');*/
        /*    background-size: cover;*/
        /*    width: 50px;*/
        /*    height: 50px;*/
        /*    border-radius: 50%;*/
        /*    cursor: pointer;*/
        /*}*/

        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            color: dimgrey;
            border-color: #000000;
            border-width: thin;
            border-style: solid;
            /*background-color: lightgrey;*/
        }


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
            fill:#ff0d5f;
        }
        .titles {
            color: #2E7D32;
        }
        .cardmenu {
            border: 1px solid transparent;
        }

        .cardmenu:hover {
            /*background-color: #0a151f;*/
            /*background-color: #2E7D32;*/
            /*background-color: #abcbad;*/
            background-color: #d4eac3;
            /*border: 1px solid  #2E7D32;*/
            transition:background-color 1s, border 1.5s;
        }

        .text-size-14{
            font-size: 14pt;
        }

        #titleglobe {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            top: 90px;
            width: 390px;
            background-color: #2E7D32;
            border-radius: 3px;
            font: 19px Georgia;
            padding: 10px;
            z-index: 1;
            color: white;
        }




    </style>
</head>
<body>
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>/webmofuss">Home</a></li>
                    <li><a href="<?php echo base_url();?>/countrydefault">Select region</a></li>
                    <!--                    <li ><a class="dropdown-trigger" href="#!" data-target="dropdownSubconfigure">Configure<i class="material-icons right" style="margin-left: 0">arrow_drop_down</i></a></li>-->

                </ul>
            </div>
        </nav>


    </div>
</div>

<div id="titleglobe">
    Woodfuel Environmental Impacts
</div>

<div id='map'></div>

<div class="section" >
    <div class="row">


        <!--                        <div class="col s6 m4 l3">-->
        <div style="width: 300px; position: absolute; left: 50px; top:120px;">

            <div class="card">
                <div class="card-content ">
                    <h6 id="title-mfNRB">Minimum fraction of Non-Renewable Biomass</h6>
                    <h6 id="title-efNRB" hidden>Expected fraction of Non-Renewable Biomass</h6>
                    <hr>
                    <div class="green-text">
                        <p><span id="txt-mfNRB">The “minimum fraction of Non-Renewable Biomass” (mfNRB) indicates the best possible situation, given the estimated level of harvesting and the sustainable supply potential of the area under consideration, and assuming the rational management of biomass resources..</span></p>
                        <p><span id="txt-efNRB" hidden>The Expected Fraction of Non-Renewable Biomass (efNRB) indicates the likely level of harvesting and the supply potential under current management
practices.</span></p>
                    </div>
                </div>
                <div class="card-action">
                    <button id="btn-mfNRB" class="waves-effect btn accent-4" style="text-transform: none" disabled="disabled">
                        mfNRB
                    </button>
                    <button id="btn-efNRB"  class="waves-effect btn  accent-4" style="text-transform: none" >
                        efNRB
                    </button>
                </div>



            </div>



        </div>
    </div>

</div>


<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>


<script>

    $("#btn-efNRB").click(function(){
        $("#btn-efNRB").attr("disabled", true);
        $('#btn-mfNRB').removeAttr("disabled");
        $("#txt-mfNRB").toggle();
        $("#txt-efNRB").toggle();
        $("#title-mfNRB").toggle();
        $("#title-efNRB").toggle();
        recargar_layermapa1();
    });
    $("#btn-mfNRB").click(function(){
        $("#btn-mfNRB").attr("disabled", true);
        $('#btn-efNRB').removeAttr("disabled");
        $("#txt-mfNRB").toggle();
        $("#txt-efNRB").toggle();
        $("#title-mfNRB").toggle();
        $("#title-efNRB").toggle();
        recargar_layermapa2();
    });


    // $('#btn-mfNRB').removeAttr("disabled");
    // $("#btn-mfNRB").attr("disabled", false);


    function cargar_layermapa(){
        var url = '<?php echo base_url();?>/public/app-assets/assets/globemap/wsd2009_3punto2var1.geojson';
        //var url = '<?php //echo base_url();?>///public/app-assets/assets/globemap/wsd2009.geojson';
        map.addSource('country', { type: 'geojson', data: url});

        map.addLayer({
            'id': 'capa0',
            'type': 'fill',
            'source': 'country',
            'layout': {'visibility': 'visible'},
            'paint': {
                'fill-color': {
                    property: 'variable',
                    // stops: [[0, '#fff'], [100, '#4CAF50']]
                    // stops: [[0, '#e7cf31'], [100, '#a51608']]
                    stops: [[0, '#ebd85a'], [100, '#a51608']]
                }
            }
        });




        map.on('mousemove', 'capa0', move1);
        map.on('mouseleave', 'capa0', function() {
            map.getCanvas().style.cursor = '';
            popup0.remove();
        });

    }

    mapboxgl.accessToken = 'pk.eyJ1IjoiZXJpbGtlIiwiYSI6ImNqZnZud3RrMzBqbzQyeXBkNjBzMnVlZzAifQ.ikdp7GlG3TyF455yFqDtUg';


    var map = new mapboxgl.Map({
        container: 'map',
        // style: 'mapbox://styles/mapbox/dark-v9', //hosted style id
        // style: 'mapbox://styles/mapbox/dark-v10', //hosted style id
        style: 'mapbox://styles/mapbox/light-v10', //hosted style id
        // style: 'mapbox://styles/mapbox/streets-v11',
        //center: [<?php //echo $longitude; ?>//, <?php //echo $latitude; ?>//],
        zoom: 2,
        // dragPan: false,
        renderWorldCopies: false,
        // minZoom: 2,
        maxBounds:  [
            [-180, -80], // Southwest coordinates
            [180, 80] // Northeast coordinates
        ]
    });

    var popup0 = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false
    });


    function move1(e){
        map.getCanvas().style.cursor = 'pointer';
        var id=e.features[0].properties.OBJECTID;
        var nombre=e.features[0].properties.ADM0_NAME;
        var nombre2=e.features[0].properties.ADM1_NAME;
        var variable1=e.features[0].properties.mfNRB_tot1;
        variable1=Math.round(variable1*100,2)/100;
        var descripcion='<b>'+nombre+'</b>, '+nombre2+'<br>mfNRB_tot1: '+variable1;
        popup0.setLngLat(e.lngLat)
            .setHTML(descripcion)
            .addTo(map);
    }

    function move2(e){
        map.getCanvas().style.cursor = 'pointer';
        var id=e.features[0].properties.OBJECTID;
        var nombre=e.features[0].properties.ADM0_NAME;
        var nombre2=e.features[0].properties.ADM1_NAME;
        // var variable1=e.features[0].properties.mfNRB_tot1;
        var variable1=e.features[0].properties.efNRB_tot1;
        variable1=Math.round(variable1*100,2)/100;
        var descripcion='<b>'+nombre+'</b>, '+nombre2+'<br>efNRB_tot1: '+variable1;
        popup0.setLngLat(e.lngLat)
            .setHTML(descripcion)
            .addTo(map);
    }

    function recargar_layermapa1(){
        //var url = '<?php //echo base_url();?>///public/app-assets/assets/globemap/wsd2009.geojson';
        var url = '<?php echo base_url();?>/public/app-assets/assets/globemap/wsd2009_3punto2var2.geojson';
        map.getSource('country').setData(url);
        map.off('mousemove', 'capa0', move1);
        map.on('mousemove', 'capa0', move2);
    }

    function recargar_layermapa2(){
        //var url = '<?php //echo base_url();?>///public/app-assets/assets/globemap/wsd2009.geojson';
        var url = '<?php echo base_url();?>/public/app-assets/assets/globemap/wsd2009_3punto2var1.geojson';
        map.getSource('country').setData(url);
        map.off('mousemove', 'capa0', move2);
        map.on('mousemove', 'capa0', move1);
    }


    map.on('load', function () {
        cargar_layermapa();
    });
</script>


</body>
</html>
