<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarsRequest;
use App\Http\Requests\UpdateCarsRequest;
use App\Models\Cars;
use Illuminate\Support\Facades\Http;

class CarsController extends Controller
{

    private $apiUrl = 'https://carapi.app/api/makes';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get($this->apiUrl);

        if($response->successful()) {
            echo $response->body();
        }else{
            echo "Error: " . $response->status() . " - " . $response->body();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarsRequest $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        //
    }
}
