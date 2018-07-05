<br>
<?php foreach ($encomendas_dia as $d): ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Dia</span>
                    <h5>Encomendas</h5>
                </div>
                <div class="ibox-content">
                    <?php 
                        $porcentagemDia = $d[0] / 100;
                    ?>
                    <h1 class="no-margins"><?php echo $d[0]; ?></h1>
                    <div class="stat-percent font-bold text-success"><?php echo($porcentagemDia); ?>% <i class="fa fa-bolt"></i></div>
                    <small>Total</small>
                </div>
            </div>
        </div>
<?php endforeach; ?>

<?php foreach ($encomendas_mes as $s): ?>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Mês</span>
                    <h5>Encomendas</h5>
                </div>
                <div class="ibox-content">
                    <?php 
                        $porcentagemMes = $s[0] / 100;
                    ?>
                    <h1 class="no-margins"><?php echo $s[0]; ?></h1>
                    <div class="stat-percent font-bold text-info"><?php echo($porcentagemMes); ?>% <i class="fa fa-level-up"></i></div>
                    <small>Total</small>
                </div>
            </div>
        </div>
<?php endforeach; ?>

<?php foreach ($encomendas_ano as $s): ?>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">Ano</span>
                    <h5>Encomendas</h5>
                </div>
                <div class="ibox-content">
                    <?php 
                        $porcentagemAno = $s[0] / 100;
                    ?>
                    <h1 class="no-margins"><?php echo $s[0]; ?></h1>
                    <div class="stat-percent font-bold text-danger"><?php echo($porcentagemAno); ?>% <i class="fa fa-level-down"></i></div>
                    <small>Total</small>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


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
        
</script>
