<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index()
    {
        $formations = Formations::all();
        return view ('backend.formations.index')->with('formations', $formations);
    }

    public function create()
    {
        return view('backend.formations.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Formations::create($input);
        return redirect('formations')->with('flash_message', 'formations Addedd!');
    }

    public function show($id)
    {
        $formation = Formations::find($id);
        return view('backend.formations.show')->with('formations', $formation);
    }

    public function edit($id)
    {
        $formation = Formations::find($id);
        return view('backend.formations.edit')->with('formations', $formation);
    }

    public function update(Request $request, $id)
    {
        $formation = Formations::find($id);
        $input = $request->all();
        $formation->update($input);
        return redirect('formations')->with('flash_message', 'formation Updated!');
    }

    public function destroy($id)
    {
        Formations::destroy($id);
        return redirect('formations')->with('flash_message', 'formation deleted!');
    }
}
