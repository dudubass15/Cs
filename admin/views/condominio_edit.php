<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Condomínio</h5>
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
                        <div class="col-sm-8"><input type="text" name="nome" class="form-control" value="<?php echo $condominio_info['nome']; ?>"></div>
                    </div>
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cnpj">CNPJ</label>
                        <div class="col-sm-8"><input type="text" name="cnpj" class="form-control" data-mask="00.000.000/0000-00" value="<?php echo $condominio_info['cnpj']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="telefone">Telefone</label>
                        <div class="col-sm-8"><input type="text" name="telefone" class="form-control" data-mask="(00) 0000-0000" value="<?php echo $condominio_info['telefone']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="endereco">Endereço</label>
                        <div class="col-sm-8"><input type="text" name="endereco" class="form-control" value="<?php echo $condominio_info['endereco']; ?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="cidade" for="cidade">Cidade</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="cidade">
                                <option><?php echo $condominio_info['cidade']; ?></option>
                                <option value="Cariacia">Cariacia - ES</option>
                                <option value="Colatina">Colatina - ES</option>
                                <option value="Domingos Martins">Domingos Martins - ES</option>
                                <option value="Guarapari">Guarapari - ES</option>
                                <option value="Linhares">Linhares - ES</option>
                                <option value="Marilândia">Marilândia - ES</option>
                                <option value="São Matheus">São Matheus - ES</option>
                                <option value="Serra">Serra - ES</option>
                                <option value="Vila Velha">Vila Velha - ES</option>
                                <option value="Vitória">Vitória - ES</option>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" name="estado" for="estado">Estado</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="estado">
                                <option><?php echo $condominio_info['estado']; ?></option>
                                <option value="Acre">Acre (AC)</option>
                                <option value="Alagoas">Alagoas (AL)</option>
                                <option value="Amapá">Amapá (AP)</option>
                                <option value="Amazonas">Amazonas (AM)</option>
                                <option value="Bahia">Bahia (BA)</option>
                                <option value="Ceará">Ceará (CE)</option>
                                <option value="Distrito Federal">Distrito Federal (DF)</option>
                                <option value="Espírito Santo">Espírito Santo (ES)</option>
                                <option value="Goiás">Goiás (GO)</option>
                                <option value="Maranhão">Maranhão (MA)</option>
                                <option value="Mato Grosso">Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais">Minas Gerais (MG)</option>
                                <option value="Pará">Pará (PA) </option>
                                <option value="Paraíba">Paraíba (PB)</option>
                                <option value="Paraná">Paraná (PR)</option>
                                <option value="Pernambuco">Pernambuco (PE)</option>
                                <option value="Piauí">Piauí (PI)</option>
                                <option value="Rio de Janeiro">Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul (RS)</option>
                                <option value="Rondônia">Rondônia (RO)</option>
                                <option value="Roraima">Roraima (RR)</option>
                                <option value="Santa Catarina">Santa Catarina (SC)</option>
                                <option value="São Paulo">São Paulo (SP)</option>
                                <option value="Sergipe">Sergipe (SE)</option>
                                <option value="Tocantins">Tocantins (TO)</option>
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