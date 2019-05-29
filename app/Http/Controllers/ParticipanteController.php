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
}
