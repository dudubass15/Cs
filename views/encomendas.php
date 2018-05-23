<br>
<div class="row">
    <?php foreach($encomendas_registradas as $encomendas): ?>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Apto <?php echo($encomendas['apartamentos']); ?> - 
                        <?php echo($encomendas['condominios']); ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <address>
                        <strong>Produto: </strong><?php echo($encomendas['nome_produto']); ?><br>
                        <strong>Empresa: </strong><?php echo($encomendas['empresa']); ?><br>
                        <strong>Recebido em: </strong><?php echo date("d/m/Y", strtotime($encomendas['encomendas'])); ?><br>
                    </address>

                    <address>
                        <strong><?php echo($encomendas['nome_morador']); ?></strong><br>
                        <strong>Bloco:</strong> <?php echo($encomendas['blocos']); ?><br>
                        <strong>Apto:</strong> <?php echo($encomendas['apartamentos']); ?><br>
                        <strong>Celular:</strong> <?php echo($encomendas['celular']); ?><br>
                        <strong>E-mail:</strong> <?php echo($encomendas['moradores']); ?>
                    </address>
                    <div style="width: 100%;">
                        <div style="width: 50%; margin: auto;">
                            <a class="btn btn-primary " href="#" style="margin: auto;"><i class="fa fa-floppy-o"></i> Arquivar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div><br>