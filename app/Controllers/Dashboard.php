<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MapaModel;

class Dashboard extends BaseController
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
                'zoom' => '8'
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
            );
        }




        $undia=time() + (86400 * 30);
        setcookie('name', $data['name'], $undia, "/"); // 86400 = 1 day
        setcookie('country_code', $data['country_code'], $undia, "/"); // 86400 = 1 day
        setcookie('latitude', $data['latitude'], $undia, "/"); // 86400 = 1 day
        setcookie('longitude', $data['longitude'], $undia, "/"); // 86400 = 1 day

        $absolutepath = getcwd();
        $poligono = json_decode(file_get_contents($absolutepath . '/public/maps/countries/'.$country.'.geojson'));
        $coordinates=$poligono->features[0]->geometry->coordinates[0];

        foreach ($coordinates as $coordinate){
            $lons[]=$coordinate[0];
            $lats[]=$coordinate[1];
        }
        $bbox=json_encode(array(array(min($lons),max($lats)), array(max($lons),max($lats)), array(max($lons),min($lats)),array(min($lons),min($lats))));
        $data['bbox']=$bbox;
        setcookie('bbox', $bbox, $undia, "/");

        $estatus['processing_button_color']='grey';
//        $estatus['processing_button_color']='red';

//        echo '<br>';
//        print_r($data);
//        echo '<br>';
//        print_r($estatus);
//        return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard').view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/footer_dashboard',$data);

        return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard',$estatus).view('layouts/hagg',$data).view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/footer_dashboard_select',$data);
    }



}
