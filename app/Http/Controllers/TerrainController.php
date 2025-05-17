<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terrain = Terrain::paginate(5);
        return view('terrain', compact('terrain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $terrain = new Terrain();
        return view('form.FormTerrain', compact('terrain'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'zone' => 'required',
            'superficie' => 'required|numeric|min:1',
        ]);
        Terrain::create($data);
        return redirect()->route('terrain.index')->with("success", "Ajout avec success");
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
        $terrain = new Terrain();
        return view('form.FormTerrain', ['terrain' => $terrain->findOrFail($id) ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'zone' => 'required',
            'superficie' => 'required|numeric|min:1',
        ]);
        Terrain::findOrFail($id)->update($data);
        return redirect()->route('terrain.index')->with("success", "Modification avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Terrain::findOrFail($id)->delete();
        return redirect()->route('terrain.index')->with("success", "Suppression avec success");
    }
}
