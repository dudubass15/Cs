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
                        <label class="col-sm-2 control-label" name="condominio" for="condominio">Condomínio</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="condominio" id="condominio">
                                <option></option>
                                <?php foreach($userCondominio as $condominio): ?>
                                    <option value="<?php echo($condominio['id']); ?>"><?php echo($condominio['nome']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="nome" for="nome">Nome</label>
                        <div class="col-sm-8">
                            <input type="text" name="nome" class="form-control" value="<?php echo $usuarios_edit['nome']; ?>">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="login">Login</label>
                        <div class="col-sm-8"><input type="text" name="login" class="form-control" value="<?php echo $usuarios_edit['login']; ?>" placeholder="fulano@cs.com.br"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="senha">Senha</label>
                        <div class="col-sm-8"><input type="password" name="senha" class="form-control"></div>
                    </div>
                    
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="acesso">Administrativo</label>
                            <div class="col-sm-8">
                                <select class="select2_demo_3 form-control form-control" name="acesso">
                                    <option></option>
                                    <option value="1" name="acesso[]">Sim</option>
                                    <option value="2" name="acesso[]">Não</option>
                                </select>
                            </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Permissões</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline"> 
                                <input type="checkbox" value="ADD" id="inlineCheckbox2" name="permissao[]"> Adicionar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="EDIT" id="inlineCheckbox3" name="permissao[]"> Editar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="VIEW" id="inlineCheckbox1" name="permissao[]"> Visualizar </label> <label class="checkbox-inline">
                                <input type="checkbox" value="DEL" id="inlineCheckbox4" name="permissao[]"> Deletar </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" value="CONFIG" id="inlineCheckbox5" name="permissao[]"> Configurar </label>
                        </div>
                    </div><br>

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