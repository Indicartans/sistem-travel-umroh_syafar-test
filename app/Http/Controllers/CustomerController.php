<?php

namespace App\Http\Controllers;

use LDAP\Result;
use App\Models\Cutomer;
use App\Models\Customer;
use Illuminate\Http\Request;

use function Pest\Laravel\json;
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
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_paspor' => 'required',
            'masa_berlaku_paspor' => 'required',
            'no_visa' => 'required',
            'masa_berlaku_visa' => 'required',
            'jenis_paket' => 'required',
            'jenis_kamar' => 'required',
            'lampiran_ktp' => 'required|image',
            'lampiran_kk' => 'required|image',
            'pas_foto' => 'required|image',
            'paspor' => 'required|image',
        ]);

        $validated["lampiran_ktp"] = $request->file("lampiran_ktp")->store("post-images");
        $validated["lampiran_kk"] = $request->file("lampiran_kk")->store("post-images");
        $validated["pas_foto"] = $request->file("pas_foto")->store("post-images");
        $validated["paspor"] = $request->file("paspor")->store("post-images");

        Customer::create([
            'nama' => $validated['nama'],
            'nik' => $validated['nik'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'alamat' => $validated['provinsi'] . ',' . $validated['kota'] . ',' . $validated['kecamatan'] . ',' . $validated['kelurahan'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'no_paspor' => $validated['no_paspor'],
            'masa_berlaku_paspor' => $validated['masa_berlaku_paspor'],
            'no_visa' => $validated['no_visa'],
            'masa_berlaku_visa' => $validated['masa_berlaku_visa'],
            'jenis_paket' => $validated['jenis_paket'],
            'jenis_kamar' => $validated['jenis_kamar'],
            'lampiran_ktp' => $validated['lampiran_ktp'],
            'lampiran_kk' => $validated['lampiran_kk'],
            'pas_foto' => $validated['pas_foto'],
            'paspor' => $validated['paspor']
        ]);

        return redirect("/customer")->with('success', 'Jamaah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $cutomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $cutomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $cutomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $cutomer)
    {
        //
    }
}
