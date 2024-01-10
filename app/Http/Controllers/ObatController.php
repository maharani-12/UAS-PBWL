<?php

namespace App\Http\Controllers;

use App\Models\Obats;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obats::orderBy('id', 'desc')->paginate(10);

        return view('obats.index', compact('obats'));
    }


    public function count()
    {
        $obatCount = Obats::count();

        return response()->json(['obatCount' => $obatCount]);
    }
    public function create()
    {
        return view('obats.create');
    }

    public function store(Request $request)
    {
        Obats::create($request->all());

        return redirect()->route('obats.index')
            ->with('success', 'Item berhasil di tambah!');
    }

    public function show(Obats $obat)
    {
        return view('obats.show', compact('obat'));
    }

    public function edit(Obats $obat)
    {
        return view('obats.edit', compact('obat'));
    }

    public function update(Request $request, Obats $obat)
    {
        $obat->update($request->all());

        return redirect()->route('obats.index')
            ->with('success', 'Item berhasil di update!');
    }

    public function destroy(Obats $obat)
    {
        $obat->delete();

        return redirect()->route('obats.index')
            ->with('success', 'Item berhasil di hapus!');
    }
}
