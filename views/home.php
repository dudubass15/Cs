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
                    <h1 class="no-margins"><?php echo $d[0]; ?></h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
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
                    <h1 class="no-margins"><?php echo $s[0]; ?></h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
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
                    <h1 class="no-margins"><?php echo $s[0]; ?></h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                    <small>Total</small>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
    