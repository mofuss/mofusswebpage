<script src="<?php echo base_url();?>/public/app-assets/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/ionRangeSlider/js/ion.rangeSlider.js"></script>

<script src="<?php echo base_url();?>/public/app-assets/vendors/chartjs/chart.min.js"></script>

<script src="<?php echo base_url();?>/public/app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>


<script src="<?php echo base_url();?>/public/app-assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>/public/app-assets/js/search.js"></script>
<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/custom/custom-script.js"></script>-->




<script src="<?php echo base_url();?>/public/app-assets/js/scripts/extra-components-range-slider.js"></script>
<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/scripts/charts-chartjs.js"></script>-->
<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/scripts/advance-ui-modals.js"></script>-->


<!--<script src="--><?php //echo base_url();?><!--/public/app-assets/js/scripts/data-tables.js"></script>-->


<script>

    var coords;
    var level='<?php echo $level;?>';

    $('#hagg-modal').modal();
    $('#crop-locs-modal').modal();
    $('#friction-modal').modal();
    $('#cost-distance-modal').modal();
    $('#select-modal').modal();
    $('#charts-modal').modal();
    $('#tables-modal').modal();

    // $('#loading-modal').modal({dismissible:false});
    $('#loading-modal').modal();
    $('#loading-modal').modal('open');
    $('#modal-layers').modal();

    // Dynmaic Scroll table





    function save() {
        $('#modal-layers').modal('open');
    }

    class extendDrawBar {
        constructor(opt) {
            let ctrl = this;
            ctrl.draw = opt.draw;
            ctrl.buttons = opt.buttons || [];
            ctrl.onAddOrig = opt.draw.onAdd;
            ctrl.onRemoveOrig = opt.draw.onRemove;
        }
        onAdd(map) {
            let ctrl = this;
            ctrl.map = map;
            ctrl.elContainer = ctrl.onAddOrig(map);
            ctrl.buttons.forEach((b) => {
                ctrl.addButton(b);
            });
            return ctrl.elContainer;
        }
        onRemove(map) {
            ctrl.buttons.forEach((b) => {
                ctrl.removeButton(b);
            });
            ctrl.onRemoveOrig(map);
        }
        addButton(opt) {
            let ctrl = this;
            var elButton = document.createElement('button');
            elButton.className = 'mapbox-gl-draw_ctrl-draw-btn';
            if (opt.classes instanceof Array) {
                opt.classes.forEach((c) => {
                    elButton.classList.add(c);
                });
            }
            elButton.addEventListener(opt.on, opt.action);
            ctrl.elContainer.appendChild(elButton);
            opt.elButton = elButton;
        }
        removeButton(opt) {
            opt.elButton.removeEventListener(opt.on, opt.action);
            opt.elButton.remove();
        }
    }


    mapboxgl.accessToken = 'pk.eyJ1IjoiZXJpbGtlIiwiYSI6ImNqZnZud3RrMzBqbzQyeXBkNjBzMnVlZzAifQ.ikdp7GlG3TyF455yFqDtUg';
    var map = new mapboxgl.Map({
        container: 'map',
        // style: 'mapbox://styles/mapbox/dark-v10', //hosted style id
        style: 'mapbox://styles/mapbox/light-v10', //hosted style id
        // style: 'mapbox://styles/mapbox/streets-v11',
        center: [<?php echo $longitude; ?>, <?php echo $latitude; ?>],
        zoom: 5
    });

    var draw = new MapboxDraw({
        displayControlsDefault: false,
        controls: {
            polygon: true,
            trash: true
        }
    });
    var drawBar = new extendDrawBar({
        draw: draw,
        buttons: [{
            on: 'click',
            action: save,
            // classes: ['fa', 'fa-cog']
            classes: ['mapbox-gl-draw_layer']

        },
        //     {
        //     on: 'click',
        //     action: save,
        //     classes: ['fa', 'fa-check-square']
        //
        // }
        ]
    });


    function cargar_layers(){

        if (level=='country'){
            var url = '<?php echo base_url();?>/public/maps/countries/<?php echo $country_code; ?>.geojson';
            map.addSource('country', { type: 'geojson', data: url});
        } else {
            $('#calculation-box').css('visibility','hidden');
            var url = '<?php echo base_url();?>/public/maps/geojson/coords.geojson';
            map.addSource('country', { type: 'geojson', data: url});
        }

        map.addSource("tree", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/gifcountries/treecover.gif',
            "coordinates": <?php echo $bbox; ?>
        });
        map.addSource("lossyear", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/gifcountries/lossyear.gif',
            "coordinates": <?php echo $bbox; ?>
        });
        map.addSource("gain", {
            "type": "image",
            "url": '<?php echo base_url();?>/public/maps/gifcountries/gain.gif',
            "coordinates": <?php echo $bbox; ?>
        });
        map.addLayer({
            'id': 'capa1',
            'type': 'fill',
            'source': 'country',
            'layout': {'visibility': 'visible'},
            'paint': {
                'fill-color': 'rgba(46, 125, 50, 0.5)',
                'fill-outline-color': '#2E7032',
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
    }

    function cargar_charts(){

        var ctx = $("#line-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            // maintainAspectRatio: false,
            legend: {
                position: "bottom"
            },
            hover: {
                mode: "label"
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: "Month"
                        }
                    }
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: "Value"
                        }
                    }
                ]
            },
            title: {
                display: true,
                text: "Line Chart - Legend"
            }
        };

        // Chart Data
        var chartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: "#e91e63",
                    pointBorderColor: "#e91e63",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4
                },
                {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19, 86, 27, 90],
                    fill: false,
                    borderColor: "#03a9f4",
                    pointBorderColor: "#03a9f4",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4
                },
                {
                    label: "My Third dataset - No bezier",
                    data: [45, 25, 16, 36, 67, 18, 76],
                    fill: false,
                    borderColor: "#ffc107",
                    pointBorderColor: "#ffc107",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4
                }
            ]
        };

        var config = {
            type: "line",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var lineChart = new Chart(ctx, config);




        //Get the context of the Chart canvas element we want to select
        var ctx = $("#bar-chart");

        // Chart Options
        var chartOptions = {
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide and green
            elements: {
                rectangle: {
                    borderWidth: 2,
                    borderColor: "rgb(0, 255, 0)",
                    borderSkipped: "left"
                }
            },
            responsive: true,
            // maintainAspectRatio: false,
            // responsiveAnimationDuration: 500,
            legend: {
                position: "top"
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false
                        },
                        scaleLabel: {
                            display: true
                        }
                    }
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false
                        },
                        scaleLabel: {
                            display: true
                        }
                    }
                ]
            },
            title: {
                display: false,
                text: "Chart.js Horizontal Bar Chart"
            }
        };

        // Chart Data
        var chartData = {
            labels: ["January", "February", "March", "April"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81],
                    backgroundColor: "#00bcd4",
                    hoverBackgroundColor: "#00acc1",
                    borderColor: "transparent"
                },
                {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19],
                    backgroundColor: "#ffeb3b",
                    hoverBackgroundColor: "#fdd835",
                    borderColor: "transparent"
                }
            ]
        };

        var config = {
            type: "horizontalBar",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var barChart = new Chart(ctx, config);



        // Radar Chart
        // ------------------
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#radar-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            // maintainAspectRatio: false,
            // responsiveAnimationDuration: 500,
            legend: {
                position: "top"
            },
            title: {
                display: true,
                text: "Chart.js Radar Chart"
            },
            scale: {
                reverse: false,
                ticks: {
                    beginAtZero: true
                }
            }
        };

        // Chart Data
        var chartData = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "My First dataset",
                    backgroundColor: "rgba(233,30,99,.4)",
                    borderColor: "transparent",
                    pointBorderColor: "#e91e63",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Hidden dataset",
                    hidden: true,
                    data: [45, 25, 16, 36, 67, 18, 76]
                },
                {
                    label: "My Second dataset",
                    backgroundColor: "rgba(29,233,182,.8)",
                    borderColor: "transparent",
                    pointBorderColor: "#1DE9B6",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    data: [28, 48, 40, 19, 86, 27, 78]
                }
            ]
        };

        var config = {
            type: "radar",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var radarChart = new Chart(ctx, config);




        // Polar chart
        // ----------------
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#polar-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            // maintainAspectRatio: false,
            // responsiveAnimationDuration: 500,
            legend: {
                position: "top"
            },
            title: {
                display: false,
                text: "Chart.js Polar Area Chart"
            },
            scale: {
                ticks: {
                    beginAtZero: true
                },
                reverse: false
            },
            animation: {
                animateRotate: false
            }
        };

        // Chart Data
        var chartData = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"],
                    label: "My dataset" // for legend
                }
            ]
        };

        var config = {
            type: "polarArea",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var polarChart = new Chart(ctx, config);





        // Pie chart
        // ----------------
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#pie-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            // maintainAspectRatio: false,
            // responsiveAnimationDuration: 500
        };

        // Chart Data
        var chartData = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19, 86],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Third dataset - No bezier",
                    data: [45, 25, 16, 36, 67],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Fourth dataset",
                    data: [17, 62, 78, 88, 26],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                }
            ]
        };

        var config = {
            type: "pie",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var pieChart = new Chart(ctx, config);

        // Doughnut chart
        // -----------------
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#doughnut-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            // maintainAspectRatio: false,
            // responsiveAnimationDuration: 500
        };

        // Chart Data
        var chartData = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19, 86],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Third dataset - No bezier",
                    data: [45, 25, 16, 36, 67],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                },
                {
                    label: "My Fourth dataset",
                    data: [17, 62, 78, 88, 26],
                    backgroundColor: ["#03a9f4", "#00bcd4", "#ffc107", "#e91e63", "#4caf50"]
                }
            ]
        };

        var config = {
            type: "doughnut",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var doughnutChart = new Chart(ctx, config);



    }


    function maskrasters(){
        $.ajax({
            url   : '<?php echo base_url();?>/select/generatekml',
            async : true
        }).done(function(data) {
            cargar_layers();

            $("#loadbar1").removeClass("indeterminate");
            $("#loadbar1").addClass("determinate");
            $("#loadbar2").removeClass("determinate");
            $("#loadbar2").addClass("indeterminate");

            var coordenadas= JSON.parse(data);


            $.ajax({
                url   : '<?php echo base_url();?>/select/croptreecover',
                async : true
            }).done(function() {
                $("#loadbar2").removeClass("indeterminate");
                $("#loadbar2").addClass("determinate");
                $("#loadbar2").width('100%');
                $("#loadbar3").removeClass("determinate");
                $("#loadbar3").addClass("indeterminate");

                //var url = '<?php //echo base_url();?>///public/maps/gif/treecover.gif';
                var url = '<?php echo base_url();?>/public/maps/gif/treecover.gif?t=' + new Date().getTime();
                console.log(url);
                map.getSource('tree').updateImage({ url: url, coordinates: coordenadas });


                $.ajax({
                    url   : '<?php echo base_url();?>/select/lossyear',
                    async : true
                }).done(function() {
                    $("#loadbar3").removeClass("indeterminate");
                    $("#loadbar3").addClass("determinate");
                    $("#loadbar3").width('100%');
                    $("#loadbar4").removeClass("determinate");
                    $("#loadbar4").addClass("indeterminate");

                    var url = '<?php echo base_url();?>/public/maps/gif/lossyear.gif?t=' + new Date().getTime();
                    map.getSource('lossyear').updateImage({ url: url, coordinates: coordenadas });


                    $.ajax({
                        url   : '<?php echo base_url();?>/select/gain',
                        async : true
                    }).done(function() {
                        $("#loadbar4").removeClass("indeterminate");
                        $("#loadbar4").addClass("determinate");
                        $("#loadbar4").width('100%');
                        $("#processing_button").removeClass("red");
                        $("#processing_button").removeClass("pulse");
                        $("#processing_button").addClass("green");

                        $('#loading-modal').modal('close');

                        var url = '<?php echo base_url();?>/public/maps/gif/gain.gif?t=' + new Date().getTime();
                        map.getSource('gain').updateImage({ url: url, coordinates: coordenadas });
                    });


                });




            });






        });
    }



    map.on('load', function () {

        cargar_charts();

        $('#scroll-dynamic').DataTable({
            "responsive": true,
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });

        if (level=='country') {
            cargar_layers();
        } else {
            maskrasters();
        }



    });


    map.addControl(drawBar);
    map.addControl(new mapboxgl.FullscreenControl());
    map.on('draw.create', updateArea);
    map.on('draw.delete', updateArea);
    map.on('draw.update', updateArea);


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