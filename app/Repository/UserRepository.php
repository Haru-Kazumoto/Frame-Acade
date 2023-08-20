<?php

namespace App\Repository;

use App\Models\Users;
use App\Repository\Interfaces\UserRepositoryInterfaces;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterfaces{
    public function getAllData(array $relations){
        return Users::with($relations)->get();
    }

    public function getDataById($id){
        return null;
    }

    public function createData(Request $request){
        return null;
    }

    public function deleteDataById($id){
        return null;
    }

    public function updateDataById($id, Request $request){
        return null;
    }
}