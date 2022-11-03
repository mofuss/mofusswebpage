<?php namespace App\Controllers;

use CodeIgniter\Controller;
//use App\Models\CountriesModel;
use CodeIgniter\Files\File;

class Runc extends BaseController
{
	public function index()
	{
        return view('runc', ['errors' => [],'status' => 0]);
	}

    public function restart()
    {
        return view('runc', ['errors' => [],'status' => 0]);
    }

    public function uploadfiles()
    {
        $request = \Config\Services::request();
//        $nombre=$request->getPostGet('nombre');
//        print_r($nombre);

        $validationRule = [
            'userfile1' => [
                'label' => 'First File',
                'rules' => 'uploaded[userfile1]'
                    . '|is_image[userfile1]'
                    . '|mime_in[userfile1,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile1,400]'
                    . '|max_dims[userfile1,1000,1000]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
            return view('runc', $data);
        }


        $validationRule2 = [
            'userfile2' => [
                'label' => 'Second File',
                'rules' => 'uploaded[userfile2]'
                    . '|is_image[userfile2]'
                    . '|mime_in[userfile2,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile2,400]'
                    . '|max_dims[userfile2,1000,1000]',
            ],
        ];
        if (! $this->validate($validationRule2)) {
            $data = ['errors' => $this->validator->getErrors()];
            return view('runc', $data);
        }


        $file1 = $this->request->getFile('userfile1');
        $file1 = $file1->move(WRITEPATH . 'uploads','file1.png', true);

        $file2 = $this->request->getFile('userfile2');
        $file2 = $file2->move(WRITEPATH . 'uploads','file2.png', true);

        return view('runc', ['errors' => [],'status' => 1]);
    }

    public function executetask()
    {
//        echo 'Executing...';
        $cwd=getcwd();
//        echo $cwd;
        chdir("writable/uploads");
        $rcommand="zip output.zip file1.png file2.png";
        $output = shell_exec($rcommand);
////        echo "<pre>$output</pre>";
        chdir($cwd);

    }


}
