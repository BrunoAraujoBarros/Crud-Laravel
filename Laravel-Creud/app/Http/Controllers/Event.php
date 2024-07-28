<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class Event extends Controller
{
    public function index(){
        $GetAll = Cadastro::all();

        return view('listAll', ['GetAll' => $GetAll] );


    }

    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        $cadastro = new Cadastro();



        $cadastro->name = $request->name;
        $cadastro->nascimento = $request->nascimento;
        $cadastro->obs = $request->obs;
        $cadastro->numero = $request->numero;

        $cadastro->save();

        //dd($request->all());

        return redirect('/')->with('msg', 'Cadastro realizado');

    }

    public function destroy($id){
        Cadastro::findOrFail($id)->delete();

        return redirect('listAll')->with('msg', 'Cadastro Excluido');
    }

    public function edit($id){
        $update = Cadastro::findOrFail($id);

        return view('edit', ['update' => $update]);
    }

    public function update(Request $request){

        Cadastro::findOrFail($request->id)->update($request->all());

        return redirect('listAll')->with('msg', 'Cadastro Editado');
    }
}

