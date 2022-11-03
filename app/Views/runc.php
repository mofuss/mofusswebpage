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


    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url();?><!--/public/app-assets/css/pages/advance-ui-media.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url();?><!--/public/app-assets/css-rtl/custom/custom.css">-->

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
            fill:#ff0d5f;
        }
        .titles {
            color: #2E7D32;
        }
        .cardmenu1, .cardmenu2, .cardmenu3 {
            border: 1px solid transparent;
        }

        .cardmenu1:hover {
            background-color: #f88e86;
            transition:background-color 1s, border 1.5s;
        }

        .cardmenu2:hover {
            background-color: #ffd96a;
            transition:background-color 1s, border 1.5s;
        }
        .cardmenu3:hover {
            background-color: #d4eac3;
            transition:background-color 1s, border 1.5s;
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
<!--<body >-->
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>/webmofuss">Home</a></li>
                    <!--                    <li><a href="--><?php //echo base_url();?><!--/webmofussmain">Web-based mofuss</a></li>-->
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




<div id="title-countries" class="center"   style="margin: 15px;">
    <h4 class="titles">
        <strong>Executing Code</strong>
    </h4>
<!--    <p class="text-size-14">-->
<!--        Please upload the files required.-->
<!--    </p>-->

</div>


<div class="row">
    <div class="col s12">

        <?php foreach ($errors as $error): ?>
            <!--    <li>--><?//= esc($error) ?><!--</li>-->
            <div class="card-alert card red">
                <div class="card-content white-text">
                    <p><?= esc($error) ?></p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- File Input -->
<form action="<?php echo base_url();?>/runc/uploadfiles" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col s12">
            <div id="file-input" class="card">
                <div class="card-content">
                    <!--                        <div class="card-title">-->
                    <!--                            <div class="row">-->
                    <!--                                <div class="col s12 m6 l10">-->
                    <!--                                    <h3 class="card-title">Input Files</h3>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="input-field col s12">-->
                    <!--                            <input id="nombre" name="nombre" type="text">-->
                    <!--                            <label for="last_name" class="">Process name</label>-->
                    <!--                        </div>-->

                    <h6>First File</h6>
                    <p>Geotiff is the only supported format for this file.</p>
                    <div class="file-field input-field">
                        <div class="btn" >
                            <span>File</span>
                            <input type="file" id="userfile1" name="userfile1">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" >
                        </div>
                    </div>
                    <div class="card-alert card green lighten-5 card-uploaded">
                        <div class="card-content green-text">
                            <p>File already uploaded.</p>
                        </div>
                    </div>

                    <h6>Second File</h6>
                    <p>Geotiff is the only supported format for this file.</p>
                    <div class="file-field input-field">
                        <div class="btn" >
                            <span>File</span>
                            <input type="file" id="userfile2" name="userfile2">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" >
                        </div>
                    </div>
                    <div class="card-alert card green lighten-5 card-uploaded">
                        <div class="card-content green-text">
                            <p>File already uploaded.</p>
                        </div>
                    </div>

                    <!--                        <div class="col s12 mt-2">-->
                    <!--                            <div class="material-placeholder" style=""><img class="materialboxed" src="--><?php //echo base_url().'/writable/uploads/file1.png';?><!--" alt="sample" data-caption="A picture of some deer and tons of trees" width="250"></div>-->
                    <!--                        </div>-->

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light mb-1" id="btnUpload" type="submit" >Upload files
                                <i class="material-icons right">send</i>
                            </button>
                            <button class="waves-effect waves-light btn  green mb-1" id="btnExecute">
                                <i class="material-icons right">gps_fixed</i> Execute</button>
                            <button class="waves-effect waves-light btn orange mb-1" id="btnDownload">
                                <i class="material-icons right">download</i> Download</button>
                            <button class="waves-effect waves-light btn blue mb-1" id="btnRestart">
                                <i class="material-icons right">autorenew</i> Restart</button>
                        </div>
                    </div>



                    <div id="view-indeterminate-linear">
                        <div class="row">
                            <div class="col s12">
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</form>





<!-- Footer -->
<footer class="page-footer">
    <div class="footer-copyright" >
        <div class="container center">
            © UNAM 2022 Copyright.
        </div>
    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/scripts/ui-alerts.js"></script>
<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/scripts/advance-ui-media.js"></script>-->

<script>

    var status=<?php echo $status ?>;

    function executetask(){
        $.ajax({
            url   : '<?php echo base_url();?>/runc/executetask',
            async : true
        }).done(function() {
            console.log('listo');
            $("#view-indeterminate-linear").hide();
            // $( "#btnUpload" ).prop( "disabled", true ); //Disable
            $( "#btnExecute" ).prop( "disabled", true ); //Disable
            $( "#btnDownload" ).prop( "disabled", false ); //Disable

        });
    }

    $(document).ready(function () {

        if (status==0){
            console.log(status);
            $( "#btnUpload" ).prop( "disabled", false ); //Disable
            $( "#btnExecute" ).prop( "disabled", true ); //Disable
            $( "#btnDownload" ).prop( "disabled", true ); //Disable
            $("#view-indeterminate-linear").hide();
            $( ".card-uploaded" ).hide();

        } else if (status==1){
            console.log(status);
            $( "#btnUpload" ).prop( "disabled", true ); //Disable
            $( "#btnExecute" ).prop( "disabled", false ); //Disable
            $( "#btnDownload" ).prop( "disabled", true ); //Disable
            $( ".file-field" ).hide();

            $("#view-indeterminate-linear").hide();
        }

        $( "#btnRestart" ).click(function(event) {
            event.preventDefault();
            window.location.href = "<?php echo base_url().'/runc/restart';?>";
        });

        $( "#btnExecute" ).click(function(event) {
            event.preventDefault();
            //window.location.href = "<?php //echo base_url().'/runc/executetask';?>//";
            executetask();
        });

        $( "#btnDownload" ).click(function(event) {
            event.preventDefault();
            window.open("<?php echo base_url().'/writable/uploads/output.zip';?>", '_blank');
        });




    })

</script>

</body>
</html>
