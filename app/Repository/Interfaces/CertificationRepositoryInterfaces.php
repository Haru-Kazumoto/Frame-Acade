<?php

namespace App\Repository\Interfaces;
use Illuminate\Http\Request;

interface CertificationRepositoryInterfaces{
    public function getAllData(?array $relations);
    public function createData(Request $request);
    public function getDataById($id);
    public function updateDataById($id, Request $request);
    public function deleteDataById($id);
}