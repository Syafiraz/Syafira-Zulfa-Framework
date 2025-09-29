<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($angka)
    {
         $hasil = $angka + 10;

        // lempar ke view
        return view('manage.index', compact('hasil'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if ($id % 2 != 0) {
            // Jika ganjil
            $pesan = "Nilai " . $id . " ini adalah ganjil";
            $alertType = "warning";
        } else {
            // Jika genap
            $pesan = "Nilai " . $id . " ini adalah genap";
            $alertType = "success";
        }

        // Lempar data ke view 'produk.show'
        return view('produk.show', [
        'pesan' => $pesan,
        'alertType' => $alertType
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
