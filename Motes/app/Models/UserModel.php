<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'nama_depan', 'nama_belakang', 'password', 'user_created_at'];

    public function getUserById($id)
    {
        $data = UserModel::where('user_id', $id)->first();
        return $data;
    }

    public function getUserByEmail($email)
    {
        $data = UserModel::where('email', $email)->first();
        return $data;
    }

    public function getUser()
    {
        $data = UserModel::query("SELECT * FROM users")->getRow();
        return $data;
    }
}
