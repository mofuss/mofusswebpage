<?php namespace App\Controllers;
set_time_limit(0);

class Generatekml extends BaseController
{
public function index()
{
$data = array(
'name' => $_COOKIE["name"],
'country_code' => $_COOKIE["country_code"],
'latitude' => $_COOKIE["latitude"],
'longitude' => $_COOKIE["longitude"],
'level' => 'polygon',
'info' => 'Selected Polygon',
);
return   view('layouts/header_dashboard').view('layouts/aside_dashboard',$data).view('main/body_dashboard').view('layouts/hagg').view('layouts/crop_locs').view('layouts/friction').view('layouts/cost_distance').view('layouts/select').view('layouts/loading').view('layouts/footer_dashboard',$data);
}


}