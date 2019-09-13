@extends('Layout.principal')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            Termo de Referencia Pessoa Fisica
        </header>
        <div class="panel-body">
            <div class="form">
                <form class="form-validate form-horizontal " id="register_form" method="get" action="criaTermo">
                    <div class="container">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Identificação</a></li>
                     <li><a data-toggle="tab" href="#menu1">Contrantante</a></li>
                            <li><a data-toggle="tab" href="#menu2">Antecedentes</a></li>
                            <li><a data-toggle="tab" href="#menu3">Objetivos</a></li>
                           <li><a data-toggle="tab" href="#menu4">Atividades/Produtos</a></li>
                            <li><a data-toggle="tab" href="#menu5">Apresentação</a></li>
                            <li><a data-toggle="tab" href="#menu6">Prazos</a></li>
                            <li><a data-toggle="tab" href="#menu7">Custos</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active" style=" height: 470px;">
                                <br>
                                <div class="form-group ">
                                    <label for="tipo" class="control-label col-lg-2">Tipo <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="tipo" name="tipo" value="Capacitação"
                                                   type="checkbox"/>
                                            <center>Capacitação</center>
                                        </div>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="tipo" name="tipo"
                                                   value="Serviços Tecnicos Especializados" type="checkbox"/>
                                            <center>Serviços Técnicos Especializados</center>
                                        </div>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="tipo" name="tipo" value="Consultoria"
                                                   type="checkbox"/>
                                            <center>Consultoria</center>
                                        </div>
                                        <div class="col-lg-3">
                                            <input class=" form-control" id="tipo" name="tipo" value="Outros Serviços"
                                                   type="checkbox"/>
                                            <center>Outros Serviços</center>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="numTor" class="control-label col-lg-2">Número do TOR <span
                                                class="required">*</span></label>
                                    <div class="col-lg-4">
                                        <input class=" form-control" id="numTor" name="NumTor" type="text"/>
                                    </div>
                                </div>
                                <center><h3>Identificação do TOR</h3></center>
                                <div class="form-group ">
                                    <label for="titulo" class="control-label col-lg-2">Titulo do TOR <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                <input class="form-control" id="titulo" name="titulo" type="text" placeholder="(Especificação da atividade a ser contratada) (O título deve se referir à atividade e não ao nome do contratado.)
"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="acao" class="control-label col-lg-2">Ação do Plano de Trabalho <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="acao" name="acao" type="text"
                                        placeholder="(Descrição da etapa/fase prevista no Plano de Ação e de Investimentos e Plano de Aquisições)."/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="componente" class="control-label col-lg-2">Titulo do componente <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="componente" name="componente" type="text"
                                               placeholder="(De acordo com a Meta especificada no Plano de Ação e de Investimentos)."/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu1">
                                        <button class="btn btn-primary next">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade" style=" height: 450px;">
                                <center><h3>Identificação do Contratante</h3></center>
                                <div class="form-group ">
                                    <label for="entidade" class="control-label col-lg-2">Entidade <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="entidade" name="entidade" type="text"
                                               placeholder="(Nome/Razão social do Executor)"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="endereço" class="control-label col-lg-2">Endereço <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="endereço" name="endereço" type="text"
                                               placeholder="(Rua, Avenida, Número, Apartamento, Sala, Bairro, Cidade, Estado e CEP) "/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="nome" class="control-label col-lg-2">Nome <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="nome" name="nome" type="text"
                                               placeholder="Nome do Contratante"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="telefone" class="control-label col-lg-2">Telefone <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="telefone" name="telefone" type="text"
                                               placeholder="Telefone do Contratante"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#home">
                                        <button class="btn btn-primary previous">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu2">
                                        <button class="btn btn-primary next">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade" style=" height: 450px;">
                                <center><h3>Antecedentes</h3></center>
                                <div class="form-group ">
                                    <label for="problema" class="control-label col-lg-2">Problema <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="problema" name="problema" rows="7"
                                      placeholder="(Descrição da situação atual e da situação problema que se pretende resolver com a contratação dos serviços)"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu1">
                                        <button class="btn btn-primary">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu3">
                                        <button class="btn btn-primary">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade" style=" height: 450px;">
                                <center><h3>Objetivo da Contratação</h3></center>
                                <div class="form-group ">
                                    <label for="objetivoGeral" class="control-label col-lg-2">Objetivo Geral <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="objetivoGeral" name="objetivoGeral" rows="7"
                                      placeholder="(Descrição concisa e clara do objeto deste TOR, tendo como referência o diagnóstico e a situação, bem como os objetivos a serem alcançados.)"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="objetivoEsp" class="control-label col-lg-2">Objetivos Especificos <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="objetivoEsp" name="objetivoEsp" rows="7"
                                      placeholder="(Descrição detalhada dos objetivos, metas físicas a serem alcançadas por este TOR)"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu2">
                                        <button class="btn btn-primary">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu4">
                                        <button class="btn btn-primary">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade" style=" height: 480px;">
                                <center><h3>Atividades</h3></center>
                                <div class="form-group ">
                                    <label for="atividade" class="control-label col-lg-2">Problema <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="atividade" name="atividade" rows="7"
                                      placeholder="Descrever de forma clara as atividades a serem desenvolvidas para alcance dos objetivos específicos propostos para o serviço, relacionando-as aos produtos que deverão ser apresentados por etapas realizadas, quando deverão ser apresentados os relatórios parciais.

