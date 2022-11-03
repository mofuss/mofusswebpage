
<!-- BEGIN: Page Main-->
<div id="main" >
    <div class="row"  >
        <div id='map'></div>

        <div class="col s12" >
            <div class="container" >

                <div class="section" id="winanalyze" >
                    <div class="row">




                        <div class="col s6 m4 l3">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Analyze</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0" href="#analyze-tab1">Country</a></li>
                                                    <li class="tab col s6 p-0"><a class="p-0" href="#analyze-tab2">Selection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analyze-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>See analysis for the whole country.</p>



                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 right-align" >
<!--                                                <a   class="waves-effect btn accent-4" href="--><?php //echo base_url();?><!--/dashdefault/country/--><?php //echo $country_code; ?><!--" disabled="disabled"d>-->
<!--                                                    Proceed-->
<!--                                                </a>-->

                                                <button id="processcountry" type="button" onclick="location.href='<?php echo base_url().'/dashdefault/country/'.$country_code;?>'" class="waves-effect btn accent-4" disabled="disabled">
                                                    Process country
                                                </button>

                                            </div>
                                        </div>


                                    </div>
                                    <div id="analyze-tab2">
                                        <div class="row">
                                            <div class="col s12">
<!--                                                <p style="font-size: 9pt; font-weight: normal">Show analysis for a selected area.</p>-->
                                                <p >Show analysis for a selected area.</p>

                                                <form id="selectarea-form" action="<?php echo base_url();?>/dashdefault/croparea" method="POST" files="true" hidden>
                                                    <div class="input-field">
                                                        <div class="row" id="section-coords" >
                                                            <input id="coords" name="coords" class="validate disabled" readonly></input>
                                                        </div>
                                                    </div>
                                                </form>

                                                <p><span id="polselected">There is no polygon selected</span></p>
                                                <div id="calculated-area"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 right-align">
                                                <button id="processarea" type="submit" form="selectarea-form" class="waves-effect btn accent-4" disabled="disabled">
                                                    Process area
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section" id="winnrb" hidden>
                    <div class="row">
                        <div class="col s6 m4 l3">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Non-renewable biomass</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0" href="#nrb-tab1">Country</a></li>
                                                    <li class="tab col s6 p-0"><a class="p-0" href="#nrb-tab2">Selection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nrb-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>See analysis for the whole country.</p>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="line-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="bar-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div id="nrb-tab2">
                                        <div class="row">
                                            <div class="col s12">
                                                <p >Show analysis for a selected area.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="section" id="winconnrb" hidden>
                    <div class="row">
                        <div class="col s6 m4 l3">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Non-renewable biomass consumption</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6"><a class="active " href="#connrb-tab1">1</a></li>
                                                    <li class="tab col s6 "><a href="#connrb-tab2">2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="connrb-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>See analysis for the whole country.</p>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="pie-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="radar-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div id="connrb-tab2">
                                        <div class="row">
                                            <div class="col s12">
                                                <p >Show analysis for a selected area.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="section" id="wincontot" hidden>
                    <div class="row">
                        <div class="col s6 m4 l3">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Total consumption</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0" href="#contot-tab1">Country</a></li>
                                                    <li class="tab col s6 p-0"><a class="p-0" href="#contot-tab2">Selection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="contot-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>See analysis for the whole country.</p>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="polar-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div id="contot-tab2">
                                        <div class="row">
                                            <div class="col s12">
                                                <p >Show analysis for a selected area.</p>

                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                                            the
                                                            comparison of two data sets.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="doughnut-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="bottom: 50px; right: 19px;"   class="fixed-action-btn direction-top"><a id="processing_button" class="btn-floating btn-large <?php echo $processing_button_color; ?> modal-trigger" href="#loading-modal"><i class="material-icons">add_alert</i></a>





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
        <div id="settings" class="col s6">
            <p class="card-header">Layers</p>
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

        </div>
    </div>
</div>








