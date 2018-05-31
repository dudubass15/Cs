<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInUp">
            <ul class="notes">
                <li>
                    <div>
                        <?php foreach ($encomendas_users as $e): ?>

                            <small>12:03:28 12-04-2014</small><br><br>

                            <h4 style="text-align: center;">
                                <?php echo($e['empresa']); ?>
                            </h4>

                            <h4 style="text-align: center;">
                                <?php echo($e['nome_produto']); ?>
                            </h4><br>

                            <!-- <p><?php echo($e['observacao']); ?></p> -->
                            
                            <a href="#"><i class="fa fa-trash-o "></i></a>
                        <?php endforeach ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>