@extends('Layout.principal')
@section('conteudo')
    <section class="panel">
        <header class="panel-heading">
            Cadastrar Participantes
        </header>
        <div class="panel-body">
            <div class="form">
                <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                    <div class="form-group ">
                        <label for="nome" class="control-label col-lg-2">Nome <span class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="nome" name="nome" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="matricula" class="control-label col-lg-2">Matricula <span class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="matricula" name="matricula" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cpf" class="control-label col-lg-2">CPF <span
                                    class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="cpf" name="cpf" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="rg" class="control-label col-lg-2">RG <span
                                    class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="rg" name="rg" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="setor" class="control-label col-lg-2">Setor <span
                                    class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="setor" name="setor" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cargo" class="control-label col-lg-2">Cargo <span class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="cargo" name="cargo" type="text"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="email" name="email" type="email"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="senha" class="control-label col-lg-2">Senha <span class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control " id="senha" name="senha" type="password"/>
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
    </section>
@stop