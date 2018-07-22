<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Editar Aviso</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal" onsubmit="return edit();">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="titulo">Título</label>
                        <div class="col-sm-8"><input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo($avisos_edit[0]['titulo']); ?>"></div>
                    </div>
                               
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="resumo">Resumo</label>
                        <div class="col-sm-8"><textarea type="text" name="resumo" class="form-control" id="resumo" value="<?php echo($avisos_edit[0]['resumo']); ?>"><?php echo($avisos_edit[0]['resumo']); ?></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="texto">Texto</label>
                        <div class="col-sm-8"><textarea type="text" name="texto" class="form-control" id="texto" rows="8" value="<?php echo($avisos_edit[0]['texto']); ?>"><?php echo($avisos_edit[0]['texto']); ?></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="tag">Tag</label>
                        <div class="col-sm-8">
                            <select class="select2_demo_3 form-control form-control" name="tag" id="tag">
                                <option value="<?php echo($avisos_edit[0]['tag']); ?>"><?php echo($avisos_edit[0]['tag']); ?></option>
                                <option value="Assembleia">Assembleia</option>
                                <option value="Comemoração">Comemoração</option>
                                <option value="Evento">Evento</option>
                                <option value="Festa">Festa</option>
                                <option value="Reunião">Reunião</option>
                            </select>
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