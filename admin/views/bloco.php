<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Blocos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Condomínio</th>
                                    <th style="text-align: center;">Número</th>
                                    <th style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista_bloco as $b): ?>
                                    <tr class="gradeX">
                                        <td class="center"><?php echo $b['condominio']; ?></td>
                                        <td class="center"><?php echo $b['numero']; ?></td>
                                        <td>
                                            <button class="btn btn-info btn-circle" type="button" title="Editar">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/bloco/edit/<?php echo $b['id']; ?>">
                                                    <i class="fa fa-paste"></i>
                                                </a>
                                            </button>

                                            <button class="btn btn-warning btn-circle" type="button" title="Deletar">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/bloco/del/<?php echo $b['id']; ?>">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </button>
                                        </td>
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