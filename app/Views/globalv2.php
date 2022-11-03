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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>/public/app-assets/cesium/bucket.css"	type="text/css"/>


<!--    <script type="text/javascript" src="--><?php //echo base_url();?><!--/public/app-assets/cesium/Sandcastle-header.js"></script>-->
    <script>

        (function() {
            'use strict';

            var defaultAction;
            var bucket = window.location.href;
            var pos = bucket.lastIndexOf('/');
            if (pos > 0 && pos < (bucket.length - 1)) {
                bucket = bucket.substring(pos + 1);
            }

            window.Sandcastle = {
                bucket : bucket,
                declare : function() {
                },
                highlight : function() {
                },
                registered : [],
                finishedLoading : function() {
                    window.Sandcastle.reset();

                    if(defaultAction) {
                        window.Sandcastle.highlight(defaultAction);
                        defaultAction();
                        defaultAction = undefined;
                    }

                    document.body.className = document.body.className.replace(/(?:\s|^)sandcastle-loading(?:\s|$)/, ' ');
                },
                addToggleButton : function(text, checked, onchange, toolbarID) {
                    window.Sandcastle.declare(onchange);
                    var input = document.createElement('input');
                    input.checked = checked;
                    input.type = 'checkbox';
                    input.style.pointerEvents = 'none';
                    var label = document.createElement('label');
                    label.appendChild(input);
                    label.appendChild(document.createTextNode(text));
                    label.style.pointerEvents = 'none';
                    var button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'cesium-button';
                    button.appendChild(label);

                    button.onclick = function() {
                        window.Sandcastle.reset();
                        window.Sandcastle.highlight(onchange);
                        input.checked = !input.checked;
                        onchange(input.checked);
                    };

                    document.getElementById(toolbarID || 'toolbar').appendChild(button);
                },
                addToolbarButton : function(text, onclick, toolbarID) {
                    window.Sandcastle.declare(onclick);
                    var button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'cesium-button';
                    button.onclick = function() {
                        if (text=='lluvia'){
                            $("#escala").attr('src','<?php echo base_url();?>/public/app-assets/cesium/escala2.png');
                        } else if (text=='temperatura') {
                            $("#escala").attr('src','<?php echo base_url();?>/public/app-assets/cesium/escala.png');
                        }
                        // var src = ($("#escala").attr('src') === 'escala-temperatura.png')
                        //     ? 'escala-temperatura.png'
                        //     : 'escala-temperatura.png';
                        // $("#escala").attr('src', src);

                        window.Sandcastle.reset();
                        window.Sandcastle.highlight(onclick);
                        onclick();
                    };

                    if (text=='lluvia'){
                        button.innerHTML = '<svg class="cesium-svgPath-svg" id="buttonlluvia" viewBox="0 0 1024 1024"><path d="M682.666667 320V149.333333H341.333333v170.666667L132.266667 853.333333c-12.8 32 10.666667 64 44.8 64h672c34.133333 0 55.466667-34.133333 44.8-64L682.666667 320z" fill="#dddddd" /><path d="M682.666667 192H341.333333c-23.466667 0-42.666667-19.2-42.666666-42.666667s19.2-42.666667 42.666666-42.666666h341.333334c23.466667 0 42.666667 19.2 42.666666 42.666666s-19.2 42.666667-42.666666 42.666667z" fill="#8BC34A" /><path d="M597.333333 640c0 93.866667-85.333333 170.666667-85.333333 170.666667s-85.333333-76.8-85.333333-170.666667 85.333333-170.666667 85.333333-170.666667 85.333333 76.8 85.333333 170.666667z" fill="#2E7D32" /><path d="M663.466667 695.466667c-42.666667 85.333333-151.466667 115.2-151.466667 115.2s-42.666667-106.666667 0-189.866667 151.466667-115.2 151.466667-115.2 42.666667 104.533333 0 189.866667z" fill="#388E3C" /><path d="M360.533333 695.466667c42.666667 85.333333 151.466667 115.2 151.466667 115.2s42.666667-106.666667 0-189.866667-151.466667-115.2-151.466667-115.2-42.666667 104.533333 0 189.866667z" fill="#43A047" /></svg>';

                    } else if (text=='temperatura'){
                        button.innerHTML = '<svg class="cesium-svgPath-svg" id="buttontemp" viewBox="0 0 1024 1024"><path d="M682.666667 320V149.333333H341.333333v170.666667L132.266667 853.333333c-12.8 32 10.666667 64 44.8 64h672c34.133333 0 55.466667-34.133333 44.8-64L682.666667 320z" fill="#ffc425" /><path d="M682.666667 192H341.333333c-23.466667 0-42.666667-19.2-42.666666-42.666667s19.2-42.666667 42.666666-42.666666h341.333334c23.466667 0 42.666667 19.2 42.666666 42.666666s-19.2 42.666667-42.666666 42.666667z" fill="#8BC34A" /><path d="M597.333333 640c0 93.866667-85.333333 170.666667-85.333333 170.666667s-85.333333-76.8-85.333333-170.666667 85.333333-170.666667 85.333333-170.666667 85.333333 76.8 85.333333 170.666667z" fill="#2E7D32" /><path d="M663.466667 695.466667c-42.666667 85.333333-151.466667 115.2-151.466667 115.2s-42.666667-106.666667 0-189.866667 151.466667-115.2 151.466667-115.2 42.666667 104.533333 0 189.866667z" fill="#388E3C" /><path d="M360.533333 695.466667c42.666667 85.333333 151.466667 115.2 151.466667 115.2s42.666667-106.666667 0-189.866667-151.466667-115.2-151.466667-115.2-42.666667 104.533333 0 189.866667z" fill="#43A047" /></svg>';
                    } else{
                        button.textContent = text;
                    }


                    document.getElementById(toolbarID || 'toolbar').appendChild(button);
                },
                addDefaultToolbarButton : function(text, onclick, toolbarID) {
                    window.Sandcastle.addToolbarButton(text, onclick, toolbarID);
                    defaultAction = onclick;
                },
                addDefaultToolbarMenu : function(options, toolbarID) {
                    window.Sandcastle.addToolbarMenu(options, toolbarID);
                    defaultAction = options[0].onselect;
                },
                addToolbarMenu : function(options, toolbarID) {
                    var menu = document.createElement('select');
                    menu.className = 'cesium-button';
                    menu.onchange = function() {
                        window.Sandcastle.reset();
                        var item = options[menu.selectedIndex];
                        if (item && typeof item.onselect === 'function') {
                            item.onselect();
                        }
                    };
                    document.getElementById(toolbarID || 'toolbar').appendChild(menu);

                    if (!defaultAction && typeof options[0].onselect === 'function') {
                        defaultAction = options[0].onselect;
                    }

                    for (var i = 0, len = options.length; i < len; ++i) {
                        var option = document.createElement('option');
                        option.textContent = options[i].text;
                        option.value = options[i].value;
                        menu.appendChild(option);
                    }
                },
                reset : function() {
                }
            };

            if (window.location.protocol === 'file:') {
                if (window.confirm("You must host this app on a web server.\nSee contributor's guide for more info?")) {
                    // window.location = 'https://github.com/AnalyticalGraphicsInc/cesium/wiki/Contributor%27s-Guide';
                }
            }
        }());

    </script>

    <script type="text/javascript" src="<?php echo base_url();?>/public/app-assets/cesium/requirejs-2.1.20/require.js"></script>
    <script src="<?php echo base_url();?>/public/app-assets/cesium/jquery.min.js"></script>


    <script type="text/javascript">
        require.config({
            baseUrl : '<?php echo base_url();?>/public/app-assets/cesium/Source',
            waitSeconds : 30
        });
    </script>

    <style type="text/css">


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
            background-color: #d4eac3;
            transition:background-color 1s, border 1.5s;
        }

        .text-size-14{
            font-size: 14pt;
        }


        .titleglobe {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            top: 90px;
            width: 290px;
            background-color: #2E7D32;
            border-radius: 3px;
            font: 19px Georgia;
            padding: 10px;
            z-index: 1;
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
                </ul>
            </div>
        </nav>
    </div>
</div>


<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/vendors.min.js"></script>-->
<!---->

<div class="titleglobe" id="titleglobe2">
    Expected fraction of Non-Renewable Biomass
</div>
<div class="titleglobe" id="titleglobe1">
    Minimum fraction of Non-Renewable Biomass
</div>



<div id="cesiumContainer" class="fullSize"></div>
<div id="loadingOverlay"><h1>Loading...</h1></div>
<div id="toolbar"></div>
<!--<img id="escala" src="escala-temperatura.png" style="position: absolute; bottom:50px; right:0px;">-->


<img id="escala" src="<?php echo base_url();?>/public/app-assets/cesium/escala.png" style="position: absolute; bottom:50px; right:50px; width: 30%;">

<script id="cesium_sandcastle_script">
    function startup(Cesium) {
        'use strict';
//Sandcastle_Begin
        var viewer = new Cesium.Viewer('cesiumContainer', {
            // sceneMode : Cesium.SceneMode.SCENE2D,
            animation : false,
            fullscreenButton : false,
            navigationInstructionsInitiallyVisible: false,
            timeline: false,
            vrButton: false,
            geocoder: false,
            infoBox: true,
            scene3DOnly: true,
            navigationHelpButton: false,
            sceneModePicker: false,
            projectionPicker: false,
        });
        // var scene = viewer.scene;
        // var tileset = scene.primitives.add(new Cesium.Cesium3DTileset({
        //     skipLevelOfDetail : true,
        //     skipScreenSpaceErrorFactor : 32,
        //     immediatelyLoadDesiredLevelOfDetail : true,
        // }));

        Sandcastle.addDefaultToolbarButton('temperatura', function() {
            var promise = Cesium.GeoJsonDataSource.load('<?php echo base_url();?>/public/app-assets/cesium/wsd2009_3punto2color.json',{
                stroke: Cesium.Color.BLACK,
                // fill: Cesium.Color.RED,
                strokeWidth: 1,
                markerSymbol: '?',
                alpha: 0.1
            });
            promise.then(function(dataSource) {
                viewer.dataSources.add(dataSource);

                var entities = dataSource.entities.values;

                for (var i = 0; i < entities.length; i++) {
                    var entity = entities[i];
                    // console.log(entity);
                    entity.name ='SELECTED REGION';
                    entity.description = '<table class="cesium-infoBox-defaultTable"><tbody>' +
                        '<tr><th>Country</th><td>'+ entity._properties.ADM0_NAME._value +'</td></tr>' +
                        '<tr><th>Region</th><td>'+ entity._properties.ADM1_NAME._value +'</td></tr>' +
                        '<tr><th>mfNRB_tot1</th><td>'+ entity._properties.mfNRB_tot1._value +'</td></tr>' +
                        '</tbody></table>';
                }
            }).otherwise(function(error){
                window.alert(error);
            });

            // viewer.zoomTo(promise);
        });



        // Sandcastle.addToolbarButton('<svg class="cesium-svgPath-svg" width="28" height="28" viewBox="0 0 28 28" style="width: 80px; height: 80px;"><path d="M14,4l-10,8.75h20l-4.25-3.7188v-4.6562h-2.812v2.1875l-2.938-2.5625zm-7.0938,9.906v10.094h14.094v-10.094h-14.094zm2.1876,2.313h3.3122v4.25h-3.3122v-4.25zm5.8442,1.281h3.406v6.438h-3.406v-6.438z"></path></svg>', function() {
        Sandcastle.addToolbarButton('lluvia', function() {
            var promise = Cesium.GeoJsonDataSource.load('<?php echo base_url();?>/public/app-assets/cesium/wsd2009_3punto2colorvar2.json',{
                stroke: Cesium.Color.BLACK,
                // fill: Cesium.Color.RED,
                strokeWidth: 1,
                markerSymbol: '?'
            });
            promise.then(function(dataSource) {
                viewer.dataSources.add(dataSource);

                var entities = dataSource.entities.values;

                for (var i = 0; i < entities.length; i++) {
                    var entity = entities[i];
                    // console.log(entity);
                    entity.name ='SELECTED REGION';
                    entity.description = '<table class="cesium-infoBox-defaultTable"><tbody>' +
                        '<tr><th>Country</th><td>'+ entity._properties.ADM0_NAME._value +'</td></tr>' +
                        '<tr><th>Region</th><td>'+ entity._properties.ADM1_NAME._value +'</td></tr>' +
                        '<tr><th>efNRB_tot1</th><td>'+ entity._properties.efNRB_tot1._value +'</td></tr>' +
                        '</tbody></table>';
                }
            }).otherwise(function(error){
                window.alert(error);
            });

            // viewer.zoomTo(promise);
        });

        Sandcastle.reset = function() {
            viewer.dataSources.removeAll();

            // viewer.camera.lookAt(Cesium.Cartesian3.fromDegrees(-98.0, 20.0), new Cesium.Cartesian3(0.0, -4790000.0, 3930000.0));

            // viewer.camera.lookAtTransform(Cesium.Matrix4.IDENTITY);
        };

        //Sandcastle_End
        Sandcastle.finishedLoading();

        $(".cesium-widget-credits").css("display","none");
        $(".cesium-viewer-toolbar").css("margin-right","40px");
        // $("#toolbar").css("margin-left","1020px");
        // $("#toolbar").css("margin-left","120px");
        $("#toolbar").css("right","160px");
        $("#toolbar").css("top","0px");
        $(".cesium-button").css("margin-top","80px");
        $(".cesium-button").css("margin-left","20px");
        // $(".cesium-button").css("margin-right","30px");
        $(".cesium-button").css("width","40px");
        $(".cesium-button").css("height","40px");
        $(".cesium-infoBox-camera").css("display","none");
        // $(".cesium-infoBox-camera").find("cesium-svgPath-svg").css("height","40px");
        // $(".cesium-infoBox-camera .cesium-svgPath-svg").css("width","40px");
        $(".cesium-svgPath-svg").css("width","40px");
        $(".cesium-svgPath-svg").css("height","40px");
        $(".cesium-baseLayerPicker-sectionTitle").text("VISTA");
        $(".cesium-baseLayerPicker-categoryTitle").css("display","none");



        $("#toolbar > .cesium-button:first-child").click(function(){
            $("#titleglobe1").show();
            $("#titleglobe2").hide();
            // $("#titleglobe2").toggle();
        });

        $("#toolbar > .cesium-button:nth-child(2)").click(function(){
            $("#titleglobe1").hide();
            $("#titleglobe2").show();
            // $("#titleglobe2").toggle();
        });

    }
    if (typeof Cesium !== 'undefined') {
        startup(Cesium);
    } else if (typeof require === 'function') {
        require(['Cesium'], startup);
    }




</script>

</body>
</html>
