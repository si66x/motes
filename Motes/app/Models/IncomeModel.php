<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\UserModel;

class IncomeModel extends Model
{
    protected $table = 'income';
    protected $allowedFields = ['income_id', 'amount', 'explanation', 'date', 'category', 'user_id'];

    public function getIncome()
    {
        $data = IncomeModel::findAll();
        return $data;
    }
}
