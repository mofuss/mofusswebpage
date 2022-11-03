
<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">






    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
<!--        <li >-->
<!--            <div class="sidenav-collapsible collapsible sidenav-fixed menu-shadow center-align" >-->
<!--                <a href="--><?php //echo base_url();?><!--/">-->
<!--                    <img  src="--><?php //echo base_url();?><!--/public/app-assets/images/mofuss/mofuss.png" alt="Mofuss" width="64px">-->
<!--                </a>-->
<!--            </div>-->
<!--        </li>-->

        <li>
            <div class="sidenav-collapsible collapsible sidenav-fixed menu-shadow center-align   " >
                <div class="logodash-small">
                    <a href="<?php echo base_url();?>/webmofussmain">
                        <img  src="<?php echo base_url();?>/public/app-assets/images/mofuss/mofuss.png" alt="Mofuss" width="64px">
                    </a>
                </div>
                <div class="logodash-large">
                    <a href="<?php echo base_url();?>/webmofussmain">
                        <img  src="<?php echo base_url();?>/public/app-assets/images/mofuss/mofuss-large3.png" alt="Mofuss" width="250px">
                    </a>
                </div>
            </div>
        </li>

        <li>
            <div class="sidenav-collapsible collapsible sidenav-fixed menu-shadow center-align" >
                <a href="<?php echo base_url();?>/countrydefault">
                    <img id="logo" src="<?php echo base_url();?>/public/app-assets/images/avatar/<?php echo $country_code; ?>.png" alt="Country" width="64px">
                    <div class="col s12 center-align menu-option-text">
                        <span style="color: white"><?php echo $name; ?></span>
                    </div>
                </a>
            </div>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan" id="veranalyze" ><i class="material-icons">crop</i><span class="menu-title" data-i18n="Documentation">Area of analysis</span></a></li>
        <li class=" bold"><a class="waves-effect waves-cyan" id="vernrb"><i class="material-icons">adjust</i><span class="menu-title" data-i18n="Documentation">Non-renewable Biomass</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan" id="verconnrb" ><i class="material-icons">adjust</i><span class="menu-title" data-i18n="Documentation">Consumption NRB</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan" id="vercontot" ><i class="material-icons">adjust</i><span class="menu-title" data-i18n="Documentation">Total consumption</span></a></li>
        <div class="divider"></div>



        <li class="bold"><a class="waves-effect waves-cyan toggle-fullscreen" href="#" ><i class="material-icons">settings_overscan</i><span class="menu-title" data-i18n="Support">Full screen</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan modal-trigger" href="#support-modal" ><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a></li>
<!--        <li class="bold"><a class="waves-effect waves-cyan sidenav-trigger" href="#" ><i class="material-icons">account_circle</i><span class="menu-title" data-i18n="Support">LOGOUT</span></a></li>-->

    </ul>


    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only green" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->


