<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefasController extends Controller
{
    public function index(){
        //Carregar as tarefas do banco de dados 
         $tarefas = Tarefa::all();
        //Retorna as tarefas como parametros
        return view('tarefas.index', compact('tarefas'));
    }
        
    public function create(){
        return view('tarefas.create');

    }

    public function edit($id){

        //carregando as tarefas do $id
        $tarefas = Tarefa::find($id);

        //Retornar as View
        return view('tarefas.edit', compact('tarefas'));


    }

    public function store(){
        //Criando uma nova tarefa
        $t = new Tarefa();

        //Atribuindo o valor do texto
        $t->texto = request('texto');

        // Salvar na base
        $t->save();

        //retornando para a Lista de tarefas
        return redirect('/tarefas');
    }

    public function update($id){
        //Recuperando a Tarefa no BD
        $tarefa = Tarefa::find($id);

        //Alterando o texto
        $tarefa->texto = request('texto');

        //Salvando a alteração do BD
        $tarefa->save();

        //retornando a view que lista as tarefas

        return redirect('/tarefas');
    }

}