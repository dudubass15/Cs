<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Morador(a)</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="condominio" for="condominio">Condomínio</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="condominio" value="<?php echo $lista_condominio['condominios']; ?>">
                                <option></option>
                                <?php foreach($lista_condominio as $condominio): ?>
                                    <option value="<?php print_r($condominio['id']); ?>"><?php print_r($condominio['nome']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="bloco" for="bloco">Bloco</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="bloco">
                                <option></option>
                                <?php foreach($lista_bloco as $bloco): ?>
                                    <option value="<?php print_r($bloco['id']); ?>">Bloco - <?php print_r($bloco[2]); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="apartamento" for="apartamento">Apartamento</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="apartamento">
                                <option></option>
                                <?php foreach($lista_apartamento as $apartamento): ?>
                                    <option value="<?php echo($apartamento['id']); ?>"><?php print_r($apartamento[3]); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Morador(a)</label>
                        <div class="col-sm-8"><input type="text" name="nome" class="form-control" value="<?php echo $moradores_info['nome_morador']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="celular">Celular</label>
                        <div class="col-sm-8"><input type="text" name="celular" class="form-control" data-mask="(00) 00000-0000" value="<?php echo $moradores_info['celular']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="celular2">Celular 2</label>
                        <div class="col-sm-8"><input type="text" name="celular2" class="form-control" data-mask="(00) 00000-0000" value="<?php echo $moradores_info['celular2']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cpf">CPF</label>
                        <div class="col-sm-8"><input type="text" name="cpf" class="form-control" data-mask="000.000.000-00" value="<?php echo $moradores_info['cpf']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">E-mail</label>
                        <div class="col-sm-8"><input type="email" name="email" class="form-control" value="<?php echo $moradores_info['email']; ?>"></div>
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