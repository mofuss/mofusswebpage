<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CountriesModel;

class Analysistype extends BaseController
{
	public function index()
	{
        return view('analysistype').view('layouts/typeanalysis').view('layouts/footer_analysistype');
	}

//	public function configure()
//{
//	$modelo= new Countriesmodel($db);
//	$data = [
//	"countries" => $modelo->getdatos(),
//
//	];
//	var_dump($data);
//
//}





}
