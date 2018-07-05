<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-content">
                    <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                    <h2>Registro de Encomendas</h2>
                    <p>
                        Lista todas as encomendas registradas para o morador(a).
                    </p>
                    <div class="input-group">
                        <input type="text" placeholder="Campo de busca " class="input form-control">
                        <span class="input-group-btn">
                                <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Buscar</button>
                        </span>
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                        <span class="pull-right small text-muted">1406 Elements</span>
                        <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-gift"></i> Geral</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <?php foreach ($encomendas as $e): ?>
                                        <tr>
                                            <td class="contact-type"><i class="fa fa-briefcase"> </i></td>
                                            <td style="font-weight: bold;"><?php echo($e['empresa']); ?></a></td>
                                            <td class="contact-type"><i class="fa fa-registered"> </i></td>
                                            <td> <?php echo($e['nome_produto']); ?></td>
                                            <td class="contact-type"><i class="fa fa-calendar"> </i></td>
                                            <td> <?php echo date('d-m-Y', strtotime($e['encomendas'])); ?></td>
                                            <td class="client-status"><span class="label label-primary">Recebido</span></td>
                                        </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>