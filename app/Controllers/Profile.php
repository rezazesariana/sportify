<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\FieldModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = $userModel->where('user_id', session()->get('user_id'))->first();

        $data = [
            'user' => $user,
        ];

        echo view('part/header.php');
        echo view('profile.php', $data);
        echo view('part/footer.php');
    }

    public function save()
    {
        $userModel = new UserModel();

        //include helper form
        $data = [];
        //set rules validation form
        $rules = [
            'nama' => 'required|max_length[100]',
            'no_telp' => 'required|max_length[15]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'alamat' => 'required|max_length[100]',
        ];
         
        if($this->validate($rules)){
            $user_id = $this->request->getVar('user_id');

            $userModel->update($user_id, [
                "nama" => $this->request->getVar('nama'),
                "no_telp" => $this->request->getVar('no_telp'),
                "alamat" => $this->request->getVar('alamat'),
                "email" => $this->request->getVar('email'),
            ]);
            
            return redirect()->to('/profile');
        } else {
            $user = $userModel->where('user_id', session()->get('user_id'))->first();

            $data = [
                'user' => $user,
                'validation' => $this->validator,
            ];

            echo view('part/header.php');
            echo view('profile.php', $data);
            echo view('part/footer.php');
        }    
    }

    public function savePassword()
    {
        $userModel = new UserModel();

        //include helper form
        $data = [];
        //set rules validation form
        $rules = [
            'new_password' => 'required|min_length[6]|max_length[100]',
            'conf_password'  => 'matches[new_password]'
        ];
         
        if($this->validate($rules)){
            $user_id = $this->request->getVar('user_id');

            $userModel->update($user_id, [
                "password" => $this->request->getVar('new_password'),
            ]);
            
            return redirect()->to('/profile');
        } else {
            $user = $userModel->where('user_id', session()->get('user_id'))->first();

            $data = [
                'user' => $user,
                'validation' => $this->validator,
            ];

            echo view('part/header.php');
            echo view('profile.php', $data);
            echo view('part/footer.php');
        }    
    }

    public function deleteAccount()
    {
        $session = session();
        $userModel = new UserModel();

        $userModel->delete(session()->get('user_id'));

        
        $session->destroy();
        
        return redirect()->to('/');    
    }
}
