<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller{
    public function index(){
        
    $nome = "Matheus";
    $idade = 29;
    $arr = [1,2,3,4,5];
    $nomes = ['matheus', 'Maria', 'João', 'Saulo'];
    return view('welcome',  
    [
        'nome' => $nome,
        'idade2' => $idade,
        'profissao' => 'programador',
        'arr' => $arr,
        'nomes' => $nomes
    ]);
    }

    public function create() {
        return view('events.create');
    }
    public function contact() {
        return view('contact');
    }
    public function products() {
        
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }
    public function productTest($id = null) {
        return view('product', ['id' => $id]); 
    }

}
