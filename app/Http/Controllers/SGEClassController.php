<?php

namespace App\Http\Controllers;

use App\Models\SGEClass;
use App\Models\SGETypes;
use Illuminate\Http\Request;

class SGEClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sge_classes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SGETypes $sge_types)
    {
        $sge_types = $sge_types->all();
        return view('sge_classes.create',compact('sge_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SGEClass::create($request->all());
        return redirect()->route('sge_classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SGEClass  $sGEClass
     * @return \Illuminate\Http\Response
     */
    public function show(SGEClass $sge_class)
    {
        return view('sge_classes.show',compact('sge_class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SGEClass  $sGEClass
     * @return \Illuminate\Http\Response
     */
    public function edit(SGEClass $sge_class, SGETypes $sge_types)
    {
        $sge_types = $sge_types->all();
        return view('sge_classes.edit',compact('sge_class','sge_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SGEClass  $sGEClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SGEClass $sge_class)
    {
        $sge_class->fill($request->all())->save();
        return redirect()->route('sge_classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SGEClass  $sGEClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(SGEClass $sge_class)
    {
        $sge_class->delete();
        return redirect()->route('sge_classes.index');
    }
}
