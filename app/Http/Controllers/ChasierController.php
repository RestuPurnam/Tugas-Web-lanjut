<?php

namespace App\Http\Controllers;

use App\Models\Chasier;

use Illuminate\Http\Request;

class ChasierController extends Controller
{
    public function index(){

        $data = Chasier::all();

       // dd($data);

       return view('chasier.index', compact('data'));

      // return view('chasier.index', ['data'=> $data]);
      // return view('chasier.index')->with('data', $data);


    }
    public function tambah()
    {
        return view('chasier.create');
    }

    public function simpan(Request $request){

        $request->validate([

            'name' => 'required|min:5'

        ]);

        Chasier::create($request->all());
        return to_route('chasier-index');
    }
}
