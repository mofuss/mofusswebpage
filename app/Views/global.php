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



        body {
            /*margin: 0;*/
            /*padding: 0;*/
            background: #000000 url(<?php echo base_url();?>/public/app-assets/js/globe/loading.gif) center center no-repeat;
            color: #ffffff;
            /*font-family: sans-serif;*/
            /*font-size: 13px;*/
            /*line-height: 20px;*/
            /*height: 100%;*/
            overflow: hidden;
        }

        /*#info {*/

        /*    font-size: 11px;*/
        /*    position: absolute;*/
        /*    bottom: 5px;*/
        /*    background-color: rgba(0,0,0,0.8);*/
        /*    border-radius: 3px;*/
        /*    right: 10px;*/
        /*    padding: 10px;*/

        /*}*/

        #currentInfo {
            width: 290px;
            position: absolute;
            left: 20px;
            top: 163px;
            background-color: #2E7D32;
            border-top: 1px solid rgba(255,255,255,0.4);
            padding: 10px;
        }

        /*a {*/
        /*    color: #aaa;*/
        /*    text-decoration: none;*/
        /*}*/
        /*a:hover {*/
        /*    text-decoration: underline;*/
        /*}*/

        /*.bull {*/
        /*    padding: 0 5px;*/
        /*    color: #555;*/
        /*}*/

        #titleglobe {
            position: absolute;
            top: 120px;
            width: 290px;
            left: 20px;
            background-color: #2E7D32;
            border-radius: 3px;
            font: 17px Georgia;
            padding: 10px;
        }

        .year {
            font: 16px Georgia;
            line-height: 26px;
            height: 30px;
            text-align: center;
            float: left;
            width: 130px;
            color: rgba(255, 255, 255, 0.4);

            cursor: pointer;
            -webkit-transition: all 0.1s ease-out;
        }

        .year:hover, .year.active {
            font-size: 23px;
            color: #fff;
        }

        #ce span {
            display: none;
        }

        /*#ce {*/
        /*    width: 107px;*/
        /*    height: 55px;*/
        /*    display: block;*/
        /*    position: absolute;*/
        /*    bottom: 15px;*/
        /*    left: 20px;*/
        /*    background: url(*/<?php //echo base_url();?>/*/public/app-assets/js/globe/ce.png);*/
        /*}*/


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

<div id="container"></div>

<!--  <div id="info">-->
<!--    <strong><a href="http://www.chromeexperiments.com/globe">WebGL Globe</a></strong> <span class="bull">&bull;</span> Created by the Google Data Arts Team <span class="bull">&bull;</span> Data acquired from <a href="http://sedac.ciesin.columbia.edu/gpw/">SEDAC</a>-->
<!--  </div>-->

<div id="currentInfo">
    <span id="year1990" class="year">mfNRB_tot1</span>
    <span id="year1995" class="year">efNRB_tot1</span>
<!--    <span id="year2000" class="year">2000</span>-->
</div>

<div id="titleglobe">
    Woodfuel Environmental Impacts
</div>

<!--  <a id="ce" href="http://www.chromeexperiments.com/globe">-->
<!--    <span>This is a Chrome Experiment</span>-->
<!--  </a>-->

<script type="text/javascript" src="<?php echo base_url();?>/public/app-assets/js/globe/third-party/Detector.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/public/app-assets/js/globe/third-party/three.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/public/app-assets/js/globe/third-party/Tween.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/public/app-assets/js/globe/globe.js"></script>

