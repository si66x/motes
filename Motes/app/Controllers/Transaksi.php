<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IncomeModel;
use App\Models\ExpensesModel;


class Transaksi extends Controller
{

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [
            'title' => 'Sign Up | MOTES',
        ];
        return view('./pages/inputie', $data);
    }


  


    public function submit()
    {

        helper(['form']);

        $rules = array(
            'tipe'     => 'required',
            'amount'   => 'required|min_length[3]|max_length[20]',
            'category' => 'required',
            'date'     => 'required|min_length[2]|max_length[50]',
            'explanation' => 'required'
        );
        // echo "<h1>isi dari tipe = " . $rules['tipe'] . "</h1><br>";
        $data['title'] = 'Input Income and Expenses | MOTES';
        $data['tipe'] = $this->request->getVar('tipe');
        if ($data['tipe'] == 'income') {
            if ($this->validate($rules)) {
                $model = new IncomeModel();
                $data = [
                    'amount'   => $this->request->getVar('amount'),
                    'explanation' => $this->request->getVar('explanation'),
                    'category' => $this->request->getVar('category'),
                    'date'     => $this->request->getVar('date'),
                ];
                
                $model->save($data);
                return redirect()->to('./pages/inputie');
            } else {
                $data['validation'] = $this->validator;
                echo view('./pages/inputie', $data);
            }
        } else {
            if ($this->validate($rules)) {
                $model = new ExpensesModel();
                $data = [
                    'amount'   => $this->request->getVar('amount'),
                    'explanation' => $this->request->getVar('explanation'),
                    'category' => $this->request->getVar('category'),
                    'date'     => $this->request->getVar('date'),
                ];
                $model->save($data);
                return redirect()->to('./pages/inputie');
            } else {
                $data['validation'] = $this->validator;
                echo view('./pages/inputie', $data);
            }
        }
    }
}
