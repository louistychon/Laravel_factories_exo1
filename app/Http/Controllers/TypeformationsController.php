<?php

namespace App\Http\Controllers;

use App\Models\Typeformations;
use App\Http\Requests\StoreTypeformationsRequest;
use App\Http\Requests\UpdateTypeformationsRequest;
use Illuminate\Http\Request;

class TypeformationsController extends Controller
{
    public function index()
    {
        $typeformations = Typeformations::all();
        return view ('backend.typeformations.index')->with('typeformations', $typeformations);
    }

    public function create()
    {
        return view('backend.typeformations.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Typeformations::create($input);
        return redirect('typeformations')->with('flash_message', 'typeformations Addedd!');
    }

    public function show($id)
    {
        $formation = Typeformations::find($id);
        return view('backend.typeformations.show')->with('typeformations', $formation);
    }

    public function edit($id)
    {
        $formation = Typeformations::find($id);
        return view('backend.typeformations.edit')->with('typeformations', $formation);
    }

    public function update(Request $request, $id)
    {
        $formation = Typeformations::find($id);
        $input = $request->all();
        $formation->update($input);
        return redirect('typeformations')->with('flash_message', 'formation Updated!');
    }

    public function destroy($id)
    {
        Typeformations::destroy($id);
        return redirect('typeformations')->with('flash_message', 'formation deleted!');
    }
}
