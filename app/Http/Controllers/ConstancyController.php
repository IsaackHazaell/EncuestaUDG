<?php

namespace App\Http\Controllers;

use App\Constancy;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
class ConstancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('constancy.index');
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

    public function showTableC()
    {
/*         $constancy = DB::table('constancies')
        ->selectRaw('constancies.*, constancies.id as constanciesid, sum(result) as prom')
        ->groupBy('constancies.teacher_id')
        ->get(); */

        $constancy = Constancy::groupBy('teacher_id')
        ->selectRaw('avg(result) as sum, teacher_id')
        ->get();

       
        return Datatables::of($constancy)
        ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function show(Constancy $constancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Constancy $constancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constancy $constancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constancy $constancy)
    {
        //
    }
}
