<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TempatWisataModel;

class TempatWisata extends BaseController
{
    protected $tempat_wisata;

    function __construct()
    {
        $this->tempat_wisata = new TempatWisataModel();
    }

    public function index()
    {
		// $data['foto1'] = $this->tempat_wisata->findAll();
		// return view('tempat_wisata/index', $data); 

        $data['tempat_wisata'] = $this->tempat_wisata->findAll();
        return view('tempat_wisata/index', $data);
    }
    public function upload()
    {
        $data['title'] = 'Upload Files';
        
        if($this->request->getMethod() == 'post') {

                $this->request->getPost('nama_tempat');
                $file = $this->request->getFile('file');
                if($file->isValid() && !$file->hasMoved()) {
                    if($file->move(WRITEPATH.'uploads')) {
                        echo '<p>Upload Berhasil</p>';
                    } else {
                        echo $file->getErrorString() . ' ' . $file->getError();
                    }
                }
                // echo '<pre>';
                // print_r($file);
            }  
        
        echo view('tempat_wisata/upload', $data);
        // echo view('layout/header', $data);
        // echo view('layout/footer');
}
    public function create()
    {
        return view('tempat_wisata/upload');
    }
    // public function save()
    // {
    //     $model = new TempatWisataModel();
    //     if($this->request->getMethod() !== 'post') {
    //         return redirect()->to('tempatwisata');
    //         $validation = $this->validate([
    //             'file_upload'   => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
    //         ]);
    //         if ($validation == false){
    //             return $this->index();
    //         }else {
    //             $upload = $this->request->getFile('file_upload');
    //             $upload->move(WRITEPATH . '/public/disc/img');
    //             $data = array(
    //                 'nama'  => $this->request->getPost('nama'),
    //                 'poto1' => $upload->getName()
    //             );
    //             $model->simpan_gambar($data);
    //             return redirect()->to(base_url('/tempatwisata'));
    //         }
    //     }
    //     // if (!$this->validate([
    //     //     'nama' => [
    //     //         'rules' => 'required',
    //     //         'errors' => [
    //     //             'required' => '{field} Tidak boleh kosong'
    //     //         ]
    //     //     ],
    //     //     'foto1' => [
    //     //         'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
    //     //         'errors' => [
    //     //             'uploaded' => 'Harus Ada File yang diupload',
    //     //             'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
    //     //             'max_size' => 'Ukuran File Maksimal 2 MB'
    //     //         ]

    //     //     ]
    //     // ])) 

    // //     {
    // //         session()->setFlashdata('error', 'Data anda belum masuk');
    // //         return redirect()->back()->withInput();
    // //     }

    // //     $berkas = new TempatWisataModel();
    // //     $dataBerkas = $this->request->getFile('foto1');
    // //     $fileName = $dataBerkas->getRandomName();
    // //     $berkas->insert([
    // //         'foto1'     => $fileName,
    // //         'nama'      => $this->request->getPost('nama')
    // //     ]);
    // //     $dataBerkas->move('public/upload/', $fileName);
    // //     session()->setFlashdata('success', 'foto Berhasil diupload');
    // //     return redirect()->to(base_url('tempat_wisata/index'));
    //  }
}
