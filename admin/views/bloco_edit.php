<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Novo Bloco</h5>
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
                                <option value="<?php echo($bloco_info['id']); ?>"><?php echo $bloco_info['condominios']; ?></option>
                                <?php foreach($lista_condominio as $condominio): ?>
                                    <option value="<?php echo($condominio['id']); ?>">
                                        <?php echo($condominio['nome']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="numero">Nº Bloco</label>
                        <div class="col-sm-8"><input type="number" name="numero" class="form-control" value="<?php echo $bloco_info['numero']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome_bloco">Nome</label>
                        <div class="col-sm-8"><input type="text" name="nome_bloco" class="form-control" value="<?php echo $bloco_info['blocos']; ?>"></div>
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