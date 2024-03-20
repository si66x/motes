<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [
            'title' => 'Sign Up | MOTES',
        ];
        return view('./pages/signup', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama_depan'    => 'required|min_length[3]|max_length[20]',
            'nama_belakang' => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
        
        $data['title'] = 'Sign Up | MOTES';

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'nama_depan'    => $this->request->getVar('nama_depan'),
                'nama_belakang' => $this->request->getVar('nama_belakang'),
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            return redirect()->to('./pages/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('./pages/signup', $data);
        }
    }
}
