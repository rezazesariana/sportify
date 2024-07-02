<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('part/header.php');
        echo view('register.php', $data);
        echo view('part/footer.php');
    }
    
    public function save()
    {
        //include helper form
        helper(['form']);
        $data = [];
        //set rules validation form
        $rules = [
            'name'          => 'required|max_length[100]',
            'notelp'        => 'required|max_length[15]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'address'       => 'required|max_length[100]',
            'password'      => 'required|min_length[6]|max_length[100]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'nama'     => $this->request->getVar('name'),
                'no_telp'  => $this->request->getVar('notelp'),
                'address'  => $this->request->getVar('address'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($data);
            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            // echo view('register', $data);
        }
         
    }
}
