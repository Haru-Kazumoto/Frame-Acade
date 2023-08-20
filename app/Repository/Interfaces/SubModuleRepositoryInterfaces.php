<?php

namespace App\Repository\Interfaces;

interface SubModuleRepositoryInterfaces{
    public function getAllData(array $relations);
    public function createData(Request $request);
    public function getDataById($id);
    public function updateDataById($id, Request $request);
    public function deleteDataById($id);
}