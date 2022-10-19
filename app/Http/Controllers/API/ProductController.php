<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Resources\ProductsResource;
use App\Models\Products;

class ProductController extends Controller
{
    protected $model;

    public function __construct(Products $model)
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $data = new ProductsResource(Products::create($request->validated()));

        return $this->sendResponse($data, 'Succesfull Store');
    }
}
