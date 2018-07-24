<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Apartamento</h5>
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
                                <option value="<?php echo $apto_edit['condominios_id']; ?>">
                                    <?php echo $apto_edit['condominios']; ?>
                                </option>
                                <?php foreach($lista_condominio as $c): ?>
                                    <option value="<?php echo $c['id']; ?>"><?php echo $c['nome']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="bloco" for="bloco">Bloco</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="bloco">
                                <option value="<?php echo $apto_edit['blocos_id']; ?>">
                                    <?php echo $apto_edit['blocos']; ?>
                                </option>
                                <?php foreach($lista_bloco as $bloco): ?>
                                    <option value="<?php echo $bloco['id']; ?>"><?php echo $bloco['numero']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="apartamento">Apartamento</label>
                        <div class="col-sm-8">
                            <input type="text" name="apartamento" class="form-control" value="<?php echo $apto_edit['numero_apartamento']; ?>">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telefone">Telefone</label>
                        <div class="col-sm-8"><input type="text" name="telefone" class="form-control" value="<?php echo $apto_edit['telefone']; ?>" data-mask="(00) 0000-0000"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="senha">Senha de Acesso</label>
                        <div class="col-sm-8"><input type="text" name="senha" class="form-control" value="<?php echo $apto_edit[5]; ?>" data-mask="000000"></div>
                    </div>

                    <div class="form1">
                        <div class="form-button">
                            <button class="btn btn-primary" type="submit" onclick="edit();">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>