<script>

    /**
     * dat.globe Javascript WebGL Globe Toolkit
     * https://github.com/dataarts/webgl-globe
     *
     * Copyright 2011 Data Arts Team, Google Creative Lab
     *
     * Licensed under the Apache License, Version 2.0 (the 'License');
     * you may not use this file except in compliance with the License.
     * You may obtain a copy of the License at
     *
     * http://www.apache.org/licenses/LICENSE-2.0
     */

    var DAT = DAT || {};

    DAT.Globe = function(container, opts) {
        opts = opts || {};

        var colorFn = opts.colorFn || function(x) {
            var c = new THREE.Color();
            // as the function expects a value between 0 and 1, and red = 0° and green = 120°
            // we convert the input to the appropriate hue value
            // var hue = i * 1.2 / 360;

            // c.setHSL( ( 0.6 - ( x * 0.5 ) ), 1.0, 0.5 );
            // c.setHSL( ( 0.1 - ( x * 0.01 ) ), 1.0, 0.5 );
            c.setHSL( ((110-x)*1.2/360 ), 1.0, 0.5 );
            // c.setHSL( 0.3, 1.0, 0.3 );
            // c.setHSL( 0.01, 1.0, 0.3 );
            return c;
        };
        var imgDir = opts.imgDir || '<?php echo base_url();?>/public/app-assets/js/globe/';

        var Shaders = {
            'earth' : {
                uniforms: {
                    'texture': { type: 't', value: null }
                },
                vertexShader: [
                    'varying vec3 vNormal;',
                    'varying vec2 vUv;',
                    'void main() {',
                    'gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );',
                    'vNormal = normalize( normalMatrix * normal );',
                    'vUv = uv;',
                    '}'
                ].join('\n'),
                fragmentShader: [
                    'uniform sampler2D texture;',
                    'varying vec3 vNormal;',
                    'varying vec2 vUv;',
                    'void main() {',
                    'vec3 diffuse = texture2D( texture, vUv ).xyz;',
                    'float intensity = 1.05 - dot( vNormal, vec3( 0.0, 0.0, 1.0 ) );',
                    'vec3 atmosphere = vec3( 1.0, 1.0, 1.0 ) * pow( intensity, 3.0 );',
                    'gl_FragColor = vec4( diffuse + atmosphere, 1.0 );',
                    '}'
                ].join('\n')
            },
            'atmosphere' : {
                uniforms: {},
                vertexShader: [
                    'varying vec3 vNormal;',
                    'void main() {',
                    'vNormal = normalize( normalMatrix * normal );',
                    'gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );',
                    '}'
                ].join('\n'),
                fragmentShader: [
                    'varying vec3 vNormal;',
                    'void main() {',
                    'float intensity = pow( 0.8 - dot( vNormal, vec3( 0, 0, 1.0 ) ), 12.0 );',
                    'gl_FragColor = vec4( 1.0, 1.0, 1.0, 1.0 ) * intensity;',
                    '}'
                ].join('\n')
            }
        };

        var camera, scene, renderer, w, h;
        var mesh, atmosphere, point;

        var overRenderer;

        var curZoomSpeed = 0;
        var zoomSpeed = 50;

        var mouse = { x: 0, y: 0 }, mouseOnDown = { x: 0, y: 0 };
        var rotation = { x: 0, y: 0 },
            target = { x: Math.PI*3/2, y: Math.PI / 6.0 },
            targetOnDown = { x: 0, y: 0 };

        var distance = 100000, distanceTarget = 100000;
        var padding = 40;
        var PI_HALF = Math.PI / 2;

        var ROTATIONSPEED = 0.003;
        var k = ROTATIONSPEED;
        var f = false;


        function init() {

            container.style.color = '#fff';
            container.style.font = '13px/20px Arial, sans-serif';

            var shader, uniforms, material;
            w = container.offsetWidth || window.innerWidth;
            h = container.offsetHeight || window.innerHeight;

            camera = new THREE.PerspectiveCamera(30, w / h, 1, 10000);
            camera.position.z = distance;

            scene = new THREE.Scene();

            var geometry = new THREE.SphereGeometry(200, 40, 30);

            shader = Shaders['earth'];
            uniforms = THREE.UniformsUtils.clone(shader.uniforms);

            uniforms['texture'].value = THREE.ImageUtils.loadTexture(imgDir+'world5c.jpg');

            material = new THREE.ShaderMaterial({

                uniforms: uniforms,
                vertexShader: shader.vertexShader,
                fragmentShader: shader.fragmentShader

            });

            mesh = new THREE.Mesh(geometry, material);
            mesh.rotation.y = Math.PI;
            scene.add(mesh);

            shader = Shaders['atmosphere'];
            uniforms = THREE.UniformsUtils.clone(shader.uniforms);

            material = new THREE.ShaderMaterial({

                uniforms: uniforms,
                vertexShader: shader.vertexShader,
                fragmentShader: shader.fragmentShader,
                side: THREE.BackSide,
                blending: THREE.AdditiveBlending,
                transparent: true

            });

            mesh = new THREE.Mesh(geometry, material);
            mesh.scale.set( 1.1, 1.1, 1.1 );
            scene.add(mesh);

            geometry = new THREE.BoxGeometry(0.75, 0.75, 1);
            geometry.applyMatrix(new THREE.Matrix4().makeTranslation(0,0,-0.5));

            point = new THREE.Mesh(geometry);

            renderer = new THREE.WebGLRenderer({antialias: true});
            renderer.setSize(w, h);

            renderer.domElement.style.position = 'absolute';

            renderer.setClearColor( 0xffffff );

            container.appendChild(renderer.domElement);

            container.addEventListener('mousedown', onMouseDown, false);

            // container.addEventListener('mousewheel', onMouseWheel, false);
            container.addEventListener('wheel', onMouseWheel, false);

            document.addEventListener('keydown', onDocumentKeyDown, false);

            window.addEventListener('resize', onWindowResize, false);

            container.addEventListener('mouseover', function() {
                overRenderer = true;
            }, false);

            container.addEventListener('mouseout', function() {
                overRenderer = false;
            }, false);
        }

        function addData(data, opts) {
            var lat, lng, size, color, i, step, colorFnWrapper;

            opts.animated = opts.animated || false;
            this.is_animated = opts.animated;
            opts.format = opts.format || 'magnitude'; // other option is 'legend'
            if (opts.format === 'magnitude') {
                step = 3;
                colorFnWrapper = function(data, i) { return colorFn(data[i+2]); }
            } else if (opts.format === 'legend') {
                step = 4;
                colorFnWrapper = function(data, i) { return colorFn(data[i+3]); }
            } else {
                throw('error: format not supported: '+opts.format);
            }

            if (opts.animated) {
                if (this._baseGeometry === undefined) {
                    this._baseGeometry = new THREE.Geometry();
                    for (i = 0; i < data.length; i += step) {
                        lat = data[i];
                        lng = data[i + 1];
//        size = data[i + 2];
                        color = colorFnWrapper(data,i);
                        size = 0;
                        addPoint(lat, lng, size, color, this._baseGeometry);
                    }
                }
                if(this._morphTargetId === undefined) {
                    this._morphTargetId = 0;
                } else {
                    this._morphTargetId += 1;
                }
                opts.name = opts.name || 'morphTarget'+this._morphTargetId;
            }
            var subgeo = new THREE.Geometry();
            for (i = 0; i < data.length; i += step) {
                lat = data[i];
                lng = data[i + 1];
                color = colorFnWrapper(data,i);
                size = data[i + 2];
                // size = size*200;
                // size = size*2;
                size = size*1.2;
                addPoint(lat, lng, size, color, subgeo);
            }
            if (opts.animated) {
                this._baseGeometry.morphTargets.push({'name': opts.name, vertices: subgeo.vertices});
            } else {
                this._baseGeometry = subgeo;
            }

        };

        function createPoints() {
            if (this._baseGeometry !== undefined) {
                if (this.is_animated === false) {
                    this.points = new THREE.Mesh(this._baseGeometry, new THREE.MeshBasicMaterial({
                        color: 0xffffff,
                        vertexColors: THREE.FaceColors,
                        morphTargets: false
                    }));
                } else {
                    if (this._baseGeometry.morphTargets.length < 8) {
                        console.log('t l',this._baseGeometry.morphTargets.length);
                        var padding = 8-this._baseGeometry.morphTargets.length;
                        console.log('padding', padding);
                        for(var i=0; i<=padding; i++) {
                            console.log('padding',i);
                            this._baseGeometry.morphTargets.push({'name': 'morphPadding'+i, vertices: this._baseGeometry.vertices});
                        }
                    }
                    this.points = new THREE.Mesh(this._baseGeometry, new THREE.MeshBasicMaterial({
                        color: 0xffffff,
                        vertexColors: THREE.FaceColors,
                        morphTargets: true
                    }));
                }
                scene.add(this.points);
            }
        }

        function addPoint(lat, lng, size, color, subgeo) {

            var phi = (90 - lat) * Math.PI / 180;
            var theta = (180 - lng) * Math.PI / 180;

            point.position.x = 200 * Math.sin(phi) * Math.cos(theta);
            point.position.y = 200 * Math.cos(phi);
            point.position.z = 200 * Math.sin(phi) * Math.sin(theta);

            point.lookAt(mesh.position);

            point.scale.z = Math.max( size, 0.1 ); // avoid non-invertible matrix
            point.updateMatrix();

            for (var i = 0; i < point.geometry.faces.length; i++) {

                point.geometry.faces[i].color = color;

            }
            if(point.matrixAutoUpdate){
                point.updateMatrix();
            }
            subgeo.merge(point.geometry, point.matrix);
        }

        function onMouseDown(event) {
            event.preventDefault();

            k = 0;
            f = true;

            container.addEventListener('mousemove', onMouseMove, false);
            container.addEventListener('mouseup', onMouseUp, false);
            container.addEventListener('mouseout', onMouseOut, false);

            mouseOnDown.x = - event.clientX;
            mouseOnDown.y = event.clientY;

            targetOnDown.x = target.x;
            targetOnDown.y = target.y;

            container.style.cursor = 'move';
        }

        function onMouseMove(event) {
            mouse.x = - event.clientX;
            mouse.y = event.clientY;

            var zoomDamp = distance/1000;

            target.x = targetOnDown.x + (mouse.x - mouseOnDown.x) * 0.005 * zoomDamp;
            target.y = targetOnDown.y + (mouse.y - mouseOnDown.y) * 0.005 * zoomDamp;

            target.y = target.y > PI_HALF ? PI_HALF : target.y;
            target.y = target.y < - PI_HALF ? - PI_HALF : target.y;
        }

        function onMouseUp(event) {

            k = ROTATIONSPEED;
            f = false;
            container.removeEventListener('mousemove', onMouseMove, false);
            container.removeEventListener('mouseup', onMouseUp, false);
            container.removeEventListener('mouseout', onMouseOut, false);
            container.style.cursor = 'auto';
        }

        function onMouseOut(event) {
            container.removeEventListener('mousemove', onMouseMove, false);
            container.removeEventListener('mouseup', onMouseUp, false);
            container.removeEventListener('mouseout', onMouseOut, false);
        }

        function onMouseWheel(event) {
            event.preventDefault();
            // console.log(event);
            if (overRenderer) {
                zoom(event.wheelDeltaY * 0.3);
            }
            return false;
        }

        function onDocumentKeyDown(event) {
            switch (event.keyCode) {
                case 38:
                    zoom(100);
                    event.preventDefault();
                    break;
                case 40:
                    zoom(-100);
                    event.preventDefault();
                    break;
            }
        }

        function onWindowResize( event ) {
            windowHalfX = window.innerWidth / 2;
            windowHalfY = window.innerHeight / 2;

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize( window.innerWidth, window.innerHeight );

            // camera.aspect = container.offsetWidth / container.offsetHeight;
            // camera.updateProjectionMatrix();
            // renderer.setSize( container.offsetWidth, container.offsetHeight );
        }

        function zoom(delta) {
            distanceTarget -= delta;
            distanceTarget = distanceTarget > 1000 ? 1000 : distanceTarget;
            distanceTarget = distanceTarget < 350 ? 350 : distanceTarget;
        }

        function animate() {
            requestAnimationFrame(animate);
            render();
        }

        function render() {
            zoom(curZoomSpeed);

            target.x -= k;

            rotation.x += (target.x - rotation.x) * 0.2;

            if (f == true){
                rotation.y += (target.y - rotation.y) * 0.2;}
            if (f == false){
                target.y = Math.PI / 5.0;
                rotation.y += (target.y - rotation.y) * 0.02;
            };

            distance += (distanceTarget - distance) * 0.3;

            camera.position.x = distance * Math.sin(rotation.x) * Math.cos(rotation.y);
            camera.position.y = distance * Math.sin(rotation.y);
            camera.position.z = distance * Math.cos(rotation.x) * Math.cos(rotation.y);

            camera.lookAt(mesh.position);

            renderer.render(scene, camera);
        }

        init();
        this.animate = animate;


        this.__defineGetter__('time', function() {
            return this._time || 0;
        });

        this.__defineSetter__('time', function(t) {
            var validMorphs = [];
            var morphDict = this.points.morphTargetDictionary;
            for(var k in morphDict) {
                if(k.indexOf('morphPadding') < 0) {
                    validMorphs.push(morphDict[k]);
                }
            }
            validMorphs.sort();
            var l = validMorphs.length-1;
            var scaledt = t*l+1;
            var index = Math.floor(scaledt);
            for (i=0;i<validMorphs.length;i++) {
                this.points.morphTargetInfluences[validMorphs[i]] = 0;
            }
            var lastIndex = index - 1;
            var leftover = scaledt - index;
            if (lastIndex >= 0) {
                this.points.morphTargetInfluences[lastIndex] = 1 - leftover;
            }
            this.points.morphTargetInfluences[index] = leftover;
            this._time = t;
        });

        this.addData = addData;
        this.createPoints = createPoints;
        this.renderer = renderer;
        this.scene = scene;

        return this;

    };



    if(!Detector.webgl){
        Detector.addGetWebGLMessage();
    } else {

        var years = ['1990','1995'];
        var container = document.getElementById('container');
        var globe = new DAT.Globe(container);

        console.log(globe);
        var i, tweens = [];

        var settime = function(globe, t) {
            return function() {
                new TWEEN.Tween(globe).to({time: t/years.length},500).easing(TWEEN.Easing.Cubic.EaseOut).start();
                var y = document.getElementById('year'+years[t]);
                if (y.getAttribute('class') === 'year active') {
                    return;
                }
                var yy = document.getElementsByClassName('year');
                for(i=0; i<yy.length; i++) {
                    yy[i].setAttribute('class','year');
                }
                y.setAttribute('class', 'year active');
            };
        };

        for(var i = 0; i<years.length; i++) {
            var y = document.getElementById('year'+years[i]);
            y.addEventListener('mouseover', settime(globe,i), false);
        }

        var xhr;
        TWEEN.start();


        xhr = new XMLHttpRequest();
        // xhr.open('GET', 'globe/population909500.json', true);
        xhr.open('GET', '<?php echo base_url();?>/public/app-assets/js/globe/globedata.json', true);
        xhr.onreadystatechange = function(e) {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    window.data = data;
                    for (i=0;i<data.length;i++) {
                        globe.addData(data[i][1], {format: 'magnitude', name: data[i][0], animated: true});
                    }
                    globe.createPoints();
                    settime(globe,0)();
                    globe.animate();
                    document.body.style.backgroundImage = 'none'; // remove loading
                }
            }
        };
        xhr.send(null);
    }



</script>

</body>
</html>
