<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Resources\DesaResource;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desa = Desa::all();
        return DesaResource::collection($desa);
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

        $request->validate([
            'nama_desa' => 'required',
            'nama_dusun' => 'required',
            'nama_jalan' => 'required',
            'rukun_tangga' => 'required',
            'rukun_warga' => 'required',
            'nama_rt' => 'required',
            'nama_rw' => 'required',
            'jumlah_penduduk' => 'required'
        ]);

        $desa = Desa::create($request->all());
        return new DesaResource($desa);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        return new DesaResource($desa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desa $desa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_desa' => 'required',
            'nama_dusun' => 'required',
            'nama_jalan' => 'required',
            'rukun_tangga' => 'required',
            'rukun_warga' => 'required',
            'nama_rt' => 'required',
            'nama_rw' => 'required',
            'jumlah_penduduk' => 'required'
        ]);
        $desa = Desa::findOrFail($id);

        $desa->update($request->all());

        return new DesaResource($desa);
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();

        return new DesaResource($desa);
        
    }
}
