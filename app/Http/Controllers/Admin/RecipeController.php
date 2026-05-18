<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
     public function index(Request $request)
    {
        $query = Recipe::query();

        if ($request->search) {
                $query->where('nama', 'like', '%' . $request->search . '%');
            }

        if ($request->kategori) {
                $query->where('kategori', $request->kategori);
            }

        $recipes = $query
            ->orderBy('nama', 'asc')
            ->paginate(9);

        $kategoris = Recipe::select('kategori')
            ->distinct()
            ->orderBy('kategori', 'asc')
            ->get();

        return view('recipes.index', compact('recipes', 'kategoris'));
    }

    public function create()
    {
        if (!session('admin')) {
            return redirect('/admin/login');
        }

        return view('recipes.create');
    }

    public function store(Request $request)

    {
        if (!session('admin')) {

            return redirect('/admin/login');
        }

        $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'bahan' => 'required',
        'langkah' => 'required',
        'kategori' => 'required',
        'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);
        $gambarNama = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(public_path('images'), $gambarNama);
        }

        Recipe::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'kategori' => $request->kategori,
            'gambar' => $gambarNama,
        ]);

        return redirect('/recipes');
    }

    public function show(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.show', compact('recipe'));
    }

    public function edit(string $id)
    {
        if (!session('admin')) {
            return redirect('/admin/login');
        }

        $recipe = Recipe::findOrFail($id);

        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, string $id)
    {
        if (!session('admin')) {
            return redirect('/admin/login');
        }

            $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'bahan' => 'required',
        'langkah' => 'required',
        'kategori' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);
        $recipe = Recipe::findOrFail($id);

        $gambarNama = $recipe->gambar;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(public_path('images'), $gambarNama);
        }

        $recipe->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'kategori' => $request->kategori,
            'gambar' => $gambarNama,
        ]);

        return redirect('/recipes/' . $recipe->id);
    }

    public function destroy(string $id)
    {
        if (!session('admin')) {
            return redirect('/admin/login');
        }
        
        $recipe = Recipe::findOrFail($id);

        $recipe->delete();

        return redirect('/recipes');
    }

    public function filter(Request $request)
    {

        if($request->id){
        return response()->json([
            Recipe::findOrFail($request->id)
        ]);
    }

        $query = Recipe::query();

        if($request->search){
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        if($request->kategori){
            $query->where('kategori', $request->kategori);
        }

       return response()->json(
            $query->orderBy('nama', 'asc')->get()
        );
    }


}