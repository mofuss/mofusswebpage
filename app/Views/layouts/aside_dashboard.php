
<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">






    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li >
            <!--            <a  href="#" ><img class="hide-on-med-and-down center-align" src="--><?php //echo base_url();?><!--/public/app-assets/images/mofuss/mofuss.png" alt="mofuss logo"  style="margin-left: -20px; padding: 0; width: 64px;"/></a>-->
            <div class="sidenav-collapsible collapsible sidenav-fixed menu-shadow center-align" >
                <a href="<?php echo base_url();?>/">
                    <img  src="<?php echo base_url();?>/public/app-assets/images/mofuss/mofuss.png" alt="Mofuss" width="64px">
                </a>

            </div>

        </li>

        <li>
            <div class="sidenav-collapsible collapsible sidenav-fixed menu-shadow center-align" >
                <a href="<?php echo base_url();?>/webmofuss">
                    <img id="logo" src="<?php echo base_url();?>/public/app-assets/images/avatar/<?php echo $country_code; ?>.png" alt="Country" width="64px">
                    <div class="col s12 center-align menu-option-text">
                        <span style="color: white"><?php echo $name; ?></span>
                    </div>
                </a>
            </div>
        </li>

        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#select-modal" ><i class="material-icons">content_cut</i><span class="menu-title" data-i18n="Documentation">SELECT AREA</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#hagg-modal"><i class="material-icons">border_clear</i><span class="menu-title" data-i18n="Documentation">HAGG</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#crop-locs-modal" ><i class="material-icons">crop</i><span class="menu-title" data-i18n="Documentation">CROP LOCS</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#friction-modal" ><i class="material-icons">map</i><span class="menu-title" data-i18n="Documentation">FRICTION MAP</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#cost-distance-modal" ><i class="material-icons">straighten</i><span class="menu-title" data-i18n="Documentation">COST DISTANCE ANALYSIS</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#" ><i class="material-icons">collections</i><span class="menu-title" data-i18n="Documentation">AVAILABLE DATASETS</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan" href="#" ><i class="material-icons">history</i><span class="menu-title" data-i18n="Documentation">HISTORY</span></a></li>
        <div class="divider"></div>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#charts-modal" ><i class="material-icons">insert_chart</i><span class="menu-title" data-i18n="Documentation">CHARTS</span></a></li>
        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#tables-modal" ><i class="material-icons">view_module</i><span class="menu-title" data-i18n="Documentation">TABLES</span></a></li>
        <div class="divider"></div>
        <!--                <li class="bold"><a class="waves-effect waves-cyan sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">layers</i><span class="menu-title" data-i18n="Support">LAYERS</span></a></li>-->
<!--        <li class="active bold"><a class="waves-effect waves-cyan modal-trigger" href="#loading-modal" ><i class="material-icons">query_builder</i><span class="menu-title" data-i18n="Documentation">PROCESSES RUNNING</span></a></li>-->
        <li class="bold"><a class="waves-effect waves-cyan " href="#" ><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">SUPPORT</span></a></li>

        <li class="bold"><a class="waves-effect waves-cyan toggle-fullscreen" href="#" ><i class="material-icons">settings_overscan</i><span class="menu-title" data-i18n="Support">FULL SCREEN</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan sidenav-trigger" href="#" ><i class="material-icons">account_circle</i><span class="menu-title" data-i18n="Support">LOGOUT</span></a></li>

    </ul>


    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only green" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->


