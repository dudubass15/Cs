<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Novo Morador(a)</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal" onsubmit="return AddMorador();">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="condominio" for="condominio">Condomínio</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="condominio" id="condominio">
                                <option></option>
                                <?php foreach($lista_condominio as $condominio): ?>
                                    <option value="<?php echo($condominio['id']); ?>"><?php echo($condominio['nome']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="bloco" for="bloco">Bloco</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="bloco" id="bloco">
                                <option></option>
                                <?php foreach($lista_bloco as $bl): ?>
                                    <option value="<?php echo($bl['id']); ?>">Bloco - <?php echo($bl['numero']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="apartamento" for="apartamento">Apartamento</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="apartamento" id="apartamento">
                                <option></option>
                                <?php foreach($lista_apartamento as $ap): ?>
                                    <option value="<?php echo($ap['id']); ?>"><?php echo($ap['numero_apartamento']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Morador(a)</label>
                        <div class="col-sm-8"><input type="text" name="nome" class="form-control" id="nome"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="celular">Celular</label>
                        <div class="col-sm-8"><input type="text" name="celular" class="form-control" data-mask="(00) 00000-0000" id="celular"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cpf">CPF</label>
                        <div class="col-sm-8"><input type="text" name="cpf" class="form-control" data-mask="000.000.000-00" id="cpf"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">E-mail</label>
                        <div class="col-sm-8"><input type="email" name="email" class="form-control" id="email"></div>
                    </div>

                   <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="usuario" for="usuario">Usuario Sistema</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="usuario" id="usuario">
                                <option></option>
                                <?php foreach($lista_usuarios as $user): ?>
                                    <option value="<?php echo($user['id']); ?>"><?php echo($user['login']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form1">
                        <div class="form-button">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>