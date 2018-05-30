<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Usuarios</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="nome" for="nome">Nome completo</label>
                        <div class="col-sm-8">
                            <input type="text" name="nome" class="form-control" value="<?php echo $usuarios_edit['nome']; ?>">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cpf">CPF</label>
                        <div class="col-sm-8"><input type="text" name="cpf" class="form-control" data-mask="000.000.000-00" value="<?php echo $usuarios_edit['cpf']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="login">Login</label>
                        <div class="col-sm-8"><input type="text" name="login" class="form-control" value="<?php echo $usuarios_edit['login']; ?>" placeholder="fulano@cs.com.br"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="senha">Senha</label>
                        <div class="col-sm-8"><input type="text" name="senha" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="tipo">Tipo</label>
                            <div class="col-sm-8">
                                <select class="select2_demo_3 form-control form-control" name="tipo">
                                    <option></option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuário</option>
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