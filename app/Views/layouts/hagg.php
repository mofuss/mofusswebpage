<div class="modal modal-fixed-footer" id="hagg-modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h5 class="green-text">Ventana de prueba para mandar datos a R</h5>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <form id="Hagg-form" action="" method="POST">


                    <div class="row">
                        <div class="search input-field">
                            <input placeholder=
                                   <?php echo $name; ?>
                                   id="country" name="country" type="text" class="validate">
                            <label for="country">Country</label>
                        </div>

                        <div class="search input-field">
                            <input placeholder=
                                   <?php echo $country_code; ?>
                                   id="id_country" name="id_country" type="text" class="validate">
                            <label for="id_country">ID</label>
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
        <button class="waves-effect btn green accent-4">
            <i class="material-icons right">radio_button_checked</i>
            HAGG
        </button>
        <!--        <button type="submit" form="Hagg-form" class="waves-effect btn indigo accent-4">-->
        <!--            <i class="material-icons right">radio_button_checked</i>-->
        <!--            HAGG-->
        <!--        </button>-->
    </div>
</div>
