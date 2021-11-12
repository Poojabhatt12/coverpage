<?php

namespace App\Http\Controllers;

use App\Models\FieldData;
use Illuminate\Http\Request;

class FieldDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('field_data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'attribute_name' => 'required',
            'database_name' => 'required',
            'is_fromdata' => 'required',
            'input_type' => 'required',
            'options' => 'required',
        ]);

        $data = new FieldData();
        $data->attribute_name = $request->input('attribute_name');
        $data->database_name = $request->input('database_name');
        $data->is_fromdata = $request->input('is_fromdata');
        $data->input_type = $request->input('input_type');

        $data->options = json_encode($request->input('options'));

        $data->save();

        return back();


        // dd('submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function show(FieldData $fieldData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldData $fieldData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FieldData $fieldData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldData $fieldData)
    {
        //
    }
}
