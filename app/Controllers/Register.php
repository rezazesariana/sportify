<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        $data = [];
        echo view('part/header.php');
        echo view('register.php', $data);
        echo view('part/footer.php');
    }
    
    public function save()
    {
        //include helper form
        $data = [];
        //set rules validation form
        $rules = [
            'nama'          => 'required|max_length[100]',
            'notelp'        => 'required|max_length[15]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'alamat'       => 'required|max_length[100]',
            'password'      => 'required|min_length[6]|max_length[100]',
            'confirmpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'no_telp'  => $this->request->getVar('notelp'),
                'alamat'  => $this->request->getVar('alamat'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('part/header.php');
            echo view('register.php', $data);
            echo view('part/footer.php');
        }
         
    }
}
