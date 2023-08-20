<?php

namespace App\Repository;
use App\Models\Modules;
use App\Repository\Interfaces\ModuleRepositoryInterfaces;
use Illuminate\Http\Request;

class ModuleRepository implements ModuleRepositoryInterfaces{
    public function getAllData(array $relations){
        return Modules::with($relations)->get();
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