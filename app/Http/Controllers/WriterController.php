<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        dd('edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(writer $writer)
    {
        dd('show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(writer $writer)
    {
        dd('edit');
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
        dd('update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        try{
            DB::beginTransaction();
//            $writer = Writer::find($writer->id);
            $user = $writer->user()->find($writer->user_id);
            $writer->delete();
            $user->delete();

            if($writer){
                DB::commit();
                return response()->json(['message'=>'delete successfully']);
            }
        }catch(\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message'=>$exception->getMessage()
            ]);
        }
    }
}
