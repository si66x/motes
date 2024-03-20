<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ExpensesModel;
use App\Models\IncomeModel;

class Pages extends Controller
{
    //========================Sebelum Login========================//
    public function index()
    {
        $data = [
            'title' => 'Home | MOTES',
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | MOTES',
        ];

        return view('pages/about', $data);
    }

    public function signin()
    {
        $data = [
            'title' => 'Sign In | MOTES',
        ];

        return view('pages/signin', $data);
    }

    public function signup()
    {
        $data = [
            'title' => 'Sign Up | MOTES',
        ];

        return view('pages/signup', $data);
    }
    //====================================================================

    //===================================Setelah Login================================

    public function mainmenu()
    {
        $data = [
            'title' => 'Main Menu | MOTES',
        ];

        return view('pages/mainmenu', $data);
    }

    public function inputie()
    {
        $data = [
            'title' => 'Input Income and Expenses | MOTES',
        ];

        return view('pages/inputie', $data);
    }

    public function ereport()
    {

        $model = new ExpensesModel();

        $data = array(
            'expenses' => $model->getExpense(),
            'title' => 'Expenses Report | MOTES',
        );

        return view('pages/ereport', $data);
    }

    public function ireport()
    {
        $model = new IncomeModel();

        // $data = array(
        //     'income' => $model->getIncome(),
        //     'title' => 'Income Report | MOTES',
        //     'total_bulanan' => $model->sum_incomeMonthly(),
        //     'total_tahunan' => $model->sum_incomeAnnual(),
        // );
        $data['title'] = 'Income Report | MOTES';
        $data['income'] = $model->getIncome();


        // dd($data);
        return view('pages/ireport', $data);
    }
    public function profile()
    {
        $data = [
            'title' => 'Profile | MOTES',
        ];

        return view('pages/profile', $data);
    }

    //     public function save()
    //     {
    //         //include helper form
    //         helper(['form']);
    //         //set rules validation form
    //         $rules = [
    //             'nama_depan'    => 'required|min_length[3]|max_length[20]',
    //             'nama_belakang' => 'required|min_length[3]|max_length[20]',
    //             'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
    //             'password'      => 'required|min_length[6]|max_length[200]',
    //             'confpassword'  => 'matches[password]'
    //         ];

    //         if ($this->validate($rules)) {
    //             $model = new UserModel();
    //             $data = [
    //                 'nama_depan'    => $this->request->getVar('nama_depan'),
    //                 'nama_belakang' => $this->request->getVar('nama_belakang'),
    //                 'email'         => $this->request->getVar('email'),
    //                 'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
    //             ];
    //             $model->save($data);
    //             return redirect()->to('./pages/signin');
    //         } else {
    //             $data['validation'] = $this->validator;
    //             echo view('./pages/signup', $data);
    //         }
    //     }

    //     public function auth()
    //     {
    //         $session = session();
    //         $model = new UserModel();
    //         $email = $this->request->getVar('email');
    //         $password = $this->request->getVar('password');
    //         $data = $model->where('email', $email)->first();
    //         if ($data) {
    //             $pass = $data['password'];
    //             $verify_pass = password_verify($password, $pass);
    //             if ($verify_pass) {
    //                 $ses_data = [
    //                     'user_id'       => $data['user_id'],
    //                     'nama_depan'     => $data['nama_depan'],
    //                     'nama_belakang'     => $data['nama_belakang'],
    //                     'email'    => $data['email'],
    //                     'logged_in'     => TRUE,
    //                     'title' => 'Sign In | MOTES'
    //                 ];
    //                 $session->set($ses_data);
    //                 return redirect()->to('./pages/mainmenu');
    //             } else {
    //                 $session->setFlashdata('msg', 'Wrong Password');
    //                 return redirect()->to('./pages/signin');
    //             }
    //         } else {
    //             $session->setFlashdata('msg', 'Email not Found');
    //             return redirect()->to('./pages/signin');
    //         }
    //     }

    //     public function logout()
    //     {
    //         $session = session();
    //         $session->destroy();
    //         return redirect()->to('./pages/signin');
    //     }
}
