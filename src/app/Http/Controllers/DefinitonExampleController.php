<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;

class DefinitonExampleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $words = Word::with('definitions')->get()->all();
        return view('create.defexamples', compact("words" ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $definition = Definition::find($request->definition_id);
        $definition->examples()->create([
            'example' => $request->example,
        ]);
        return redirect()->route('definitions.index');
    }
}
