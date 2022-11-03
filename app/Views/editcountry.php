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

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
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
<div class="header">
    <div class="navbar-fixed">
        <nav class="navbar-top">
            <div class="nav-wrapper">
                <a href="/" class="logo-mofuss-home active" aria-current="true"><img class="logo-mofuss-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/logoMofuss1.jpg" alt="Mofuss"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>/webmofuss">Home</a></li>
                    <li><a href="#container-about">About</a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownDocs">Docs<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownDatasets">Data<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownCode">Code<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownSubcountries">Case studies<i class="material-icons right">arrow_drop_down</i></a></li>

                    <!--edgar hidden-->
                    <li ><a class="dropdown-trigger" href="#!" data-target="dropdownSubconfigure">Configure<i class="material-icons right">arrow_drop_down</i></a></li>

                </ul>
            </div>
        </nav>

        <!--ul class="sidenav" id="mobile-demo">
                    <li><a class="white-text" href="#container-about">About</a></li>

                    <li><a class="dropdown-trigger white-text" href="#!" data-target="dropdownDocs">Docs<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownDatasets">Data<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownCode">Code<i class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a class="dropdown-trigger" href="#!" data-target="dropdownSubcountries">Case studies<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul-->
    </div>
</div>

<!-- Dropdown Structure -->
<ul id="dropdownSubcountries" class="dropdown-content">
    <li><a href="/platform/country/H1" onclick="setCookies('H1','SantaBarbara')">Santa Bárbara, Honduras</a></li>
    <li><a href="/platform/country/I1" onclick="setCookies('I1','Koppal')">Koppal, KA, India</a></li>
    <li><a href="/platform/country/M1" onclick="setCookies('M1','Mulanje')">Mulanje Mountain, Malawi</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdownDocs" class="dropdown-content">
    <li><a href= "http://132.247.186.48/assetsHome/pdfsAdrian/ijgi-08-00245.pdf">User manual</a></li>
    <li><a href= "http://132.247.186.48/assetsHome/pdfsAdrian/ijgi-08-00245.pdf">Most recent publication</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdownDatasets" class="dropdown-content">
    <li><a href= "http://132.247.186.48/assets/datasets/SourceDataHaiti-20191126T232908Z-001.zip">Haití</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdownCode" class="dropdown-content">
    <li><a href= "https://gitlab.com/mofuss/mofuss">MoFuSS repository</a></li>
</ul>


<!-- Dropdown Configure -->
<ul id="dropdownSubconfigure" class="dropdown-content">
    <li><a href="/configure" >Countries</a></li>
</ul>


<div id="parallax-selector" class="parallax-container top valign-wrapper">
    <div class="container" center-align="center">

        <div class="col m6 s12">
            <div class="col s12 white-text">
                <h3 class="green-text text-lighten-2">Web based MoFuSS</h3>
                <h5 blue-text lighten-2 >Modeling Fuelwood Savings Scenarios</h5>
            </div>
        </div>
        <!--div class="col m6 s12">
            <div class="home-video-wrapper" center-align="right">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/0XsJNU75Si0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div-->
    </div>
    <div class="parallax">
        <img class="parallax-img" src="<?php echo base_url();?>/public/app-assets/images/mofuss/firewood-dark.jpg" >
    </div>
</div>



<div  class="container">
    <div id="title-countries" class="center">
        <h3 class="titles">
            <strong>Country settings</strong>
        </h3>
        <p>
            In this section, the parameters selected for each can be modified as required.
        </p>


    </div>

</div>

