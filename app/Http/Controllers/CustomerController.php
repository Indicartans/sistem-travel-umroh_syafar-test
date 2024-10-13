<?php

namespace App\Http\Controllers;

use App\Models\Cutomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.customer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $provinsi = json_decode($provinsi->body(), true);
        // dd($provinsi);
        return view('customer.customer_create', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cutomer $cutomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cutomer $cutomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cutomer $cutomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cutomer $cutomer)
    {
        //
    }
}
