<?php

namespace App\Http\Controllers;

use App\Models\SGETypes;
use Illuminate\Http\Request;

class SGETypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sge_types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sge_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SGETypes::create($request->all());
        return redirect()->route('sge_types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SGETypes  $sGETypes
     * @return \Illuminate\Http\Response
     */
    public function show(SGETypes $sge_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SGETypes  $sGETypes
     * @return \Illuminate\Http\Response
     */
    public function edit(SGETypes $sge_type)
    {
        return view('sge_types.edit',compact('sge_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SGETypes  $sGETypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SGETypes $sge_type)
    {
        $sge_type->fill($request->all())->save();
        return redirect()->route('sge_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SGETypes  $sGETypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(SGETypes $sge_type)
    {
        $sge_type->delete();
        return redirect()->route('sge_types.index');
    }
}
