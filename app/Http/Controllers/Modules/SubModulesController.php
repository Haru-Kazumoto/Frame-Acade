<?php

namespace App\Http\Controllers\Modules;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\SubModules;
use Exception;
use Illuminate\Http\Request;

class SubModulesController extends Controller {
    public function index(){
        $subModules = SubModules::with([
            "modules"
        ])->get();

        return ApiResponse::successResponse($subModules);
    }

    public function create(Request $request){
        $request->validate([
            "name" => [
                'required',
                'string',
            ],
            "type" => [
                'required',
                'string'
            ],
            "content" => [
                'required',
                'string'
            ],
            "course_id" => [
                'required',
                'numeric'
            ]
        ]);
        try{
            $data = SubModules::create($request);
            if($data->type !== "BACKEND" && $data->type !== "FRONTEND"){
                return response()->json([
                    "status" => "400",
                    "message" => "Invalid data type",
                    "data" => null
                ], 400);
            }

            return ApiResponse::successResponse($data);
        } catch(Exception $exception){
            return ApiResponse::failedResponse($exception);
        }
    }
}
