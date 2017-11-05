<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Atividade03Controller extends Controller
{

    public function atividade_02(){
    	return view('atividades.atividade_02');
    }

    public function index(){
    	return view('atividades.atividade_03.index');
    }

    public function profiles(){
    	return view('atividades.atividade_03.profiles');
    }

    public function competitions(){
    	return view('atividades.atividade_03.competitions');
    }

    public function about(){
    	return view('atividades.atividade_03.about');
    }

    public function show_profile($name){
        return view('atividades.atividade_03.user_profile')->with('name', $name);
    }

    public function show_competition($name){
        return view('atividades.atividade_03.competition')->with('name', $name);
    }
}
