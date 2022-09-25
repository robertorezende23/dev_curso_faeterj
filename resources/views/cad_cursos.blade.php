@extends('layouts.app')
@section('conteudo')
<body>
  <div class="form_cursos">
      <form method="POST" action="{{ route('salvar_curso') }}">
            @csrf
            <div class="input_block">
                <label>Imagem do curso</label> <br>
                <input type="text" name="imagem" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>Nome do curso</label> <br>
            <input type="text" name="nome" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>Descricao do curso</label><br>
            <input type="text" name="descricao" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>Requisitos do curso</label><br>
            <input type="text" name="requisitos" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>URL do Vimeo ou Youtube</label><br>
            <input type="text" name="video" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>valor</label><br>
            <input type="text" name="valor" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>Tempo Expiracao</label><br>
            <input type="date" name="tempo_expiracao" class="form_input"/><br>
            </div>
            <div class="input_block">
            <label>Professores</label><br>
            <select name="professor_id" class="form_input" required>

                <option value="">Selecione...</option>
                @foreach($professores as $professor)
                    <option value="{{$professor->id}}">{{$professor->name}}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="button_cadastro">Salvar</button>
      </form>
      
  </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')
