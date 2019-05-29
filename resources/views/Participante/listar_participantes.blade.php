@extends('Layout.principal') @section('conteudo')

    <section class="panel">
        <header class="panel-heading">
            Listar Participantes
        </header>
        <div class="panel-body">
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_check_alt2"></i> Matricula</th>
                    <th><i class="icon_profile"></i> Nome</th>
                    <th><i class="icon_key_alt"></i> Tipo</th>
                    <th><i class="icon_cogs"></i> Action</th>
                </tr>
                @foreach($participantes as $participante)
                    <tr>
                        <td>{{$participante->nome}}</td>
                        <td>2004-07-06</td>
                        <td>dale@chief.info</td>
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
@stop