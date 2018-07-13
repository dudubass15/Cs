<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 style="font-size: 20px; margin-top: 6px; margin-left: 10px;">Apartamentos</h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-w-m btn-default">
                            <a href="<?php echo URL; ?>/apartamento/add" style="color: #515151;">Novo</a>
                        </button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Condomínio</th>
                                    <th style="text-align: center;">Bloco</th>
                                    <th style="text-align: center;">Apartamento</th>
                                    <th style="text-align: center;">Telefone</th>
                                    <th style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista_apartamento as $b): ?>
                                    <tr class="gradeX">
                                        <td class="center"><?php echo $b['condominios']; ?></td>
                                        <td class="center"><?php echo $b['blocos']; ?></td>
                                        <td class="center"><?php echo $b['numero_apartamento']; ?></td>
                                        <td class="center"><?php echo $b['apartamentos']; ?></td>
                                        <td>
                                            <button class="btn btn-info btn-circle" type="button" title="Editar">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/apartamento/edit/<?php echo $b['id']; ?>">
                                                    <i class="fa fa-paste"></i>
                                                </a>
                                            </button>

                                            <button class="btn btn-warning btn-circle" type="button" title="Deletar">
                                                <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/apartamento/del/<?php echo $b['id']; ?>">
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