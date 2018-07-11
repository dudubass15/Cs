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
                            </h4><br><p></p><p></p>

                            <!-- <a href="<?php echo URL; ?>/home/arquivar/<?php echo($e['']); ?>" title="Finalizado"><i class="fa fa-check-square lg"></i></a> -->

                            <a href="<?php echo URL; ?>/home/arquivar/<?php echo($e[0]); ?>" style="width: 90%;">
                                <button type="button" class="btn btn-outline btn-warning" onclick="NewCadastro();" style="width: 100%;"><i class="fa fa-check-square lg"></i> Recebido</button>
                            </a>                            
                        </div>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo URL; ?>/assets/js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">

        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Olá Usuario, seja bem vindo ...', 'Sistema CS');

            }, 1300);
        })

        function NewCadastro(){
            alert("Encomenda arquivada com sucesso !");
        }
        
</script>