@extends('principal') @section('conteudo')

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
                    <th><i class="icon_cog"></i> Ações</th>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Locação de Veiculo</td>
                    <td>01/01/2019</td>
                    <td>31/12/2019</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success" href="#"><i class="icon_pencil"></i></a>
                            <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@stop