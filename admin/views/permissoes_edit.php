<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Permissões Edit</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Nome</label>
                        <div class="col-sm-8"><input type="nome" name="nome" class="form-control" value="<?php echo $permissao_edit['nome']; ?>"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Permissões</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"> 
                                <input type="checkbox" value="ADD" id="inlineCheckbox2" name="permissao[]"> Adicionar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="EDIT" id="inlineCheckbox3" name="permissao[]"> Editar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="VIEW" id="inlineCheckbox1" name="permissao[]"> Visualizar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="DEL" id="inlineCheckbox4" name="permissao[]"> Deletar </label>
                        </div>
                    </div><br>

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