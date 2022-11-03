<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MapaModel;

class Dashdefault extends BaseController
{
	public function index()
	{

// THIS WORKS OK
//        $mapamodel= new MapaModel($db);
//        var_dump($mapamodel);
//        $dato = $mapamodel->find('1');
//        var_dump($dato);

//        $db = db_connect();
//        $query=$db->query('SELECT rid FROM tabla2');
//        foreach ($query->getResult() as $row)
//        {
//            echo $row->rid;
//        }
//        $db->close();


//
////        Esto funciona
//        $db = db_connect();
//        $query=$db->query('SELECT ST_AsGeoJSON(ST_Polygon(rast)) AS geomwkt FROM tabla3 WHERE rid < 3');
//        foreach ($query->getResult() as $row)
//        {
//            var_dump($row);
////            echo $row->poli;
//        }
//        $db->close();

//		return view('dashboard');
// view('layoutyheader_dashboard').view('aside_dashboard').view('body_dashboard').view('footer_dashboard');


//        esto
//		return   view('layouts/header_dashboard').view('layouts/aside_dashboard').view('main/body_dashboard').view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/footer_dashboard');

	}


    public function country($country)
    {

//        echo $country;

        if ($country=='ZM'){
            $data = array(
                'id' => '8958aa3a-f971-4958-b480-1c03c68eb645',
                'name' => 'Zambia',
                'country_code' => 'ZM',
                'latitude' => '-13.1338970',
                'longitude' => '27.8493320',
                'level' => 'country',
                'info' => 'Zambia',
                'zoom' => '8',
                'xmin' => '21.9799',
                'xmax' => '33.6742',
                'ymin' => '-18.0692',
                'ymax' => '-8.1941',

            );
        } elseif ($country=='HN'){
            $data = array(
                'id' => 'a3ecefb4-f071-4d82-a406-8eb1fe8d2da4',
                'name' => 'Honduras',
                'country_code' => 'HN',
                'latitude' => '15.1999990',
                'longitude' => '-86.2419050',
                'level' => 'country',
                'info' => 'Honduras',
                'zoom' => '8',
            );
        } elseif ($country=='KE'){
            $data = array(
                'id' => '3af259bd-8c31-48aa-8838-1f0433cc67ef',
                'name' => 'Kenya',
                'country_code' => 'KE',
                'latitude' => '-0.0235590',
                'longitude' => '37.9061930',
                'level' => 'country',
                'info' => 'Kenya',
                'zoom' => '8',
                'xmin' => '36',
                'xmax' => '37',
                'ymin' => '-1',
                'ymax' => '1',
            );

        } elseif ($country=='HT'){
            $data = array(
                'id' => 'dac12cba-a409-4d7f-9e0e-b3a637b6b9bf',
                'name' => 'Haiti',
                'country_code' => 'HT',
                'latitude' => '18.9711870',
                'longitude' => '-72.2852150',
                'level' => 'country',
                'info' => 'Haiti',
                'zoom' => '8',
                'xmin' => '-74.48621',
                'xmax' => '-71.59871',
                'ymin' => '17.99162',
                'ymax' => '20.10678',
            );

        }
        elseif ($country=='PE'){
            $data = array(
                'id' => 'd3624fdc-2e6d-418c-8c86-a05eca204f6a',
                'name' => 'Peru',
                'country_code' => 'PE',
                'latitude' => '-9.1899670',
                'longitude' => '-75.0151520',
                'level' => 'country',
                'info' => 'Peru',
                'zoom' => '8',
                'xmin' => '-75',
                'xmax' => '-74',
                'ymin' => '-8',
                'ymax' => '-9',
            );
        }
        elseif ($country=='NG'){
            $data = array(
//                este no es el id
                'id' => 'd3624fdc-2e6d-418c-8c86-a05eca204f6a',
                'name' => 'Nigeria',
                'country_code' => 'NG',
                'latitude' => '10',
                'longitude' => '8',
                'level' => 'country',
                'info' => 'Nigeria',
                'zoom' => '8',
                'xmin' => '9',
                'xmax' => '7',
                'ymin' => '11',
                'ymax' => '9',
            );
        }
        elseif ($country=='RW'){
            $data = array(
//                este no es el id
                'id' => 'd3624fdc-2e6d-418c-8c86-a05eca204f6a',
                'name' => 'Rwanda',
                'country_code' => 'RW',
                'latitude' => '-2',
                'longitude' => '28.8',
                'level' => 'country',
                'info' => 'Rwanda',
                'zoom' => '8',
                'xmin' => '29',
                'xmax' => '28',
                'ymin' => '2',
                'ymax' => '1.5',
            );
        }
        elseif ($country=='MC'){
            $data = array(
//                este no es el id
                'id' => 'd3624fdc-2e6d-418c-8c86-a05eca204f6a',
                'name' => 'Michoacán',
                'country_code' => 'MC',
                'latitude' => '19',
                'longitude' => '-101',
                'level' => 'country',
                'info' => 'Michoacán',
                'zoom' => '8',
                'xmin' => '-100',
                'xmax' => '-101',
                'ymin' => '20',
                'ymax' => '19',
            );
        }



        $undia=time() + (86400 * 30);
        setcookie('name', $data['name'], $undia, "/"); // 86400 = 1 day
        setcookie('country_code', $data['country_code'], $undia, "/"); // 86400 = 1 day
        setcookie('latitude', $data['latitude'], $undia, "/"); // 86400 = 1 day
        setcookie('longitude', $data['longitude'], $undia, "/"); // 86400 = 1 day

//        $absolutepath = getcwd();
//        $poligono = json_decode(file_get_contents($absolutepath . '/public/maps/countries/'.$country.'.geojson'));
//        $coordinates=$poligono->features[0]->geometry->coordinates[0];
//
//        foreach ($coordinates as $coordinate){
//            $lons[]=$coordinate[0];
//            $lats[]=$coordinate[1];
//        }
//        $bbox=json_encode(array(array(min($lons),max($lats)), array(max($lons),max($lats)), array(max($lons),min($lats)),array(min($lons),min($lats))));


//        $bbox=json_encode(array(array(floatval($data['ymin']),floatval($data['xmax'])), array(floatval($data['ymax']),floatval($data['xmax'])), array(floatval($data['ymax']),floatval($data['xmin'])),array(floatval($data['ymin']),floatval($data['xmin']))));
        $bbox=json_encode(array(array(floatval($data['xmin']),floatval($data['ymax'])), array(floatval($data['xmax']),floatval($data['ymax'])), array(floatval($data['xmax']),floatval($data['ymin'])),array(floatval($data['xmin']),floatval($data['ymin']))));
        $data['bbox']=$bbox;
        setcookie('bbox', $bbox, $undia, "/");

        $estatus['processing_button_color']='grey';
//        $estatus['processing_button_color']='red';

//        echo '<br>';
//        print_r($data);
//        echo '<br>';
//        print_r($estatus);
//        return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard').view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/footer_dashboard',$data);

        return   view('layouts/header_dashdefault').view('layouts/aside_dashdefault',$data).view('main/body_dashdefault',$estatus).view('layouts/support').view('layouts/footer_dashdefault',$data);
    }



