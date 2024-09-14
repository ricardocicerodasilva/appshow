<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Eventos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EventosController extends Controller
{
    //para mostrara a tela administrativa

    public function MostrarHome(){
        return View ('homeadm');
    }


// para mostrar tela de cadastro de eventos
public function MostrarCadastroEvento(){
    return View ('cadastarevento');
}

// para salvar os registros na tabela eventos

public function CadastrarEventos(Request $request){
    $registros - $request->Validate([
        'nomeEvento'=>'string|required',
        'dataEvento'=>'date|required',
        'localEvento'=>'string|required',
        'imgEvento'=>'string|required',
    ]);
    Eventos::create($registros);
    return Redirect::route('home-adm');
}

// para apagar os registros da tabela de eventos
public function destroy(Eventos $id){
    $id->delete();
    return Redirect::route('home-adm');
    }
    //para alterar os registroa na tabela de eventos
    public function Update( Eventos $id, Request $request){
        $registros - $request->Validate([
            'nomeEvento'=>'string|required',
            'dataEvento'=>'date|required',
            'localEvento'=>'string|required',
            'imgEvento'=>'string|required',
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('home-adm');

    }
    // para mostrar somente os eventos por codigo
    public function MostrarEventoCodigo(Eventos $id){
        return View('altera-evento',['registrosEvento'=>$id]);
    }

    //para buscar os eventos por nome
    public function MostraEventoNome(Request $request){
        $registros = eventos::query();
        $registros->when($request->nomeEvento,function($query,$valor){
            $query->where('nomeEvento','like','%'.$valor.'%');
        });
        $todosRegistros=$registros->get();
        return View ('listaEventos',['registrosEvento'=>$todosRegistros]);

    }
    
}