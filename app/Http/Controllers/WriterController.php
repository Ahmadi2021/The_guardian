<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::with('user')->get();
//        return  $writers;
        return view('dashboard.writers.index')->with(['writers'=>$writers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.writers.create');
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
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(writer $writer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(writer $writer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, writer $writer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        $writer = Writer::find($id);
        $writer->delete();
        return response()->json(['message'=>'delete successfully']);
    }
}
