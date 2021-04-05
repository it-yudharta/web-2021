<?php

namespace App\Http\Controllers;

use App\Models\Cahya;
use Illuminate\Http\Request;

class CahyaController extends Controller
{
    public function index()
    {
        // $penduduk = Cahya::all();
        // $penduduk = Cahya::where('id', '<=', 10)->get();

        $penduduk = Cahya::paginate();

        return view('penduduk', ['penduduk' => $penduduk]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cahya  $cahya
     * @return \Illuminate\Http\Response
     */
    public function show(Cahya $cahya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cahya  $cahya
     * @return \Illuminate\Http\Response
     */
    public function edit(Cahya $cahya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cahya  $cahya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cahya $cahya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cahya  $cahya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cahya $cahya)
    {
        //
    }
}
