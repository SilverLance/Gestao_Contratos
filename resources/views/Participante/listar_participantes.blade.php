@extends('Layout.principal')
@section('conteudo')
    @if(empty($participantes))
        <section class="panel">
        <header class="panel-heading">
            Participantes
        </header>
            <div class="panel-body">
                <h3>Você não possui participantes no sistema!</h3>
            </div>
            @else
        </section>
        <section class="panel">
        <header class="panel-heading">
            Participantes
        </header>
        <div class="panel-body">
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_contacts_alt"></i> Nome</th>
                    <th><i class="icon_id"></i> Matricula</th>
                    <th><i class="icon_calendar"></i> CPF</th>
                    <th><i class="icon_calendar"></i> RG</th>
                    <th><i class="icon_calendar"></i> Setor</th>
                    <th><i class="icon_calendar"></i> Cargo</th>
                    <th><i class="icon_calendar"></i> Função</th>
                    <th><i class="icon_cog"></i> Ações</th>
                </tr>
                @foreach($participantes as $participantes)
                    <tr>
                        <td>{{$participantes->nome}}</td>
                        <td>{{$participantes->matricula}}</td>
                        <td>{{$participantes->cpf}}</td>
                        <td>{{$participantes->rg}}</td>
                        <td>{{$participantes->setor}}</td>
                        <td>{{$participantes->cargo}}</td>
                        <td>{{$participantes->funcao}}</td>
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