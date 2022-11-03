
<div class="modal modal-fixed-footer" id="select-modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h5 class="green-text">Select Area</h5>
            </div>
        </div>

        <div class="row " id="main-view">
            <div class="col s12">

                <form action="#" class="mt-1">
                        <label>
                            <input name="group1" type="radio"  disabled="disabled"/>
                            <span>Use KML File</span>
                        </label>
                        <label>
                            <input name="group1" type="radio"  disabled="disabled" />
                            <span>Use SHP File</span>
                        </label>
                        <label>
                            <input name="group1" type="radio"  checked />
                            <span>Use Polygon Selected</span>
                        </label>
                </form>


            </div>

        </div>


        <div class="row">
            <div class="col s12">
                <form id="selectarea-form" action="<?php echo base_url();?>/select" method="POST" files="true">

                        <label for="fkml">Polygon in KML:</label>
                        <div class="file-field input-field">
                            <div class="btn blue-grey darken-3 disabled">
                                <i class="material-icons">description</i>

                                <input type="file" name="fkml" id="fkml" accept=".kml">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select file">
                            </div>
                            <span class="helper-text" id="fkmlHelper" data-error=""></span>
                        </div>

                        <label for="fshp">Polygon in SHP:</label>
                        <div class="file-field input-field">
                            <div class="btn cyan darken-3  disabled">
                                <i class="material-icons">description</i>
                                <input type="file" name="fshp" id="fshp" accept=".shp">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select file">
                            </div>
                            <span class="helper-text" id="fshpHelper" data-error=""></span>
                        </div>

                        <label for="coords">Polygon Selected:</label>
<!--                        <div class="input-field">-->
<!--                            <button type="button" class="btn deep-orange darken-3 btn-large" id="btn-draw">-->
<!--                                Use Selected Polygon-->
<!--                            </button>-->
<!--                        </div>-->
                        <div class="input-field">
                            <div class="row" id="section-coords" >
                                <input id="coords" name="coords" class="validate disabled" readonly></input>
                            </div>
                        </div>

                </form>
            </div>
        </div>


    </div>


    <div class="modal-footer">
        <button class="waves-effect btn-flat red-text modal-action modal-close">
            CLOSE
        </button>
        <button id="processarea" type="submit" form="selectarea-form" class="waves-effect btn indigo accent-4" disabled="disabled">
            <i class="material-icons right">radio_button_checked</i>
            Process area
        </button>
    </div>

</div>
