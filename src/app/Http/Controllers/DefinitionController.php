<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $definitions = Definition::all();
        $authors = Author::all();
        return view('index', compact('definitions', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        return view('create.definition', compact("authors"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'word' => 'required|max:255',
            'definition' => 'required',
            'author_id' => 'required'
        ]);
        $def = Definition::create($storeData);

        return redirect('/definitions')->with('completed', 'Definition has been saved!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $def = Definition::findOrFail($id);
        $def->delete();

        return redirect('/definitions')->with('completed', 'Definition has been deleted');
    }
}
