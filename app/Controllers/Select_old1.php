<?php namespace App\Controllers;
$default = ini_get('max_execution_time');
//echo $default;
set_time_limit(0);
//ob_implicit_flush(true);

//use CodeIgniter\Controller;


class Select extends BaseController
{
	public function index()
	{
        $request = \Config\Services::request();

        $coords = $request->getPostGet('coords');
        $coords = substr($coords,1,-1);
        $coords = str_replace("]",",0 ",$coords);
        $coords = str_replace("[","",$coords);

//        var_dump($coords);
        $absolutepath=getcwd().'/public/scripts-gis2/LULCC/SourceData/InVector_GCS';

//        $file = fopen($absolutepath . '/coords.kml','w');
        $file = fopen($absolutepath . '/coords.kml','w');
        fwrite($file, '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL);
        fwrite($file, '<kml xmlns="http://www.opengis.net/kml/2.2">'.PHP_EOL);
        fwrite($file, '<Document>'.PHP_EOL);
        fwrite($file, '<Placemark>'.PHP_EOL);
        fwrite($file, ' <name>Polygon1</name>>'.PHP_EOL);
        fwrite($file, '<Polygon>'.PHP_EOL);
        fwrite($file, '<outerBoundaryIs>'.PHP_EOL);
        fwrite($file, '<LinearRing>'.PHP_EOL);
        fwrite($file, '<coordinates>'.PHP_EOL);
//        fwrite($file, substr($coords,1,-1).PHP_EOL);
        fwrite($file, $coords.PHP_EOL);
        fwrite($file, '</coordinates>'.PHP_EOL);
        fwrite($file, '</LinearRing>'.PHP_EOL);
        fwrite($file, '</outerBoundaryIs>'.PHP_EOL);
        fwrite($file, '</Polygon>'.PHP_EOL);
        fwrite($file, '</Placemark>'.PHP_EOL);
        fwrite($file, '</Document>'.PHP_EOL);
        fwrite($file, '</kml>'.PHP_EOL);
        fclose($file);

        $file = fopen($absolutepath . '/coords.geojson','w');
        fwrite($file, '{"type": "Feature","geometry": {"type": "Polygon","coordinates": ['.$coords.']}}'.PHP_EOL);
        fclose($file);


        $data = array(
             'name' => $_COOKIE["name"],
            'country_code' => $_COOKIE["country_code"],
            'latitude' => $_COOKIE["latitude"],
            'longitude' => $_COOKIE["longitude"],
            'level' => 'polygon',
            'info' => 'Selected Polygon',
        );
//        $rcommand="chdir /public/scripts && Rscript prueba0.r resolution=100 GEpoly=0";

//        exec( '/public/scripts/Rscript prueba0.r');

//        $ret = exec("cd /public/scripts/; Rscript prueba0.r resolution=100 GEpoly=0 ", $out, $err);
//        $ret = exec("cd /public/scripts-gis2/; Rscript harmonizer_test2020_1.R", $out, $err);
//        $ret = exec("cd public/scripts-gis2/ && pwd", $out, $err);

//        $ret = exec("cd /public/scripts-gis2/; Rscript prueba0.r", $out, $err);
//        $ret = exec("cd /public/scripts-gis2/; Rscript harmonizertest20201.r", $out, $err);
//        $ret = exec("cd /public/scripts-gis2/; Rscript prueba0.r resolution=100 GEpoly=0 ", $out, $err);


//        $ret = exec("cd public/scripts-gis2/ && Rscript harm0.r", $out, $err);
//        var_dump($ret);
//        var_dump($out);
//        var_dump($err);


//        $exe_command = 'Rscript prueba0.r resolution=100 GEpoly=0 ';
//        $exe_command = 'cd /public/scripts-gis2/; Rscript prueba0.r resolution=100 GEpoly=0 ';



//        $exe_command = 'cd public/scripts-gis2/ && Rscript harm.r';
//
//        $descriptorspec = array(
//            0 => array("pipe", "r"),  // stdin
//            1 => array("pipe", "w"),  // stdout -> we use this
//            2 => array("pipe", "w")   // stderr
//        );
//
//        $process = proc_open($exe_command, $descriptorspec, $pipes);
//
//        if (is_resource($process))
//        {
//
//            while( ! feof($pipes[1]))
//            {
//                $return_message = fgets($pipes[1], 1024);
//                if (strlen($return_message) == 0) break;
//
//                echo $return_message.'<br />';
//                ob_flush();
//                flush();
//            }
//        }


//        $rcommand="cd ../scripts-gis/Test && touch test.txt && Rscript prueba0.r resolution=100 GEpoly=0 --no-save";


//        prueba1
//        $rcommand="cd public/scripts; ls; Rscript prueba0.r resolution=100 GEpoly=0";

//        prueba2
//        $rcommand="cd public/scripts-gis2; Rscript harmonizer_test2020_1.R";
//        $output = shell_exec($rcommand);
//        echo "<pre>$output</pre>";

        $locale='en_US.UTF-8';
        setlocale(LC_ALL,$locale);
        putenv('LC_ALL='.$locale);

//        prueba3
        $rcommand="cd public/scripts-gis2; Rscript harm0.r";
        $output = shell_exec($rcommand);
        echo "<pre>$output</pre>";



//        return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard').view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/footer_dashboard',$data);

	}






}