    public function croparea()
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
//        var_dump($data);

        return   view('layouts/header_dashdefault').view('layouts/aside_dashdefault',$data).view('main/body_dashdefault',$estatus).view('layouts/support').view('layouts/loading').view('layouts/footer_dashdefault',$data);

    }

    public function generategeojson()
    {
        $coords=$_COOKIE["coords"];
        $absolutepath = getcwd();

        $file = fopen($absolutepath . '/public/maps/geojson/coords.geojson', 'w');
        fwrite($file, '{"type": "Feature","geometry": {"type": "Polygon","coordinates": [' . $coords . ']}}' . PHP_EOL);
        fclose($file);


        $coordinates=json_decode($coords);
        foreach ($coordinates as $coordinate){
            $lons[]=$coordinate[0];
            $lats[]=$coordinate[1];
        }
        echo json_encode(array(array(min($lons),max($lats)), array(max($lons),max($lats)), array(max($lons),min($lats)),array(min($lons),min($lats))));
    }

    public function cropnrb()
    {
        $locale='en_US.UTF-8';
        setlocale(LC_ALL,$locale);
        putenv('LC_ALL='.$locale);

        $cwd=getcwd();
        chdir("public/scripts");
        $rcommand="cd public/scripts; Rscript masknrb.r";
//        $rcommand="/anaconda/bin/Rscript masknrb.r";
        $output = shell_exec($rcommand);
//        echo "<pre>$output</pre>";
        chdir($cwd);
    }

    public function cropconnrb()
    {
        $locale='en_US.UTF-8';
        setlocale(LC_ALL,$locale);
        putenv('LC_ALL='.$locale);

        $cwd=getcwd();
        chdir("public/scripts");
        $rcommand="cd public/scripts; Rscript maskconnrb.r";
//        $rcommand="/anaconda/bin/Rscript maskconnrb.r";
        $output = shell_exec($rcommand);
//        echo "<pre>$output</pre>";
        chdir($cwd);
    }

    public function cropcontot()
    {
        $locale='en_US.UTF-8';
        setlocale(LC_ALL,$locale);
        putenv('LC_ALL='.$locale);

        $cwd=getcwd();
        chdir("public/scripts");
        $rcommand="cd public/scripts; Rscript maskcontot.r";
//        $rcommand="/anaconda/bin/Rscript maskcontot.r";
        $output = shell_exec($rcommand);
//        echo "<pre>$output</pre>";
        chdir($cwd);
    }


    public function global()
    {
        return view('global');
    }

    public function globalv2()
    {
        return view('globalv2');
    }

    public function globalmap()
    {
        return view('globalmap');
    }

}
