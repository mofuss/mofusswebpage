<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CountriesModel;

class Webmofussmain extends BaseController
{
	public function index()
	{
        return view('webmofussmain');
	}

	public function configure()
{
	$modelo= new Countriesmodel($db);
	$data = [
	"countries" => $modelo->getdatos(),

	];
	var_dump($data);

}





}
