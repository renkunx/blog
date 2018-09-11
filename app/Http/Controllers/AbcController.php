<?php

namespace App\Http\Controllers;

use App\Abc;
use Illuminate\Http\Request;

class AbcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abcs = Abc::orderBy('created_at', 'desc')->paginate(6);
        return view('abc/abc', ['abcs'=> $abcs]);
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
     * @param  \App\Abc  $abc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $abc = Abc::where('id', '=', $id)->first();
        // dd($abc);
        return view('abc/abcdetail', ['abc' => $abc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abc  $abc
     * @return \Illuminate\Http\Response
     */
    public function edit(Abc $abc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abc  $abc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abc $abc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abc  $abc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abc $abc)
    {
        //
    }
}
