<?php

namespace App\Controllers;

use App\Models\IncomeModel;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sign In | MOTES',
        ];

        return view('./pages/signin', $data);
    }

    public function auth()
    {

        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->getUser();

        if ($data) {
            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $session->set('user_id', $data->user_id);
                $session->set('name', $data->nama_depan);
                $incomeModel = new IncomeModel();
                // $incomeModel->getDataByUserId($session->get('user_id'));
                // $ses_data = [
                //     'user_id'       => $data['user_id'],
                //     'nama_depan'     => $data['nama_depan'],
                //     'nama_belakang'     => $data['nama_belakang'],
                //     'email'    => $data['email'],
                //     'logged_in'     => TRUE,
                //     'title' => 'Sign In | MOTES'
                // ];
                // $session->set($ses_data);
                return redirect()->to('./pages/mainmenu');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('./pages/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('./pages/signin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('./pages/signin');
    }
}
