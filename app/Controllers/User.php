<?php

namespace App\Controllers;

use App\Models\FieldCategoryModel;
use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        $data['users'] = $users;

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('user.php', $data);
        echo view('part/admin/footer.php');
    }

    public function tambah()
    {
        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('user_add.php');
        echo view('part/admin/footer.php');
    }

    public function create() 
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'          => 'required|max_length[100]',
            'no_telp'        => 'required|max_length[15]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'alamat'       => 'required|max_length[100]',
            'password'      => 'required|min_length[6]|max_length[100]',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $userModel = new UserModel();
            $userModel->insert([
                'nama'     => $this->request->getPost('nama'),
                'no_telp'  => $this->request->getPost('no_telp'),
                'alamat'  => $this->request->getPost('alamat'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ]);
            return redirect('admin/user');
        }
    }

    public function edit($id)
    {
        // ambil kategori yang akan diedit
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->first();
        // lakukan validasi data kategori
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'          => 'required|max_length[100]',
            'no_telp'        => 'required|max_length[15]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'alamat'       => 'required|max_length[100]',
            'password'      => 'required|min_length[6]|max_length[100]',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $userModel->update($id, [
                'nama'     => $this->request->getPost('nama'),
                'no_telp'  => $this->request->getPost('no_telp'),
                'alamat'  => $this->request->getPost('alamat'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ]);
            return redirect('admin/user');
        }

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('user_edit.php', $data);
        echo view('part/admin/footer.php');
    }

    public function delete($id) {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect('admin/user');
    }
}
