
<!-- BEGIN: Page Main-->
<div id="main" >
    <div class="row"  >
<!--        <div id="breadcrumbs-wrapper" data-image="--><?php //echo base_url();?><!--/public/app-assets/images/gallery/breadcrumb-bg.jpg">-->
<!---->
<!--        </div>-->

<!--            <div class="container">-->
        <div id='map'></div>
<!--            </div>-->
        <div class="calculation-box" id="calculation-box">
            <p><span id="polselected">There is no polygon selected</span></p>
            <div id="calculated-area"></div>
        </div>



        <div class="col s12">
            <div class="container">

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
                                                    <a href="#messages" >
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings" class="active">
                                                        <span>LAYERS</span>
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
                                        <ul class="collection right-sidebar-chat p-0 mb-0">
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/ZM.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Zambia</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Data Available</p>
                                                </div>
                                                <span class="secondary-content medium-small">07/02/2020</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/HT.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Haiti</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Data Available</p>
                                                </div>
                                                <span class="secondary-content medium-small">07/02/2020</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="<?php echo base_url();?>/public/app-assets/images/avatar/PE.png" alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">PERU</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Soon Available</p>
                                                </div>
                                                <span class="secondary-content medium-small">07/02/2020</span>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
<!--                                <div id="settings" class="col s12">-->
<!--                                    <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">LAYERS</p>-->
<!--                                    <ul class="collection border-none">-->
<!---->
<!---->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Country polygon</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input checked id="layer1" type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="row">-->
<!--                                                <div class="col s12 center-align">-->
<!--                                                    <span style="font-size: x-small">Opacity</span>-->
<!--                                                </div>-->
<!--                                                <div class="col s12">-->
<!--                                                    <input type="range" id="range_01">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="divider"></div>-->
<!--                                        </li>-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Tree Cover (Zambia)</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input id="layer2" type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="row">-->
<!--                                                <div class="col s12 center-align">-->
<!--                                                    <span style="font-size: x-small">Opacity</span>-->
<!--                                                </div>-->
<!--                                                <div class="col s12">-->
<!--                                                    <input type="range" id="range_02">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="divider"></div>-->
<!--                                        </li>-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Loss Year (Zambia)</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input id="layer3"  type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="row">-->
<!--                                                <div class="col s12 center-align">-->
<!--                                                    <span style="font-size: x-small">Opacity</span>-->
<!--                                                </div>-->
<!--                                                <div class="col s12">-->
<!--                                                    <input type="range" id="range_03">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="divider"></div>-->
<!--                                        </li>-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Gain (Zambia)</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input id="layer4"  type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="row">-->
<!--                                                <div class="col s12 center-align">-->
<!--                                                    <span style="font-size: x-small">Opacity</span>-->
<!--                                                </div>-->
<!--                                                <div class="col s12">-->
<!--                                                    <input type="range" id="range_04">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="divider"></div>-->
<!--                                        </li>-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Layer 4</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!---->
<!--                                    </ul>-->
<!--                                    <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SECONDARY SETTINGS</p>-->
<!--                                    <ul class="collection border-none">-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Layer 1</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="collection-item border-none">-->
<!--                                            <div class="m-0">-->
<!--                                                <span>Layer 2</span>-->
<!--                                                <div class="switch right">-->
<!--                                                    <label>-->
<!--                                                        <input type="checkbox" />-->
<!--                                                        <span class="lever"></span>-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!---->
<!--                                     </ul>-->
<!--                                </div>-->
                                <div id="activity" class="col s12">
                                    <div class="activity">
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">Today</div>
                                                <h6 class="timeline-title">XXX</h6>
                                                <p class="timeline-text">XXXX.</p>
                                                <div class="timeline-content orange-text">Important</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">10 min</div>
                                                <h6 class="timeline-title">XXXX.</h6>
                                                <p class="timeline-text">XXX.</p>
                                                <div class="timeline-content green-text">Resolved</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-orange">
                                                <div class="timeline-time">5 hrs</div>
                                                <h6 class="timeline-title">XXX</h6>
                                                <p class="timeline-text">XXX.</p>
                                                <div class="timeline-content red-text">Pending</div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
                <div style="bottom: 50px; right: 19px;"   class="fixed-action-btn direction-top"><a id="processing_button" class="btn-floating btn-large <?php echo $processing_button_color; ?> modal-trigger" href="#loading-modal"><i class="material-icons">add_alert</i></a>
<!--                    <ul>-->
<!--                        <li><a href="#" class="btn-floating blue"><i class="material-icons">adjust</i></a></li>-->
<!--                        <li><a href="#" class="btn-floating green"><i class="material-icons">crop_din</i></a></li>-->
<!--                        <li><a href="#" class="btn-floating amber"><i class="material-icons">filter_none</i></a></li>-->
<!--                        <li><a href="#" class="btn-floating red"><i class="material-icons">rotate_right</i></a></li>-->
<!--                    </ul>-->




                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

</div>
<!-- END: Page Main-->


<div id="modal-layers" class="modal bottom-sheet" style="font-size: smaller">
    <div class="modal-content">
<!--        <h4>Modal Header</h4>-->
        <div id="settings" class="col s12">
            <p class="setting-header  font-weight-900">LAYERS</p>
            <ul class="collection border-none">


                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Country polygon</span>
                        <div class="switch right">
                            <label>
                                <input checked id="layer1" type="checkbox" />
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 center-align">
                            <span style="font-size: x-small">Opacity</span>
                        </div>
                        <div class="col s12">
                            <input type="range" id="range_01">
                        </div>
                    </div>
                    <div class="divider"></div>
                </li>
                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Tree Cover (Zambia)</span>
                        <div class="switch right">
                            <label>
                                <input id="layer2" type="checkbox" />
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center-align">
                            <span style="font-size: x-small">Opacity</span>
                        </div>
                        <div class="col s12">
                            <input type="range" id="range_02">
                        </div>
                    </div>
                    <div class="divider"></div>
                </li>
                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Loss Year (Zambia)</span>
                        <div class="switch right">
                            <label>
                                <input id="layer3"  type="checkbox" />
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center-align">
                            <span style="font-size: x-small">Opacity</span>
                        </div>
                        <div class="col s12">
                            <input type="range" id="range_03">
                        </div>
                    </div>
                    <div class="divider"></div>
                </li>
                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Gain (Zambia)</span>
                        <div class="switch right">
                            <label>
                                <input id="layer4"  type="checkbox" />
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center-align">
                            <span style="font-size: x-small">Opacity</span>
                        </div>
                        <div class="col s12">
                            <input type="range" id="range_04">
                        </div>
                    </div>
                    <div class="divider"></div>
                </li>
                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Layer 4</span>
                        <div class="switch right">
                            <label>
                                <input type="checkbox" />
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </li>

            </ul>
            <p class="setting-header font-weight-900">SECONDARY SETTINGS</p>
            <ul class="collection border-none">
                <li class="collection-item border-none">
                    <div class="m-0">
                        <span>Layer 1</span>
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
                        <span>Layer 2</span>
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
    </div>
</div>








