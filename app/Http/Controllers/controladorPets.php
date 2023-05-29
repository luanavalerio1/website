<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPets extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $pets;
    private $total = 5;
    public function_construct(Pets $pets)
    {
        $this->middleware('auth');
        $this->pets = $pets;
    }

    /**
     * Show the form for creating a new resource.
     */

    public function listarPets()
    {
        $dados = $this->pets->with('especie')->
    }
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
        //
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
}
