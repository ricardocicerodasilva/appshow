@extends('layout')
@section('content')
''
<div class="container mt-5">
        <h2>Alterar registros do Evento</h2>
        <form method="post" action="{{route('altera-evento',$registrosEvento->idEvento)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nomeEvento">Nome do Evento:</label>
                <input type="text" class="form-control" id="nomeEvento" name="nomeEvento" value="{{$registrosEvento->nomeEvento)}}">
            </div>
            <div class="form-group">
                <label for="dataEvento">Data do Evento:</label>
                <input type="date" class="form-control" id="dataEvento" name="dataEvento" value="{{$registrosEvento->dataEvento)}}">
            </div>
            <div class="form-group">
                <label for="localEvento">Local do Evento:</label>
                <input type="text" class="form-control" id="localEvento" name="localEvento" value="{{$registrosEvento->localEvento)}}">
</Div>
            <div class="form-group">
                <label for="imgEvento">Imagem do Evento (URL):</label>
                <input type="text" class="form-control" id="imgEvento" name="imgEvento" value="{{$registrosEvento->imgEvento)}}">
            </div>
            <button type="submit" class="btn btn-primary">Alterar Evento</button>
        </form>
    </div>
 
@endsection
1 Heart reaction.
1
has context menu
 