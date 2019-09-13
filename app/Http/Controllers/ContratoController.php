<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contrato;

class ContratoController extends Controller
{
    public function lista()
    {
        $contratos = DB::table('contrato')->paginate(8);

        //$contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
    }

    public function listaAtraso()
    {
        $contratos = Contrato::all();
        return view('home')->with('contratos', $contratos);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cria()
    {
        $num_contrato = $_REQUEST['num_contrato'];
        $objeto = $_REQUEST['objeto'];
        $inicio = implode("-", array_reverse(explode("/", $_REQUEST['inicio'])));
        $fim = implode("-", array_reverse(explode("/", $_REQUEST['fim'])));
        $num_edital = $_REQUEST['num_edital'];
        $modalidade = $_REQUEST['modalidade'];
        $arquivo = $_REQUEST['arquivo'];
        $link = $_REQUEST['link'];

        DB:: insert('insert into contrato (numContrato, Objeto_contrato, data_inicio, data_fim, num_ano, modalidade, documentos, links) values(?,?,?,?,?,?,?,?)', array($num_contrato, $objeto, $inicio, $fim, $num_edital, $modalidade, $arquivo, $link));
        $contratos = DB::table('contrato')->paginate(8);

        //$contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
    }

    public function ler_arquivo()
    {

        DB:: insert('insert into contrato (numContrato, Objeto_contrato, data_inicio, data_fim, num_ano, modalidade, documentos, links) values(?,?,?,?,?,?,?,?)', array($num_contrato, $objeto, $inicio, $fim, $num_edital, $modalidade, $arquivo, $link));
        $contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
    }


    public function remove($id)
    {
        DB:: delete('delete from contrato where id = ' . $id);
        return redirect()->to('contratos')->send();
    }

    public function mostra($id){
        $contrato = Contrato::find($id);
        if(empty($contrato)) {
            return "Esse contrato não existe";
        }
        return view('Contrato.edit_contrato')->with('contrato', $contrato);
    }

}

