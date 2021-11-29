<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DictionaryTerms;

class DictionaryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $terms = DictionaryTerms::orderBy('word')->get();
        return view('dictionary', ['terms' => $terms]);
        
    }

    public function add()
    {
        return view('dictionary-add');
    }

    public function store()
    {
        $term = new DictionaryTerms;

        $term->word = request('word');
        $term->description = request('description');
        $term->createdby = request('changedby');
        $term->save();
    }
}
