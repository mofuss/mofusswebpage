<?php namespace App\Controllers;

set_time_limit(0);

class Select extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();

        $coords = $request->getPostGet('coords');
        $coords = substr($coords, 1, -1);
        $coords = str_replace("]", ",0 ", $coords);
        $coords = str_replace("[", "", $coords);

//        var_dump($coords);
        $absolutepath = getcwd() . '/public/scripts-gis2/LULCC/SourceData/InVector_GCS';

//        $file = fopen($absolutepath . '/coords.kml','w');
        $file = fopen($absolutepath . '/coords.kml', 'w');
        fwrite($file, '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL);
        fwrite($file, '<kml xmlns="http://www.opengis.net/kml/2.2">' . PHP_EOL);
        fwrite($file, '<Document>' . PHP_EOL);
        fwrite($file, '<Placemark>' . PHP_EOL);
        fwrite($file, ' <name>Polygon1</name>>' . PHP_EOL);
        fwrite($file, '<Polygon>' . PHP_EOL);
        fwrite($file, '<outerBoundaryIs>' . PHP_EOL);
        fwrite($file, '<LinearRing>' . PHP_EOL);
        fwrite($file, '<coordinates>' . PHP_EOL);
//        fwrite($file, substr($coords,1,-1).PHP_EOL);
        fwrite($file, $coords . PHP_EOL);
        fwrite($file, '</coordinates>' . PHP_EOL);
        fwrite($file, '</LinearRing>' . PHP_EOL);
        fwrite($file, '</outerBoundaryIs>' . PHP_EOL);
        fwrite($file, '</Polygon>' . PHP_EOL);
        fwrite($file, '</Placemark>' . PHP_EOL);
        fwrite($file, '</Document>' . PHP_EOL);
        fwrite($file, '</kml>' . PHP_EOL);
        fclose($file);

        $file = fopen($absolutepath . '/coords.geojson', 'w');
        fwrite($file, '{"type": "Feature","geometry": {"type": "Polygon","coordinates": [' . $coords . ']}}' . PHP_EOL);
        fclose($file);


        $data = array(
            'name' => $_COOKIE["name"],
            'country_code' => $_COOKIE["country_code"],
            'latitude' => $_COOKIE["latitude"],
            'longitude' => $_COOKIE["longitude"],
            'level' => 'polygon',
            'info' => 'Selected Polygon',
        );

//        return view('layouts/header_dashboard').view('layouts/loading').view('layouts/footer_dashboard',$data);


//        $locale='en_US.UTF-8';
//        setlocale(LC_ALL,$locale);
//        putenv('LC_ALL='.$locale);
//
////        prueba3
//        $rcommand="cd public/scripts-gis2; Rscript prueba0.r resolution=100 GEpoly=0";
//        $output = shell_exec($rcommand);
////        echo "<pre>$output</pre>";
//
//
//
        return view('layouts/header_dashboard') . view('layouts/aside_dashboard', $data) . view('main/body_dashboard') . view('layouts/hagg') . view('layouts/crop_locs') . view('layouts/friction') . view('layouts/cost_distance') . view('layouts/select') . view('layouts/loading') . view('layouts/footer_dashboard', $data);


    }


}

