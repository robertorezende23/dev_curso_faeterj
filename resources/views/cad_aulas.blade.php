@extends('layouts.app')
@section('conteudo')
<body>
    
  <div class="form_users">
      <form method="POST" action="{{ route('salvar_aula') }}">

        @if(session('success'))
            <div class="alert">{{session('success')}}</div>
        @endif

            @csrf

            <div class="input_block">
                <label class="details">Selecione o modulo</label><br>
                <select name="modulos_id" class="form_input" required>

                    <option value="">Selecione...</option>
                    @foreach($modulos as $modulo)
                        <option value="{{$modulo->id}}">{{$modulo->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input_block">
                <label class="details">Nome</label> <br>
                <input type="text" name="name" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Video</label> <br>
                <input type="text" name="video" class="form_input"/><br>
            </div>
            <div class="input_block">   
                <label class="details">Descricão</label><br>
                <input type="text" name="descricao" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Tempo</label><br>
                <input type="date" name="tempo" class="form_input"/><br>
            </div>
       
            <button type="submit" class="button_cadastro">Salvar</button>
      </form>
      
  </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')
