<div class="modal modal-fixed-footer" id="cost-distance-modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h5 class="green-text">Cost Distance Analysis</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="alert info">
                    <span>
                        <i class="material-icons" style="vertical-align: bottom;">info</i>&nbsp;&nbsp;<span class="alert-title">Notice: </span>
                        Upload the locality map and de friction map to analyze them. Additionaly you can specify if
                        Friction is relative, if diagonals cost more and the time in hours.
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs" style="margin-bottom: 1rem;">
                    <li class="tab col s6"><a class="active" href="#modal-content-sequential">Sequential Analysis</a></li>
                    <li class="tab col s6"><a href="#modal-content-parallel">Parallel Analysis</a></li>
                </ul>
            </div>
            <div class="col s12" id="modal-content-sequential">
                <div class="row">
                    <div class="col s12">
                        <form id="cost-distance-form" action="/platform/costDistanceAnalysis" method="POST" enctype="multipart/form-data">
                            <div class="card-action">
                                <label for="frictionMap">Friction Map:</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="frictionMap" id="frictionMap" required accept="image/tiff, image/tiff-fx">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="frictionMapHelper" data-error=""></span>
                                </div>
                                <label for="localityMap">Locality Map:</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="localityMap" id="localityMap" required accept="image/tiff, image/tiff-fx">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="localityMapHelper" data-error=""></span>
                                </div>
                                <label for="fwuseCSV">Fuel Wood Use (CSV):</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="fwuseCSV" id="fwuseCSV" required accept=".csv">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="fwuseCSVHelper" data-error=""></span>
                                </div>
                                <div class="switch">
                                    <div class="row">
                                        <div class="col s8">
                                            <label for="relativeFriction">Is friction relative?:</label>
                                        </div>
                                        <div class="col s4">
                                            <label>
                                                <input type="checkbox" name="relativeFriction" id="relativeFriction">
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <span class="helper-text" id="frictionRelativeHelper" data-error=""></span>
                                <div class="switch">
                                    <div class="row">
                                        <div class="col s8">
                                            <label for="diagonalsValue">Do diagonals cost more?:</label>
                                        </div>
                                        <div class="col s4">
                                            <label>
                                                <input type="checkbox" name="diagonalsValue" id="diagonalsValue">
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <span class="helper-text" id="diagonalsValueHelper" data-error=""></span>

                                <div class="row">
                                    <div class="col s12">
                                        <div class="alert success">
                                            <span>
                                                <i class="material-icons" style="vertical-align: bottom;">info</i>&nbsp;&nbsp;<span class="alert-title">Attention: </span>
                                                You can execute the algorithm with limit time on exploration or without limit time.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="switch">
                                    <div class="row">
                                        <div class="col s8">
                                            <label for="timeLimit">Set time limit on exploration?:</label>
                                        </div>
                                        <div class="col s4">
                                            Off
                                            <label>
                                                <input type="checkbox" name="timeLimit" id="timeLimit">
                                                <span class="lever"></span>
                                            </label>
                                            On
                                        </div>
                                    </div>
                                </div>

                                <div class="input-field hide" id="timeInput">
                                    <input name="iterations" id="iterations" type="number" min="1" max="2">
                                    <label for="iterations">Time (in hours)</label>
                                    <span class="helper-text" id="iterationsHelper" data-error=""></span>
                                </div>
                            </div>
                            <button type="submit" form="cost-distance-form" class="right waves-effect btn indigo accent-4">
                                <i class="material-icons right">radio_button_checked</i>
                                ANALYSE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col s12" id="modal-content-parallel">
                <div class="row">
                    <div class="col s12">
                        <form id="cost-distance-form-parallel" action="/platform/costDistanceAnalysisParallel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-action">
                                <label for="frictionMap">Friction Map:</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="frictionMap" id="frictionMap" required accept="image/tiff, image/tiff-fx">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="frictionMapHelper" data-error=""></span>
                                </div>
                                <label for="localitiesMap">Localities Map:</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="localitiesMap" id="localitiesMap" required accept="image/tiff, image/tiff-fx">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="localitiesMapHelper" data-error=""></span>
                                </div>
                                <label for="fwuseCSV">Fuel Wood Use (CSV):</label>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <i class="material-icons">description</i>
                                        <input type="file" name="fwuseCSV" id="fwuseCSV" required accept=".csv">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Select file">
                                    </div>
                                    <span class="helper-text" id="fwuseCSVHelper" data-error=""></span>
                                </div>
                                <div class="switch">
                                    <div class="row">
                                        <div class="col s8">
                                            <label for="relativeFriction">Is friction relative?:</label>
                                        </div>
                                        <div class="col s4">
                                            <label>
                                                <input type="checkbox" name="relativeFriction" id="relativeFriction">
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <span class="helper-text" id="frictionRelativeHelper" data-error=""></span>
                                <div class="switch">
                                    <div class="row">
                                        <div class="col s8">
                                            <label for="diagonalsValue">Do diagonals cost more?:</label>
                                        </div>
                                        <div class="col s4">
                                            <label>
                                                <input type="checkbox" name="diagonalsValue" id="diagonalsValue">
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <span class="helper-text" id="diagonalsValueHelper" data-error=""></span>
                                <div class="input-field">
                                    <input name="time" id="time" type="number" required min="1" max="2">
                                    <label for="time">Time (in hours)</label>
                                    <span class="helper-text" id="timeHelper" data-error=""></span>
                                </div>
                            </div>
                            <button type="submit" form="cost-distance-form-parallel" class="right waves-effect btn indigo accent-4">
                                <i class="material-icons right">radio_button_checked</i>
                                ANALYSE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="waves-effect btn-flat red-text modal-action modal-close">
            CLOSE
        </button>
    </div>
</div>