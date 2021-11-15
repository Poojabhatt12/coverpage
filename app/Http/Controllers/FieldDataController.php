<?php

namespace App\Http\Controllers;

use App\Models\FieldData;
use Dflydev\DotAccessData\Data;
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
        $fieldData = FieldData::orderBy("created_at","DESC")->paginate(4);
        // $fieldData = FieldData::paginate(4);

        return view('field_data.index', compact('fieldData'));

       
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

        $fieldData = new FieldData();
        $fieldData->attribute_name = $request->input('attribute_name');
        $fieldData->database_name = $request->input('database_name');
        $fieldData->is_fromdata = $request->input('is_fromdata');
        $fieldData->input_type = $request->input('input_type');

        $fieldData->options = json_encode($request->input('options'));

        $fieldData->save();
        // $fieldData->store($request->all());

        return back();


        // dd('submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fieldData= FieldData::find($id);
        return view('field_data.viewDetails')->with(["fieldData" => $fieldData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $fieldData= FieldData::find($id);
        
        return view('field_data.edit', compact('fieldData'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fieldData= FieldData::find($id);
    
        $request->validate([
            'attribute_name' => 'required',
            'database_name' => 'required',
            'is_fromdata' => 'required',
            'input_type' => 'required',
            'options' => 'required',
        ]);

        
        $fieldData->attribute_name = $request->input('attribute_name');
        $fieldData->database_name = $request->input('database_name');
        $fieldData->is_fromdata = $request->input('is_fromdata');
        $fieldData->input_type = $request->input('input_type');

        $fieldData->options = json_encode($request->input('options'));

        $fieldData->save();
       
        return redirect()->route('field_data.index')->with('success', 'Field_data updated successfully');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldData  $fieldData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fieldData= FieldData::find($id);
        $fieldData->delete();
        return back();
    }
}
