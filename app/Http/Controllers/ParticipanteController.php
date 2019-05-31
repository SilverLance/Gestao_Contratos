<?php

namespace App\Http\Controllers;


use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipanteController extends Controller
{
    public function lista()
    {
        $participantes = Participante::all();
        return view('Participante.listar_participantes')->with('participantes', $participantes);
    }

    public function cria()
    {
        $nome = $_REQUEST['nome'];
        $matricula = $_REQUEST['matricula'];
        $cpf = $_REQUEST['cpf'];
        $rg = $_REQUEST['rg'];
        $cargo = $_REQUEST['cargo'];
        $setor = $_REQUEST['setor'];
        $login = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];

        DB:: insert('insert into participante (nome, matricula, cpf, rg, setor, cargo, login, senha) values(?,?,?,?,?,?,?,?)', array($nome, $matricula, $cpf, $rg, $setor, $cargo, $login, $senha));
        $participantes = Participante::all();
        return view('Participante.listar_participantes')->with('participantes', $participantes);
    }
}
