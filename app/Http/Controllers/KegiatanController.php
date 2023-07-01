<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Kegiatan;
use Illuminate\Http\Request;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd($request->all());
        $DataKegiatan = $request -> validate([
            'mata_kuliah'=> 'required|max:255',
            'tugas'=>'required',
            'tenggat' =>'required',
            'media' =>'required',
            'status' =>'required'
        ]);
        $DataKegiatan['user_id'] = auth()->id();
        // return $DataKegiatan;
        DB::table('kegiatans')->insert($DataKegiatan);

        return back()->with('success', 'Keren Semua Data berhasil diinputkan!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}