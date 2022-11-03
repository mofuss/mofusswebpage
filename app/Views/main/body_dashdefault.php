
<!-- BEGIN: Page Main-->
<div id="main" >
    <div class="row"  >
        <div id='map'></div>

        <div class="col s12" >
            <div class="container" >

                <div class="section" id="winanalyze" >
                    <div class="row">


<!--                        <div class="col s6 m4 l3">-->
                        <div style="width: 300px; position: absolute; right: 50px;">

                            <div class="card">
                                <div class="card-content ">
                                    <h4 class="card-title">Analyze</h4>
                                    <p>
                                        Select the required type of analysis.
                                    </p>
                                    <hr>
                                    <div class="green-text padding-1">
                                            <p><span id="typetext">The current analysis focuses on the whole country.</span></p>
                                            <p><span id="polselected">There is no polygon selected.</span></p>
                                            <div id="calculated-area"></div>
                                    </div>
                                    <form id="selectarea-form" action="<?php echo base_url();?>/dashdefault/croparea" method="POST" files="true" hidden>
                                        <div class="input-field">
                                            <div class="row" id="section-coords" >
                                                <input id="coords" name="coords" class="validate disabled" readonly></input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-action">
                                    <button id="processcountry" type="button" onclick="location.href='<?php echo base_url().'/dashdefault/country/'.$country_code;?>'" class="waves-effect btn accent-4" disabled="disabled">
                                        Country
                                    </button>
                                    <button id="processarea" type="submit" form="selectarea-form" class="waves-effect btn accent-4" disabled="disabled">
                                        Polygon
                                    </button>
                                </div>



                            </div>



                        </div>
                    </div>

                </div>

                <div class="section" id="winnrb" hidden>
                    <div class="row">
<!--                        <div class="col s6 m4 l3">-->
                        <div style="width: 420px;">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Non-renewable biomass</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0" href="#nrb-tab1">Description</a></li>
                                                    <li class="tab col s6 p-0"><a class="p-0" href="#nrb-tab2">Result</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nrb-tab1">
                                        <div class="row">
                                            <div class="col s12">
<!--                                                <p>See analysis for the whole country.</p>-->
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            Non-renewable biomass (NRB):
                                                            is the amount of harvested wood that exceeds natural regrowth
                                                            over a given time period, most commonly one year. When
                                                            NRB is given as a fraction of total fuelwood use, fNRB (“fraction of
                                                            non-renewable biomass”) is used instead. This describes the proportion
                                                            of the fuel wood harvest that is unsustainable.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="line-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            Fuelwood harvesting occurring in some places is nonrenewable
                                                            as shown by NRB trajectories
                                                        </p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div id="nrb-tab2">
                                        <div class="row">
                                            <div class="col s12">
                                                <p >Positive NRB trajectories do not necessarily mean that woodlands
                                                    within the studied landscape are being degraded into
                                                    depletion. Across the landscape, woodlands show some resilience
                                                    because the pixels experiencing positive NRB change with each
                                                    time step.
                                                </p>
                                                <div class="sample-chart-wrapper"><canvas id="bar-chart" height="200"></canvas></div>
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
                        <!--                        <div class="col s6 m4 l3">-->
                        <div style="width: 420px;">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Non-renewable biomass consumption</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6"><a class="active " href="#connrb-tab1">Analysis</a></li>
                                                    <li class="tab col s6 "><a href="#connrb-tab2">Results</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="connrb-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                  <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            Mofuss includes a Monte Carlo (MC) simulation to accommodate
                                                            the inherent uncertainty of woody biomass growth patterns
                                                            and AGB stock accumulation. With each MC run, all woody biomass
                                                            growth parameters vary randomly following truncated normal
                                                            probability density functions.
                                                        </p>
                                                        <div class="sample-chart-wrapper"><canvas id="pie-chart" height="200"></canvas></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            Mofuss projects fuelwood harvesting sites in time based on the
                                                            accessibility of fuelwood sources.
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
                                                <p >Sensitivity of results to some input parameters shown in Table 1
                                                    was tested by running 6 simulations of 100 Monte Carlo realizations
                                                    each, while allowing one parameter per simulation to
                                                    vary randomly and holding the others constant.</p>
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
                        <!--                        <div class="col s6 m4 l3">-->
                        <div style="width: 420px;">
                            <div  class="card card-tabs">
                                <div class="card-content" >
                                    <div class="card-title" >
                                        <div class="row">
                                            <div class="col s12 m6 ">
                                                <h4 class="card-title">Total consumption</h4>
                                            </div>
                                            <div class="col s12 m6 ">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0" href="#contot-tab1">Data</a></li>
                                                    <li class="tab col s6 p-0"><a class="p-0" href="#contot-tab2">Selection</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="contot-tab1">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            The proportion of the landscape that is harvested also affects
                                                            fuelwood consumption. This effect arises because in some cases,
                                                            the fuelwood demand can exceed the standing biomass stock in a
                                                            given time step. When this occurs, the model is designed to allow
                                                            the stock to be fully cleared even though demand is not completely
                                                            satisfied.
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
                                                  <div class="row">
                                                    <div class="col s12">
                                                        <p class="mb-2">
                                                            The results are congruent with what we know about deforestation
                                                            and forest degradation associated with wood energy demand. Based on three decades of study, we
                                                            know that fuelwood collection and harvesting for residential purposes
                                                            can contribute to localized deforestation and forest degradation
                                                            under certain conditions, some of which were explored in
                                                            our study by means of landscape-level spatiotemporal modeling.
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








