<?php

namespace App\Models;

use CodeIgniter\Model;

class CountriesModel extends Model
{

    protected $table = 'countries';
    protected $primaryKey = 'id';
    protected $allowedFields = ['latitude', 'longitude','tier','visible','zoom'];

//    protected $returnType = 'array';


    public function getdatos(){
        $resultado=$this->get()->getResultArray();
        return $resultado;
    }

    public function getdatosvisible(){
        $data=array(
            'visible'=> 't',
        );

        $resultado=$this->where($data)->get()->getResultArray();
        return $resultado;
    }

    public function getdato($data){
        $resultado=$this->where($data)->get()->getRowArray();
        return $resultado;
    }


    public function updatedato($id,$data){
        $id=array(
            'id'=> $id,
        );

//        var_dump($id);
//        var_dump($data);
//        $this->update($data, ['id' => $id]);
//        $this->where('id',$id)->update($data);
        $this->update($id, $data);
        return;
;
    }


}