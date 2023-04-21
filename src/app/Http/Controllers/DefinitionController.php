<?php

namespace App\Http\Controllers;

use App\Enums\GenderEnum;
use App\Enums\WordClassEnum;
use App\Models\Author;
use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use function Sodium\add;

class DefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::all();
        return view('index', compact('words'));
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
        $wordClassData = $request->validate([
            'word' => 'required|max:255',
            'word_class' => [new Enum(WordClassEnum::class)],
            'gender' => [new Enum(GenderEnum::class)]
        ]);

        $word = Word::where('word', $wordClassData['word'])->first();
        if (!$word) {
            $word = Word::create($wordClassData);
        }

        $defData = $request->validate([
            'definition' => 'required|max:255',
            'author_id' => 'required'
        ]);

        $def = Definition::create(array_merge($defData, ['word_id' => $word->id]));

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
