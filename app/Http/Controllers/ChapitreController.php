<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chapitre = Chapitre::findOrFail($id);
        return view('chapitre', compact("chapitre"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function liaison($id_src, $id_dest, $reponse)
    {
        $src = Chapitre::find($id_src);
        $dest = Chapitre::find($id_dest);
        $src->suivants()->attach($dest->id, ['reponse'=>$reponse]);
    }
}
