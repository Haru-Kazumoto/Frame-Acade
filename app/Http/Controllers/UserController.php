<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResponseResource;
use App\Repository\Interfaces\UserRepositoryInterfaces;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    // public function index(){
    //     $users = $this->userRepository->getAllData(['certifications','frameworks']);

    //     return ApiResponse::successResponse($users);
    // }
}