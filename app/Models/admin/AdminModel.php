<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_admin';

    public function getAdmin(){
        return DB::table($this->table)->first();
    }

    public function getAdminById($adminId){
        return DB::table($this->table)
            ->where('adminId', $adminId)
            ->first();
    }

    public function addAdminUser($admin)
    {
        return DB::table($this->table)->insert($admin);
    }

    public function getAdmins(){
        return DB::table($this->table)
            ->get();
    }
    public function updateAdmin($data){
        return DB::table($this->table)
        ->where('username', 'admin')
        ->update($data);
    }

    public function deleteAdmin($adminId)
    {
        return DB::table($this->table)
            ->where('adminId', $adminId)
            -> delete();
    }

    public function getAdminByRole($role){
        return DB::table($this->table)
            ->where('role', $role)
            ->get();
    }


}
