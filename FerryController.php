<?php

namespace App\Http\Controllers;

use App\Models\Ferry;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Equipement;
class FerryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferry= Ferry::all();

        return view('ferry', compact('ferry'));
    }

    /**
     * Show the form for creating a ne/621w resource.
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
    public function show(Ferry $ferry)
    {
        $equipements = Equipement::all();
        return view ("show", compact ('ferry','equipements'));  
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
    public function destroy(Ferry $ferry): RedirectResponse
    {
        $ferry->delete();
        return back()->with('info',"le ferry a été supprimé" );
    }
}
