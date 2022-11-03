<?php namespace App\Controllers;

set_time_limit(0);
class Select extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $coords = $request->getPostGet('coords');
        $undia=time() + (86400 * 30);
        setcookie('coords', $coords, $undia, "/"); // 86400 = 1 day

        $data = array(
            'name' => $_COOKIE["name"],
            'country_code' => $_COOKIE["country_code"],
            'latitude' => $_COOKIE["latitude"],
            'longitude' => $_COOKIE["longitude"],
            'level' => 'polygon',
            'info' => 'Selected Polygon',
            'bbox' => $_COOKIE["bbox"],
        );


        $estatus['processing_button_color']='red pulse';

        return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard',$estatus).view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/loading').view('layouts/footer_dashboard_select',$data);

    }

    public function generatekml()
    {
        $coords=$_COOKIE["coords"];
        $absolutepath = getcwd();

//        $file = fopen($absolutepath . '/public/maps/geojson/coords.geojson', 'w');
        $file = fopen($absolutepath . '/writable/maps/geojson/coords.geojson', 'w');
        fwrite($file, '{"type": "Feature","geometry": {"type": "Polygon","coordinates": [' . $coords . ']}}' . PHP_EOL);
        fclose($file);

//        $coords = substr($coords, 1, -1);
//        $coords = str_replace("],", ",0 ", $coords);
//        $coords = str_replace("]", ",0 ", $coords);
//        $coords = str_replace("[", "", $coords);
//
////        $file = fopen($absolutepath . '/public/scripts-gis2/LULCC/SourceData/InVector_GCS/coords.kml', 'w');
////        $file = fopen($absolutepath . '/public/maps/geojson/coords.kml', 'w');
//        $file = fopen($absolutepath . '/writable/maps/kml/coords.kml', 'w');
/*        fwrite($file, '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL);*/
//        fwrite($file, '<kml xmlns="http://www.opengis.net/kml/2.2">' . PHP_EOL);
//        fwrite($file, '<Document>' . PHP_EOL);
//        fwrite($file, '<Placemark>' . PHP_EOL);
//        fwrite($file, ' <name>Polygon1</name>>' . PHP_EOL);
//        fwrite($file, '<Polygon>' . PHP_EOL);
//        fwrite($file, '<outerBoundaryIs>' . PHP_EOL);
//        fwrite($file, '<LinearRing>' . PHP_EOL);
//        fwrite($file, '<coordinates>' . PHP_EOL);
//        fwrite($file, $coords . PHP_EOL);
//        fwrite($file, '</coordinates>' . PHP_EOL);
//        fwrite($file, '</LinearRing>' . PHP_EOL);
//        fwrite($file, '</outerBoundaryIs>' . PHP_EOL);
//        fwrite($file, '</Polygon>' . PHP_EOL);
//        fwrite($file, '</Placemark>' . PHP_EOL);
//        fwrite($file, '</Document>' . PHP_EOL);
//        fwrite($file, '</kml>' . PHP_EOL);
//        fclose($file);

        $coordinates=json_decode($coords);
        foreach ($coordinates as $coordinate){
            $lons[]=$coordinate[0];
            $lats[]=$coordinate[1];
        }
        echo json_encode(array(array(min($lons),max($lats)), array(max($lons),max($lats)), array(max($lons),min($lats)),array(min($lons),min($lats))));
    }

    public function croptreecover()
    {
        $locale='en_US.UTF-8';
        setlocale(LC_ALL,$locale);
        putenv('LC_ALL='.$locale);

        $rcommand="cd public/scripts; Rscript masktreecover.r";
        $output = shell_exec($rcommand);
        echo "<pre>$output</pre>";

    }


}