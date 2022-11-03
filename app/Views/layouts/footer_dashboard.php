<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/ionRangeSlider/js/ion.rangeSlider.js"></script>

<script src="<?php echo base_url();?>/public/app-assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/search.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/custom/custom-script.js"></script>

<script src="<?php echo base_url();?>/public/app-assets/js/scripts/extra-components-range-slider.js"></script>

<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/scripts/advance-ui-modals.js"></script>-->


<script>

    var coords;
    $('#hagg-modal').modal();
    $('#crop-locs-modal').modal();
    $('#friction-modal').modal();
    $('#cost-distance-modal').modal();
    $('#select-modal').modal();
    $('#loading-modal').modal({dismissible:false});
    $('#loading-modal').modal('open');

    mapboxgl.accessToken = 'pk.eyJ1IjoiZXJpbGtlIiwiYSI6ImNqZnZud3RrMzBqbzQyeXBkNjBzMnVlZzAifQ.ikdp7GlG3TyF455yFqDtUg';
    var map = new mapboxgl.Map({
        container: 'map',
        // style: 'mapbox://styles/mapbox/dark-v9', //hosted style id
        // style: 'mapbox://styles/mapbox/dark-v10', //hosted style id
        style: 'mapbox://styles/mapbox/streets-v11',


        // style: 'mapbox://styles/mapbox/light-v10',
        // center: [-80.4221293, 42.2893338],
        center: [<?php echo $longitude; ?>, <?php echo $latitude; ?>],
        zoom: 5
    });

    map.on('load', function () {
        var level='<?php echo $level;?>';

        if (level=='country'){
            var url = '<?php echo base_url();?>/public/maps/countries/<?php echo $country_code; ?>.geojson';
            map.addSource('country', { type: 'geojson', data: url});
        } else {
            $('#calculation-box').css('visibility','hidden');
            var url = '<?php echo base_url();?>/writable/maps/geojson/coords.geojson';
            map.addSource('country', { type: 'geojson', data: url});
        }



        map.addSource("tree", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/Hansen_GFC2018_treecover2000_m-004.png',
            "coordinates": [
                [21.99964414399119, -8.239749609256863],
                [33.70491987398261, -8.214836701137207],
                [33.97999128973487, -18.069879290883062],
                [21.793615579208122, -18.126132365647464]
            ]

        });
        map.addSource("lossyear", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/Hansen_GFC2018_lossyear_m-002.png',
            "coordinates": [
                [21.99964414399119, -8.239749609256863],
                [33.70491987398261, -8.214836701137207],
                [33.97999128973487, -18.069879290883062],
                [21.793615579208122, -18.126132365647464]
            ]
        });

        map.addSource("gain", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/Hansen_GFC2018_gain_m.png',
            "coordinates": [
                [21.99964414399119, -8.239749609256863],
                [33.70491987398261, -8.214836701137207],
                [33.97999128973487, -18.069879290883062],
                [21.793615579208122, -18.126132365647464]
            ]
        });


        map.addLayer({
            'id': 'capa1',
            'type': 'fill',
            'source': 'country',
            'layout': {'visibility': 'visible'},
            'paint': {
                'fill-color': '#088',
                'fill-opacity': 0.5
            }
        });


        map.addLayer({
            "id": "capa2",
            "type": "raster",
            "source": "tree",
            'layout': {'visibility': 'none'},
            "paint": { "raster-opacity": 0.5 }
        });


        map.addLayer({
            "id": "capa3",
            "type": "raster",
            "source": "lossyear",
            'layout': {'visibility': 'none'},
            "paint": { "raster-opacity": 0.5 }
        });

        map.addLayer({
            "id": "capa4",
            "type": "raster",
            "source": "gain",
            'layout': {'visibility': 'none'},
            "paint": { "raster-opacity": 0.5 }
        });


        // map.on('click', 'capa1', function(e) {
        //     new mapboxgl.Popup()
        //         .setLngLat(e.lngLat)
        //         // .setHTML(e.features[0].properties.name)
        //         .setHTML('<div class="card green">\n' +
        //             '                                            <div class="card-content white-text">\n' +
        //             '                                                <span class="card-title">'+e.features[0].properties.name+'</span>\n' +
        //             '                                                <p>' +
        //             '                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis delectus deserunt dolorem earum eveniet excepturi fugiat fugit hic id ipsam laudantium, magnam minima numquam pariatur, perferendis quasi, veniam voluptatum!\n' +
        //             '                                                </p>' +
        //             '                                            </div>' +
        //             '                                        </div>')
        //         .addTo(map);
        // });



        // range1.addEventListener('input', function(e) {
        //     map.setPaintProperty(
        //         'capa1',
        //         'raster-opacity',
        //         parseInt(e.target.value, 10) / 100
        //     );
        // });



    });

    var draw = new MapboxDraw({
        displayControlsDefault: false,
        controls: {
            polygon: true,
            trash: true
        }
    });
    map.addControl(draw);
    map.addControl(new mapboxgl.FullscreenControl());
    // map.addControl(new mapboxgl.GeolocateControl({
    //     positionOptions: {
    //         enableHighAccuracy: true
    //     },
    //     trackUserLocation: true
    // }));

    map.on('draw.create', updateArea);
    map.on('draw.delete', updateArea);
    map.on('draw.update', updateArea);
    // map.on('draw.actionable', updateArea);
    // map.on('draw.selectionchange', setDrawFeature);
    // map.on('draw.modechange', updateArea);
    // map.on('draw.changeMode', updateArea);
    // map.on('mousemove', function (e) {
    //     document.getElementById('coordenadas').innerHTML =
    //         JSON.stringify(e.lngLat);
    // });

    function updateArea(e) {
        var data = draw.getAll();
        var answer = document.getElementById('calculated-area');
        if (data.features.length > 0) {
            var area = turf.area(data);

            console.log(data.features[0]);
            console.log(data.features[0].geometry.coordinates[0]);
            coords=data.features[0].geometry.coordinates[0];
            $('#coords').val(JSON.stringify(coords));
            // document.cookie = "coords="+ JSON.stringify(coords);
            $('#processarea').prop('disabled', false);


// restrict to area to 2 decimal points
            var rounded_area = Math.round(area * 100) / 100;
            $( "#polselected" ).text('Polygon selected with');
            answer.innerHTML =
                '<p><strong>' +
                rounded_area +
                '</strong></p><p>m<sup>2</sup></p>';

        // <button class="mapbox-gl-draw_ctrl-draw-btn mapbox-gl-draw_polygon" title="Polygon tool (p)"></button>;
            $('.mapbox-gl-draw_polygon').attr('disabled', true);
        } else {
            answer.innerHTML = '';
            $( "#polselected" ).text('There is no polygon selected');
            $('.mapbox-gl-draw_polygon').attr('disabled', false);

            if (e.type !== 'draw.delete')
                alert('Use the draw tools to draw a polygon!');
        }
    }


    // function setDrawFeature(e) {
    //     if (e.features.length && e.features[0].type === 'Feature') {
    //         var feat = e.features[0];
    //         drawFeatureID = feat.id;
    //         console.log(feat);
    //         console.log(drawFeatureID);
    //         var data = draw.getAll();
    //         var area = turf.area(data);
    //         console.log(area);
    //     }
    // }

    $("#layer1").change(function () {
        var visibility = map.getLayoutProperty('capa1', 'visibility');
        console.log(visibility);

        if (visibility === 'visible') {
            map.setLayoutProperty('capa1', 'visibility', 'none');
            // this.className = '';
        } else {
            // this.className = 'active';
            map.setLayoutProperty('capa1', 'visibility', 'visible');
        }
    });

    $("#range_01").change(function () {
        var valor=$("#range_01").val();
        console.log(valor);

            map.setPaintProperty(
                'capa1',
                'fill-opacity',
                parseInt(valor, 10) / 100
            );
    });


    $("#layer2").change(function () {
        var visibility = map.getLayoutProperty('capa2', 'visibility');
        console.log(visibility);

        if (visibility === 'visible') {
            map.setLayoutProperty('capa2', 'visibility', 'none');
            // this.className = '';
        } else {
            // this.className = 'active';
            map.setLayoutProperty('capa2', 'visibility', 'visible');
        }
    });

    $("#range_02").change(function () {
        var valor=$("#range_02").val();

        map.setPaintProperty(
            'capa2',
            'raster-opacity',
            parseInt(valor, 10) / 100
        );
    });


    $("#layer3").change(function () {
        var visibility = map.getLayoutProperty('capa3', 'visibility');
        console.log(visibility);

        if (visibility === 'visible') {
            map.setLayoutProperty('capa3', 'visibility', 'none');
            // this.className = '';
        } else {
            // this.className = 'active';
            map.setLayoutProperty('capa3', 'visibility', 'visible');
        }
    });

    $("#range_03").change(function () {
        var valor=$("#range_03").val();

        map.setPaintProperty(
            'capa3',
            'raster-opacity',
            parseInt(valor, 10) / 100
        );
    });


    $("#layer4").change(function () {
        var visibility = map.getLayoutProperty('capa4', 'visibility');
        console.log(visibility);

        if (visibility === 'visible') {
            map.setLayoutProperty('capa4', 'visibility', 'none');
            // this.className = '';
        } else {
            // this.className = 'active';
            map.setLayoutProperty('capa4', 'visibility', 'visible');
        }
    });

    $("#range_04").change(function () {
        var valor=$("#range_04").val();

        map.setPaintProperty(
            'capa4',
            'raster-opacity',
            parseInt(valor, 10) / 100
        );
    });





</script>


</body>
</html>