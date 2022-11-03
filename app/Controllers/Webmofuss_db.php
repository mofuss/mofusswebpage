<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CountriesModel;

class Webmofuss extends BaseController
{
	public function index()
	{
        $modelo = new Countriesmodel($db);
        $data = [
            "countries" => $modelo->getdatosvisible(),
        ];
//        var_dump($data);

        return view('webmofuss',$data);
	}

    public function configure()
    {
        $modelo = new Countriesmodel($db);
        $data = [
            "countries" => $modelo->getdatos(),
        ];
//        var_dump($data);
        return view('configure',$data);
    }

    public function edit($country_id) {
	    $modelo = new Countriesmodel($db);
//        echo $country_id;
        $data=array(
            'id'=> $country_id,
        );

        $datos = $modelo->getdato($data);
//        var_dump($datos);
        return view('editcountry', $datos);
    }

    public function updateCountry() {

        $modelo = new Countriesmodel($db);
        $request = \Config\Services::request();
        $id=$request->getPostGet('id');
//        $name=$request->getPostGet('name');

        $data=array(
//            'id'=> $request->getPostGet('id'),
            'latitude'=> $request->getPostGet('latitude'),
            'longitude'=> $request->getPostGet('longitude'),
            'tier'=> $request->getPostGet('tier'),
            'zoom'=> $request->getPostGet('zoom'),
            'visible'=> $request->getPostGet('visible'),
        );

        $modelo->updatedato($id,$data);

//        $data['id']=$request->getPostGet('id');
//        $data['name']=$request->getPostGet('name');
//        var_dump($data);

//        return view('editcountry', $data);
        return redirect()->to(base_url().'/webmofuss/configure');

    }



}
