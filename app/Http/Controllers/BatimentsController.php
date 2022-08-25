<?php

namespace App\Http\Controllers;

use App\Models\Batiments;
use App\Http\Requests\StoreBatimentsRequest;
use App\Http\Requests\UpdateBatimentsRequest;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    public function index()
    {
        $batiments = Batiments::all();
        return view ('backend.batiments.index')->with('batiments', $batiments);
    }

    public function create()
    {
        return view('backend.batiments.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Batiments::create($input);
        return redirect('batiments')->with('flash_message', 'batiments Addedd!');
    }

    public function show($id)
    {
        $batiment = Batiments::find($id);
        return view('backend.batiments.show')->with('batiments', $batiment);
    }

    public function edit($id)
    {
        $batiment = Batiments::find($id);
        return view('backend.batiments.edit')->with('batiments', $batiment);
    }

    public function update(Request $request, $id)
    {
        $batiment = Batiments::find($id);
        $input = $request->all();
        $batiment->update($input);
        return redirect('batiments')->with('flash_message', 'batiment Updated!');
    }

    public function destroy($id)
    {
        Batiments::destroy($id);
        return redirect('batiments')->with('flash_message', 'batiment deleted!');
    }
}
