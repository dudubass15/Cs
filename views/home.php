<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInUp">
            <?php foreach ($encomendas_users as $e): ?>
                <ul class="notes">
                    <li>
                        <div>
                            <small>Horário: <?php echo($e['horario']); ?> Data: <?php echo date('d-m-Y', strtotime($e['data_postagem'])); ?></small><br><br>

                            <h4 style="text-align: center;">
                                <?php echo($e['nome_produto']); ?>
                            </h4>

                            <h4 style="text-align: center;">
                                <?php echo($e['empresa']); ?>
                            </h4><br>

                            <!-- <p><?php echo($e['observacao']); ?></p> -->
                            
                            <a href="#" title="Finalizado"><i class="fa fa-check-square lg"></i></a>
                        </div>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>