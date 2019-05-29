@extends('Layout.principal') 
@section('conteudo')
@if(empty($contratos))
<section class="panel">
    <header class="panel-heading">
        Contratos
    </header>
    <div class="panel-body">
    <h3>Você não possui contratos no sistema!</h3>
</div>
@else
</section>
<section class="panel">
    <header class="panel-heading">
        Contratos
    </header>
    <div class="panel-body">
        <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
                    <th><i class="icon_check_alt2"></i> Número do Contrato</th>
                    <th><i class="arrow_carrot-right_alt"></i> Objeto</th>
                    <th><i class="icon_calendar"></i> Data Inicio</th>
                    <th><i class="icon_calendar"></i> Data Fim</th>
                    <th><i class="icon_calendar"></i> Documentos</th>
                    <th><i class="icon_cog"></i> Ações</th>
                </tr>
                @foreach($contratos as $contrato)
                <tr>
                    <td>{{$contrato->numContrato}}</td>
                    <td>{{$contrato->Objeto_contrato}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($contrato->data_inicio))}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($contrato->data_fim))}}</td>
                    <td><a href='arquivo?id={{$contrato->numContrato}}'>{{$contrato->documentos}}</a></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success" href="#"><i class="icon_pencil"></i></a>
                            <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endif
@stop