@extends('layouts.app')
@section('conteudo')
<body>
    
  <div class="form_users">
      <form method="POST" action="{{ route('salvar_user') }}">

        @if(session('success'))
            <div class="alert">{{session('success')}}</div>
        @endif

            @csrf
            <div class="input_block">
                <label class="details">Nome</label> <br>
                <input type="text" name="name" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Email</label> <br>
                <input type="text" name="email" class="form_input"/><br>
            </div>
            <div class="input_block">   
                <label class="details">Senha</label><br>
                <input type="password" name="password" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">CPF</label><br>
                <input type="text" name="cpf" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">RG</label><br>
                <input type="text" name="rg" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">ORGÃO</label><br>
                <input type="text" name="orgao" class="form_input"/><br>
            </div>

            <div class="input_block">
                <label class="details">Data de expedição</label><br>
                <input type="date" name="data_expedicao" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">CEP</label><br>
                <input type="text" name="cep" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Logadouro</label><br>
                <input type="text" name="logradouro" class="form_input"/><br>
            </div>


            <div class="input_block">
                <label class="details">Número</label><br>
                <input type="text" name="numero" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Bairro</label><br>
                <input type="text" name="bairro" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Cidade</label><br>
                <input type="text" name="cidade" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Uf</label><br>
                <input type="text" name="uf" class="form_input"/><br>
            </div>
            <div class="input_block">
                <label class="details">Grupo</label><br>
                <select name="grupo" class="form_input" required>
                    <option value="">Selecione...</option>
                    <option value="admin" >admin</option>
                    <option value="professor_admin" >professor_admin</option>
                    <option value="professor" >professor</option>
                    <option value="aluno" >aluno</option>
                </select>
            </div> 
            <button type="submit" class="button_cadastro">Salvar</button>
      </form>
      
  </div>
</body>
@endsection('conteudo')
@include('layouts.partials.menu')
