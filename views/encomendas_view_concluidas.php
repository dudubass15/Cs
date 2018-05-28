<br>
<div class="row">
    <?php foreach($encomendas_concluidas as $encomenda): ?>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Apto <?php echo($encomenda['apartamentos']); ?> - 
                        <?php echo($encomenda['condominios']); ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <address>
                        <strong>Produto: </strong><?php echo($encomenda['nome_produto']); ?><br>
                        <strong>Empresa: </strong><?php echo($encomenda['empresa']); ?><br>
                        <strong>Recebido em: </strong><?php echo date("d/m/Y", strtotime($encomenda['encomendas'])); ?><br>
                    </address>

                    <address>
                        <strong><?php echo($encomenda['nome_morador']); ?></strong><br>
                        <strong>Bloco:</strong> <?php echo($encomenda['blocos']); ?><br>
                        <strong>Apto:</strong> <?php echo($encomenda['apartamentos']); ?><br>
                        <strong>Celular:</strong> <?php echo($encomenda['celular']); ?><br>
                        <strong>E-mail:</strong> <?php echo($encomenda['moradores']); ?>
                    </address>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div><br>