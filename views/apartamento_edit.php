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
                            <input type="text" name="condominio" class="form-control" value="<?php echo $apto_edit['condominios']; ?>">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="bloco" for="bloco">Bloco</label>
                        <div class="col-sm-8">
                            <input type="text" name="bloco" class="form-control" value="<?php echo $apto_edit['blocos']; ?>">
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
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>