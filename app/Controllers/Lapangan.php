<?php

namespace App\Controllers;

use App\Models\FieldCategoryModel;
use App\Models\FieldModel;

class Lapangan extends BaseController
{
    public function index()
    {
        $kategoriModel = new FieldCategoryModel();
        $fieldModel = new FieldModel();

        $fields = $fieldModel->findAll();

        foreach ($fields as &$field) {
            // Get Photo
            $field['nama_kategori'] = $kategoriModel->where([
                'kategori_id' => $field['kategori_id'],
            ])->first();
        }

        $data['fields'] = $fields;

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('lapangan.php', $data);
        echo view('part/admin/footer.php');
    }

    public function tambah()
    {
        $kategoriModel = new FieldCategoryModel();
        $categories = $kategoriModel->findAll();

        $data['categories'] = $categories;

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('lapangan_add.php', $data);
        echo view('part/admin/footer.php');
    }

    public function create() 
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'          => 'required|max_length[100]',
            'lokasi'        => 'required|max_length[100]',
            'kategori_id'   => 'required',
            'harga'         => 'required|max_length[10]',
            'deskripsi'     => 'required|max_length[500]',
            'deskripsi_pendek' => 'required|max_length[300]',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $fieldModel = new FieldModel();
            $fieldModel->insert([
                'nama'     => $this->request->getPost('nama'),
                'lokasi'  => $this->request->getPost('lokasi'),
                'kategori_id'  => $this->request->getPost('kategori_id'),
                'harga'    => $this->request->getPost('harga'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deskripsi_pendek' => $this->request->getPost('deskripsi_pendek'),
            ]);
            return redirect('admin/lapangan');
        }
    }

    public function edit($id)
    {
        // ambil kategori yang akan diedit
        $fieldModel = new FieldModel();
        $data['field'] = $fieldModel->where('field_id', $id)->first();
        // lakukan validasi data kategori
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'          => 'required',
            'lokasi'        => 'required',
            'kategori_id'   => 'required',
            'harga'         => 'required',
            'deskripsi'     => 'required',
            'deskripsi_pendek' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $fieldModel->update($id, [
                'nama'     => $this->request->getPost('nama'),
                'lokasi'  => $this->request->getPost('lokasi'),
                'kategori_id'  => $this->request->getPost('kategori_id'),
                'harga'    => $this->request->getPost('harga'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deskripsi_pendek' => $this->request->getPost('deskripsi_pendek'),
            ]);
            return redirect('admin/lapangan');
        }

        $kategoriModel = new FieldCategoryModel();
        $categories = $kategoriModel->findAll();

        $data['categories'] = $categories;

        echo view('part/admin/header.php');
        echo view('part/admin/top_menu');
        echo view('part/admin/side_menu');
        echo view('lapangan_edit.php', $data);
        echo view('part/admin/footer.php');
    }

    public function delete($id) {
        $fieldModel = new FieldModel();
        $fieldModel->delete($id);
        return redirect('admin/lapangan');
    }
}
