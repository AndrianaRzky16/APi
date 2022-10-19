<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    protected $model;

    public function __construct(Profile $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $datas = $this->model->paginate(10);

        $response = [
            'status' => 'succes',
            'data' => $datas
        ];

        return response()->json($response);
    }
}
