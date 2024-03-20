<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpensesModel extends Model
{
    protected $table = 'expense';
    protected $allowedFields = ['expense_id', 'amount', 'explanation', 'date', 'category'];

    public function getExpense()
    {

        $data = ExpensesModel::findAll();
        return $data;
    }

    // public function sum_incomeMonthly()
    // {
    //     return $this->db->query("SELECT SUM(amount) as totalBulanan FROM income WHERE user_id=("yang sama kyk user id yang login") AND MONTH(date) = ("yang dipilih di view")");
    // }
    // public function sum_incomeAnnual()
    // {
    //     return $this->db->query("SELECT SUM(amount) as totalTahunan FROM income WHERE user_id=("yang sama kyk user id yang login") AND YEAR(date) = ("yang dipilih di view")");
    // }
}
