<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Encomenda</h5>
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
                            <select class="select2_demo_3 form-control form-control" name="condominio">
                                <option></option>
                                <?php foreach($lista_condominio as $condominio): ?>
                                    <option value="<?php echo($condominio['id']); ?>">
                                        <?php echo($condominio[1]); ?>
                                    </option>
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
                                    <option value="<?php echo($bloco['id']); ?>">
                                        Bloco - <?php echo($bloco[2]); ?>
                                    </option>
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
                                    <option value="<?php echo($apartamento['id']); ?>">
                                        <?php echo($apartamento[3]); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="morador">Morador(a)</label>
                        <div class="col-sm-8">
                             <select class="select2_demo_3 form-control form-control" name="morador" value="<?php echo($morador['id']); ?>">
                                <option></option>
                                <?php foreach($lista_morador as $morador): ?>
                                    <option value="<?php echo($morador['id']); ?>">
                                        <?php echo($morador['nome_morador']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome_produto">Nome do Produto</label>
                        <div class="col-sm-8"><input type="text" name="nome_produto" value="<?php echo $lista_info['nome_produto']; ?>" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="empresa">Empresa</label>
                        <div class="col-sm-8"><input type="text" name="empresa" class="form-control" value="<?php echo($lista_info['empresa']); ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="observacao">Observações</label>
                        <div class="col-sm-8"><textarea class="form-control" rows="3" name="observacao" value="<?php echo($lista_encomendas['observacao']); ?>"></textarea></div>
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