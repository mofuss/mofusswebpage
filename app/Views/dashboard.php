<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Web version of MoFuSS tool.">
    <meta name="keywords" content="UNAM, Web, MoFuSS, ENES, CIGA">
    <meta name="author" content="UNAM">
    <title>MOFUSS WEB</title>
    <link rel="apple-touch-icon" href="<?php echo base_url();?>/public/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/public/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
            <div class="nav-wrapper">
<!--                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>-->
<!--                    <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">-->
<!--                    <ul class="search-list collection display-none"></ul>-->
<!--                </div>-->
                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                    <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                </ul>


                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form id="navbarForm">
                        <div class="input-field search-input-sm">
                            <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                            <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                            <ul class="search-list collection search-list-sm display-none"></ul>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>
<!-- END: Header-->



<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="<?php echo base_url();?>/public/app-assets/images/mofuss/mofuss.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo base_url();?>/public/app-assets/images/logo/materialize-logo-color.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Mofuss</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">pages</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="active"><a class="active" href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-cyan" href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url();?>/public/app-assets/images/gallery/breadcrumb-bg.jpg">

        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi consectetur consequatur dolore doloremque dolorum, ducimus labore laudantium mollitia non numquam pariatur placeat quas quasi recusandae saepe similique tempore, totam?
                            </p>
                        </div>
                    </div>
                </div><!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">
                    <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                        <div class="row">
                            <div class="slide-out-right-title">
                                <div class="col s12 border-bottom-1 pb-0 pt-1">
                                    <div class="row">
                                        <div class="col s2 pr-0 center">
                                            <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a href="#messages" class="active">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#activity">
                                                        <span>Activity</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-out-right-body row pl-3">
                                <div id="messages" class="col s12 pb-0">
                                    <div class="collection border-none mb-0">
                                        <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                        <ul class="collection right-sidebar-chat p-0 mb-0">
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Mary Adams</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-2.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-3.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.00 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-4.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">June Lane</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-5.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Edward Fletcher</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.15 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-6.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Crystal Bates</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                </div>
                                                <span class="secondary-content medium-small">8.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Nathan Watts</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.53 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-8.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Willard Wood</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.20 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Ronnie Ellis</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.20 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-9.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Daniel Russell</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                </div>
                                                <span class="secondary-content medium-small">12.00 AM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-10.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Sarah Graves</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                </div>
                                                <span class="secondary-content medium-small">11.14 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-11.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Andrew Hoffman</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                </div>
                                                <span class="secondary-content medium-small">7.30 PM</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-12.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Camila Lynch</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                </div>
                                                <span class="secondary-content medium-small">2.00 PM</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show Task statistics</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Show your emails</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Email Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>System Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Error Reporting</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Applications Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Backup Servers</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>Audit Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="activity" class="col s12">
                                    <div class="activity">
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">Today</div>
                                                <h6 class="timeline-title">Homepage mockup design</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content orange-text">Important</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">10 min</div>
                                                <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content green-text">Resolved</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red active">
                                                <div class="timeline-time">30 mins</div>
                                                <h6 class="timeline-title">12 new users registered</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="<?php echo base_url();?>/public/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-indigo active">
                                                <div class="timeline-time">2 Hrs</div>
                                                <h6 class="timeline-title">Tina is attending your activity</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="<?php echo base_url();?>/public/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-orange">
                                                <div class="timeline-time">5 hrs</div>
                                                <h6 class="timeline-title">Josh is now following you</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content red-text">Pending</div>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">Just now</div>
                                                <h6 class="timeline-title">New order received urgent</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content orange-text">Important</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">05 min</div>
                                                <h6 class="timeline-title">System shutdown.</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content blue-text">Urgent</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red">
                                                <div class="timeline-time">20 mins</div>
                                                <h6 class="timeline-title">Database overloaded 89%</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content">
                                                    <img src="<?php echo base_url();?>/public/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">10 min</div>
                                                <h6 class="timeline-title">System error</h6>
                                                <p class="timeline-text">Melissa liked your activity.</p>
                                                <div class="timeline-content red-text">Error</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan">
                                                <div class="timeline-time">1 min</div>
                                                <h6 class="timeline-title">Production server down.</h6>
                                                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                <div class="timeline-content blue-text">Urgent</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Out Chat -->
                    <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                            <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                        </li>
                        <li class="chat-body">
                            <ul class="collection">
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">hello!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">How can we help? We're here for you!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I am looking for the best admin template.?</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>8:20 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! very nice</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">How can I purchase it?</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>9:00 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">From ThemeForest.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Only $24</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                        </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I will purchase it for sure.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Great, Feel free to get in touch on</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="center-align chat-footer">
                            <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                <div class="input-field">
                                    <input id="icon_prefix" type="text" class="search" />
                                    <label for="icon_prefix">Type here..</label>
                                    <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main-->


<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?php echo base_url();?>/public/app-assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/search.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/custom/custom-script.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>

</html>