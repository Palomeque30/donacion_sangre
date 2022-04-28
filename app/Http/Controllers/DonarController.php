<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Http\Request;

class DonarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donar = Donar::all();
        return view('donar.index', compact('donar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donar.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        donar::create ($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donar  $donar
     * @return \Illuminate\Http\Response
     */
    public function show(Donar $donar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donar  $donar
     * @return \Illuminate\Http\Response
     */
    public function edit(Donar $donar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donar  $donar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donar $donar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donar  $donar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donar $donar)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
