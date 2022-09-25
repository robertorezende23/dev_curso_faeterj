<?php

namespace App\Http\Controllers;

use App\Curso;
use App\User;
use App\Modulo;
use App\Aula;
use Illuminate\Http\Request;
use DB;

class CursoController extends Controller
{
    public function index() {
        $cursos = DB::select("select * from cursos");
        return view('cursos', compact('cursos'));
    }
    public function show_cursos($id) {
        //$curso = DB::select("select * from cursos where id = ?",[$id]);
        $curso = Curso::where('id', '=', $id)->get();

         return view('curso', compact('curso'));
    }
    public function cadastro(){
        $professores = $this->_professores();
        return view('cad_cursos', compact('professores'));
    }
    public function cadastro_modulos(){
        $cursos = $this->_cursos();
        return view('cad_modulos', compact('cursos'));
    }
    public function salvar_curso(Request $request) {
         Curso::create($request->all());
         return redirect('/cadastro/user')->with('success', 'Seu curso foi criado com sucesso.');
    }

    private function _professores() {
        return User::where('grupo','=', 'professor-admin')
        ->orwhere('grupo','=', 'professor')
        ->get();
    }
    private function _cursos() {
        return Curso::get();
    }
    private function _modulos() {
        return Modulo::get();
    }
    public function cadastro_user(){
        return view('cad_users');
    }
    public function salvar_modulo(Request $request) {
        Modulo::create($request->all());
        return redirect('/cadastro/modulos')->with('success', 'Seu modulo foi criado com sucesso.');
   }
   public function cadastro_aulas(){
    $modulos = $this->_modulos();
    return view('cad_aulas', compact('modulos'));
}
public function salvar_aula(Request $request) {
    Aula::create($request->all());
    return redirect('/cadastro/aulas')->with('success', 'Sua aula foi criada com sucesso.');
}
    public function salvar_user(Request $request) {
        User::create($request->all());
        return redirect('/cadastro/user')->with('success', 'Sua conta foi criada com sucesso.');
   }
}