<div  class="container">
    <div id="title-countries" class="center">
        <h3 class="titles">
            <strong>Settings for <?php echo $name;?></strong>
        </h3>

        <form  action="<?php echo base_url();?>/webmofuss/updatecountry" method="POST" >

            <div class="row">
                <input type="hidden" value="<?php echo $id;?>" id="id" name="id">
                <input type="hidden" value="<?php echo $name;?>" id="name" name="name">
                <div class="input-field">
                    <input placeholder=""
                           id="latitude" name="latitude" type="text" class="validate" value="<?php echo $latitude;?>">
                    <label for="latitude">Latitude:</label>
                </div>

                <div class="search input-field">
                    <input placeholder=""
                           id="longitude" name="longitude" type="text" class="validate" value="<?php echo $longitude;?>">
                    <label for="longitude">Longitude:</label>
                </div>

                <div class="input-field col s12">
                    <select id="tier" name="tier">
                        <?php $tier=str_replace(' ', '', $tier);?>
                        <?php if($tier=='1'):?>
                        <option selected value='1'>Tier 1</option>
                        <option value='2'>Tier 2</option>
                        <option value='3'>Tier 3</option>
                        <?php elseif($tier=='2'):?>
                        <option value='1'>Tier 1</option>
                        <option selected value='2'>Tier 2</option>
                        <option value='3'>Tier 3</option>
                        <?php elseif($tier=='3'):?>
                        <option value='1'>Tier 1</option>
                        <option value='2'>Tier 2</option>
                        <option selected value='3'>Tier 3</option>
                        <?php endif;?>
                    </select>
                    <label for="Tier" >Tier</label>
                </div>

                <div class="input-field col s12">
                    <select id="zoom" name="zoom">
                        <?php if($zoom=='6'):?>
                        <option selected value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <?php elseif($zoom=='7'):?>
                        <option value='6'>6</option>
                        <option selected value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <?php elseif($zoom=='8'):?>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option selected value='8'>8</option>
                        <option value='9'>9</option>
                        <?php elseif($zoom=='9'):?>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option selected value='9'>9</option>
                        <?php endif;?>
                    </select>
                    <label for="zoom" >Zoom</label>
                </div>

                <div class="input-field col s12">
                    <select id="visible" name="visible">
                        <?php if($visible=='t'):?>
<!--                            <option selected value='true'>Yes</option>-->
<!--                            <option value='false'>No</option>-->
                        <option selected value='t'>Yes</option>
                        <option value='f'>No</option>
                        <?php elseif($visible=='f'):?>
<!--                        <option value='true'>Yes</option>-->
<!--                        <option selected value='false'>No</option>-->
                            <option value='t'>Yes</option>
                            <option selected value='f'>No</option>
                        <?php endif;?>
                    </select>
                    <label for="visible" >Visibility</label>
                </div>
            </div>

            <div class="row">
                <div class="col s12 right-align">
                    <button type="submit" class="btn green darken-3">
                        Update
                    </button>
                </div>
            </div>

        </form>


    </div>

</div>



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
                        <a href="https://unfccc.int/ " target="blank" class="green-text text-lighten-1">UNFCCC</a>
                    </li>
                    <li>
                        <a href="https://www.goldstandard.org/" target="blank" class="green-text text-lighten-1">GS</a>
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
            © UNAM 2019 Copyright.
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


<script src="<?php echo base_url();?>/public/app-assets/js/scripts/form-elements.js"></script>


<script>


    window.onload = function() {

        // map.dataProvider.areas.push({"id": "HN", "color": "#FFC107"});
        // map.dataProvider.areas.push({"id": "KE", "color": "#2E7032"});
        // map.dataProvider.areas.push({"id": "HT", "color": "#2E7032"});
        // map.dataProvider.areas.push({"id": "PE", "color": "#990000"});
        map.dataProvider.areas.push({"id": "ZM", "color": "#990000"});
        map.validateData();


        map.addListener("clickMapObject", function (event) {
            countryName = event.mapObject.title;
            countryID = event.mapObject.id;

            // setCookie(country, countryName);
            // setCookieID(id, countryID);


            location.href = "<?php echo base_url();?>/dashboard/country/" + countryID;
        }); //// set method for country name
    };


</script>

</body>
</html>
