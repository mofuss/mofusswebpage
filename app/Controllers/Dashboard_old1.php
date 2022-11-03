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


        $db = db_connect();
//        $query=$db->query('SELECT ST_DumpAsPolygons(rast) FROM tabla3 WHERE rid = 1');
//        $query=$db->query('SELECT ST_AsText(ST_Polygon(rast)) AS geomwkt FROM tabla3 WHERE rid = 1');
        $query=$db->query('SELECT ST_AsGeoJSON(ST_Polygon(rast)) AS geomwkt FROM tabla3 WHERE rid < 3');
//        $query=$db->query('SELECT ST_AsGeoJSON(ST_Multi(rast))::json AS geomwkt FROM tabla3 WHERE rid < 3');
//        $query=$db->query('SELECT ST_AsGeoJSON(ST_Polygon(rast)) AS geomwkt FROM tabla3');

        foreach ($query->getResult() as $row)
        {
            var_dump($row);
//            echo $row->poli;
        }
        $db->close();

//		return view('dashboard');
// view('layoutyheader_dashboard').view('aside_dashboard').view('body_dashboard').view('footer_dashboard');
//		return   view('layouts/header_dashboard').view('layouts/aside_dashboard').view('layouts/body_dashboard').view('layouts/footer_dashboard');
	}




}
