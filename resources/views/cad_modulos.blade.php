@extends('layouts.app')
@section('conteudo')
<body>
    
  <div class="form_users">
      <form method="POST" action="{{ route('salvar_modulo') }}">

        @if(session('success'))
            <div class="alert">{{session('success')}}</div>
        @endif

            @csrf

            <div class="input_block">
                <label class="details">Selecione o curso</label><br>
                <select name="cursos_id" class="form_input" required>

                    <option value="">Selecione...</option>
                    @foreach($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input_block">
                <label class="details">Nome</label> <br>
                <input type="text" name="nome" class="form_input"/><br>
            </div>
            
            <button type="submit" class="button_cadastro">Salvar</button>
      </form>
      
  </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')
