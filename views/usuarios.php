<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Usuarios</h5>
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
                                    <th style="text-align: center;">E-mail</th>
                                    <th style="text-align: center;">Senha</th>
                                    <th style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista_usuarios as $b): ?>
                                    <tr class="gradeX">
                                        <td class="center"><?php echo $b['login']; ?></td>
                                        <td class="center"><?php echo base64_decode($b['senha']); ?></td>
                                        <td>
                                            <button class="btn btn-info btn-circle" type="button">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/usuarios/edit/<?php echo $b['id']; ?>">
                                                    <i class="fa fa-paste"></i>
                                                </a>
                                            </button>

                                            <button class="btn btn-warning btn-circle" type="button">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/usuarios/del/<?php echo $b['id']; ?>">
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