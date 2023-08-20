<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterfaces{
    public function getAllData(array $relations);
    public function createData(Request $request);
    public function getDataById($id);
    public function updateDataById($id, Request $request);
    public function deleteDataById($id);
}