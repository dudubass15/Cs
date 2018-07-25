<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Encomendas Concluídas</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>Condomínio</th>
                                    <th>Bloco</th>
                                    <th>Apartamento</th>
                                    <th>Morador(a)</th>
                                    <th>Produto</th>
                                    <th>Empresa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($encomendas_concluidas as $encomenda): ?>
                                <tr class="gradeX">
                                    <td><?php echo($encomenda['condominios']); ?></td>
                                    <td><?php echo($encomenda['blocos']); ?></td>
                                    <td><?php echo($encomenda['apartamentos']); ?></td>
                                    <td><?php echo($encomenda['nome_morador']); ?></td>
                                    <td class="center"><?php echo($encomenda['nome_produto']); ?></td>
                                    <td class="center"><?php echo($encomenda['empresa']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>