- Atividade: é o que deve ser feito. Sua descrição é usualmente feita por um verbo no infinitivo.
"></textarea>
                                    </div>
                                </div>
                                <center><h3>Produtos</h3></center>
                                <div class="form-group ">
                                    <label for="produtos" class="control-label col-lg-2">Objetivo Geral <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="produtos" name="produtos" rows="7"
                                      placeholder="O conjunto de resultados esperados do trabalho a ser contratado pode ser definido pelos produtos e documentos “físicos” que deverão ser entregues pelo contratado em determinadas etapas ou ao término do trabalho. Pode ser apresentado sob a forma de um documento, relatório, projeto, parecer, etc.

- Produto: é o que resulta da atividade desenvolvida.
"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu3">
                                        <button class="btn btn-primary">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu5">
                                        <button class="btn btn-primary">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu5" class="tab-pane fade" style=" height: 450px;">
                                <center><h3>Formas de Apresentação</h3></center>
                                <div class="form-group ">
                                    <label for="apresentacao" class="control-label col-lg-2">Objetivo Geral <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                            <textarea class="form-control" id="apresentacao" name="apresentacao" rows="7"
                                      placeholder="(O texto a seguir é exemplificativo e deverá ser adaptado à atividade proposta.)

Os documentos deverão ser encaminhados ao Contratante, em versão preliminar e, após aprovação, deverão ser entregues em forma definitiva, em papel A4, num total de ....... exemplares, e em CD ou por e-mail, produzidos nos aplicativos do Microsoft Office 2010 ou superior.)
"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu4">
                                        <button class="btn btn-primary">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu6">
                                        <button class="btn btn-primary">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu6" class="tab-pane fade" style="height: 450px">
                                <center><h3>Prazos</h3></center>
                                <center><h4>Especificar o tempo de desenvolvimento do TOR</h4></center>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label for="inicio" class="control-label col-lg-4">Data do início do
                                                    trabalho do
                                                    consultor <span
                                                            class="required">*</span></label>
                                                <div class="col-lg-8">
                                                    <input class="form-control " id="inicio" name="inicio" type="date"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label for="fim" class="control-label col-lg-4">Data do término do
                                                    trabalho do
                                                    consultor <span
                                                            class="required">*</span></label>
                                                <div class="col-lg-8">
                                                    <input class="form-control " id="fim" name="fim" type="date"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <a data-toggle="tab" href="#menu5">
                                        <button class="btn btn-primary">Retornar</button>
                                    </a>
                                    <a data-toggle="tab" href="#menu7">
                                        <button class="btn btn-primary">Avançar</button>
                                    </a>
                                </div>
                            </div>
                            <div id="menu7" class="tab-pane fade" style="height: 450px">
                                <center><h3>Custos</h3></center>
                                <div class="form-group ">
                                    <label for="CustosContratado" class="control-label col-lg-2">Custos de
                                        Responsabilidade do
                                        Contratado: <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="CustosContratado" name="CustosContratado"
                                               type="text"
                                               placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="CustosContratante" class="control-label col-lg-2">Custos de
                                        Responsabilidade do
                                        Contratante: <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="CustosContratante" name="CustosContratante"
                                               type="text"
                                               placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="pagamento" class="control-label col-lg-2">Formas de Pagamento <span
                                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="pagamento" name="pagamento" type="text"
                                               placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                                        <button class="btn btn-default" type="reset">Cancelar</button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
        </div>
        </form>
        </div>
    </section>
    <script>
    $(document).ready(function() {
    /*disable non active tabs*/
    $('.nav li').not('.active').addClass('disabled');
    $('.nav li').not('.active').find('a').removeAttr("data-toggle");

    $('button.next').click(function(){
        $lia = $('.nav li.active');
        $li = $('.nav li.active').next('li');

        /*enable next tab*/
        $li.removeClass('disabled');
        $li.find('a').attr("data-toggle","tab");
        /*toggle tab*/
        $li.find('a').click();

        /*disable previous tab*/
        $lia.addClass('disabled');
        $lia.find('a').removeAttr("data-toggle");
    });
    $('button.previous').click(function(){
        $lia = $('.nav li.active');
        $li = $('.nav li.active').prev('li');

        /*enable next tab*/
        $li.removeClass('disabled');
        $li.find('a').attr("data-toggle","tab");
        /*toggle tab*/
        $li.find('a').click();

        /*disable previous tab*/
        $lia.addClass('disabled');
        $lia.find('a').removeAttr("data-toggle");
    });
});
    </script>
@stop
