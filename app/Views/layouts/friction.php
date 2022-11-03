<div class="modal modal-fixed-footer" id="friction-modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h5 class="green-text">Friction Analysis</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="alert info">
                    <span>
                        <i class="material-icons" style="vertical-align: bottom;">info</i>&nbsp;&nbsp;<span class="alert-title">Notice: </span>
                        The friction analysis will deploy a custom map over the selected country.
                        All the required datasets has been already loaded.
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form id="friction-form" action="/platform/frictionAnalysis" method="POST">
                    <div class="switch">
                        <div class="row">
                            <div class="col s8">
                                <label class="label" for="attractionLayers">Take into account attraction layers? :</label>
                            </div>
                            <div class="col s4">
                                <label>
                                    <input type="checkbox" name="attractionLayers" id="attractionLayers">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="switch">
                        <div class="row">
                            <div class="col s8">
                                <label class="label" for="rutasMaritimas">Take sea routes into account? :</label>
                            </div>
                            <div class="col s4">
                                <label>
                                    <input type="checkbox"  name="seaRoutes" id="seaRoutes">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="switch">
                        <div class="row">
                            <div class="col s8">
                                <label class="label" for="executeAlgorithm">Do you prefer to execute Friction Analysys Algorithm instead of using pre generated assets? :</label>
                            </div>
                            <div class="col s4">
                                <label>
                                    <input type="checkbox"  name="executeAlgorithm" id="executeAlgorithm">
                                    <span class="lever"></span>
                                </label>
                            </div>
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
        <button type="submit" form="friction-form" class="waves-effect btn indigo accent-4">
            <i class="material-icons right">radio_button_checked</i>
            ANALYSE
        </button>
    </div>
</div>