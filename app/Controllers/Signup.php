<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Signup extends BaseController
{
    public function index()
    {
        return view('users/signup');
    }
    function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
            // $validation =  \Config\Services::validation();

            // $rules = [
            //     "id" => [
            //         "label" => "id",
            //         "rules" => "required|min_length[3]|max_length[20]|is_unique[users.id]"
            //     ],
            //     "usename" => [
            //         "label" => "username",
            //         "rules" => "required|min_length[3]|max_length[20]"
            //     ],
            //     "email" => [
            //         "label" => "email",
            //         "rules" => "required|min_length[3]|max_length[20]|valid_email|is_unique[users.email]"
            //     ],
            //     "password" => [
            //         "label" => "password",
            //         "rules" => "required|min_length[8]|max_length[20]"
            //     ],
            //     "password_confirm" => [
            //         "label" => "Confirm Password",
            //         "rules" => "matches[password]"
            //     ]
            // ];
                $users        = new UsersModel();
                $pass         = $this->request->getVar("password");
                $usersdata = [
                    "username"  => $this->request->getVar("username"),
                    "email"     => $this->request->getVar("email"),
                    "password"  => md5($pass),
                    "role"      => 'public',
                    "status"    => 1
                ];
                $users->save($usersdata);
                $session = session();
                $session->setFlashData("success", "Registrasi Berhasil");
                return redirect()->to(base_url('/home'));
        }
    }

    // YANG INI GAJADI DIPAKE!!!!
    // public function proses()
    // {
    //     if (!$this->validate([
    //         'username' => [
    //             'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi',
    //                 'min_length' => '{field} Minimal 4 Karakter',
    //                 'max_length' => '{field} Maksimal 20 Karakter',
    //                 'is_unique' => 'Username sudah digunakan sebelumnya'
    //             ]
    //         ],
    //         'password' => [
    //             'rules' => 'required|min_length[4]|max_length[50]',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi',
    //                 'min_length' => '{field} Minimal 4 Karakter',
    //                 'max_length' => '{field} Maksimal 50 Karakter',
    //             ]
    //         ],
    //         'email' => [
    //             'rules' => 'required|valid_email',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi',
    //                 'min_length' => '{field} Minimal 4 Karakter',
    //                 'max_length' => '{field} Maksimal 100 Karakter',
    //             ]
    //         ],
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->to(base_url('signup'))->withInput();
    //     }
    //     $users = new UsersModel();
    //     $users->insert([
    //         'username' => $this->request->getVar('username'),
    //         'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
    //         'email' => $this->request->getVar('email')
    //     ]);
    //     return redirect()->to(base_url('/home'));
    // }
}
