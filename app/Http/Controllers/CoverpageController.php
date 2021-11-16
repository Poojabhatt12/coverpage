<?php

namespace App\Http\Controllers;
use App\Models\Coverpage;
use Illuminate\Http\Request;

class CoverpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchTerm = request()->get('search');

        if ($searchTerm) {
            $coverPages = Coverpage::where('name', 'LIKE', "%" . $searchTerm . "%")->paginate(4);
        } else {
            $coverPages = Coverpage::paginate(4);
        }

        return view('coverpage.index', compact('coverPages'));  // passing data to view


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coverpage.create');
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
            'name' => 'required',
            'title' => 'required',
            'required_questions' => 'required',
            'file' => 'required',
        ]);

        $fileName = $request->file->store('coverpage');

        $dataToSave = $request->except('file') + ['file' => $fileName];
        Coverpage::create($dataToSave);

        return redirect()->route('coverpage.index')->with('success', 'coverpage created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coverpage  $coverpage
     * @return \Illuminate\Http\Response
     */
    public function show(Coverpage $coverpage)
    {
        return view('coverpage.viewDetails')->with(["coverpage" => $coverpage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coverpage  $coverpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Coverpage $coverpage)
    {
        return view('coverpage.edit', compact('coverpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coverpage  $coverpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coverpage $coverpage)

    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'required_questions' => 'required',
            
        ]);
        if ($request->file) {
            $fileName = $request->file->store('coverpage');
            $dataToSave = $request->except('file') + ['file' => $fileName];
        } else {
            $dataToSave = $request->except('file');
        }
        $coverpage->update($dataToSave);

        return redirect()->route('coverpage.index')->with('success', 'Coverpage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coverpage  $coverpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coverpage $coverpage)
    {
        $coverpage->delete();

        return back();
    }
}
