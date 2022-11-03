<div class="modal modal-fixed-footer" id="crop-locs-modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h5 class="green-text">Crop Localities</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="alert info">
                    <span>
                        <i class="material-icons" style="vertical-align: bottom;">info</i>&nbsp;&nbsp;<span class="alert-title">Notice: </span>
                        Upload the Localities Map (must be a valid Tiff format), also a Fuel Wood Use for both Walking a Vehicles are required.
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form id="crop-locs-form" action="/platform/cropLocsAnalysis" method="POST" enctype="multipart/form-data">
                    <div class="card-action">
                        <label for="locsFile">Localities Map:</label>
                        <div class="file-field input-field">
                            <div class="btn">
                                <i class="material-icons">description</i>
                                <input type="file" name="locsFile" id="locsFile" required accept="image/tiff, image/tiff-fx">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select file">
                            </div>
                            <span class="helper-text" id="locsFileHelper" data-error=""></span>
                        </div>

                        <label for="fwuseW">Fuel Wood Use for Walking (CSV):</label>
                        <div class="file-field input-field">
                            <div class="btn">
                                <i class="material-icons">description</i>
                                <input type="file" name="fwuseW" id="fwuseW" required accept=".csv">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select file">
                            </div>
                            <span class="helper-text" id="fwuseWHelper" data-error=""></span>
                        </div>

                        <label for="fwuseV">Fuel Wood Use for Vehicles (CSV):</label>
                        <div class="file-field input-field">
                            <div class="btn">
                                <i class="material-icons">description</i>
                                <input type="file" name="fwuseV" id="fwuseV" required accept=".csv">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select file">
                            </div>
                            <span class="helper-text" id="fwuseVHelper" data-error=""></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="waves-effect btn-flat red-text  modal-action modal-close">
            CLOSE
        </button>
        <button type="submit" form="crop-locs-form" class="waves-effect btn indigo accent-4">
            <i class="material-icons right">radio_button_checked</i>
            ANALYSE
        </button>
    </div>
</div>