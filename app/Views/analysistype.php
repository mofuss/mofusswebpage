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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/hover-effects/media-hover-effects.css">


    <style>

/**/
/*        body {*/
/*            margin: 0;*/
/*            background: #D1EBD4;*/
/*            overflow: hidden;*/
/*            text-align: center;*/
/*            height: 100vh;*/
/*        }*/
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

    </style>



</head>


<body class="frontend-index">
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>/webmofuss">Return</a></li>
                    <li><a class="waves-effect waves-cyan modal-trigger" href="#typeanalysis-modal" >Select</a></li>


                </ul>
            </div>
        </nav>

    </div>
</div>



<!--<div >-->
<!--    <img  style="height: 100%; overflow: hidden"  src="--><?php //echo base_url();?><!--/public/app-assets/images/mofuss/firewood-dark.jpg" >-->
<!--</div>-->



<div class='forest'>
    <img class='p1' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_1.svg'>
    <img class='p2' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_2.svg'>
    <img class='p3' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_3.svg'>
    <img class='p4' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_4.svg'>
    <img class='p5' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_5.svg'>
    <img class='p6' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/forest_6.svg'>
</div>

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>

<!--<script defer src="http://132.247.186.48/js/frontend/app.js"></script>-->
<!--<script defer src="--><?php //echo base_url();?><!--/public/app-assets/js/custom/analysistype.js"></script>-->


<script>

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
            piece1.attr("style", "transform:translateX(" + -(ax/16) + "px)");
            piece2.attr("style", "transform:translateX(" + ax/16 + "px)");
            piece3.attr("style", "transform:translateX(" + -(ax/15) + "px)");
            piece4.attr("style", "transform:translateX(" + ax/15 + "px)");
            piece5.attr("style", "transform:translateX(" + -(ax/14) + "px)");
            piece6.attr("style", "transform:translateX(" + ax/13 + "px)");
        } else {
            reset();
        }
    });


</script>



</body>
</html>
