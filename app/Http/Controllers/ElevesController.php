<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    public function index()
    {
        $eleves = Eleves::all();
        return view ('backend.eleves.index')->with('eleves', $eleves);
    }

    public function create()
    {
        return view('backend.eleves.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Eleves::create($input);
        return redirect('eleves')->with('flash_message', 'Eleves Addedd!');
    }

    public function show($id)
    {
        $eleve = Eleves::find($id);
        return view('backend.eleves.show')->with('eleves', $eleve);
    }

    public function edit($id)
    {
        $eleve = Eleves::find($id);
        return view('backend.eleves.edit')->with('eleves', $eleve);
    }

    public function update(Request $request, $id)
    {
        $eleve = Eleves::find($id);
        $input = $request->all();
        $eleve->update($input);
        return redirect('eleves')->with('flash_message', 'eleve Updated!');
    }

    public function destroy($id)
    {
        Eleves::destroy($id);
        return redirect('eleves')->with('flash_message', 'eleve deleted!');
    }
}
