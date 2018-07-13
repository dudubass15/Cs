<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 style="font-size: 20px; margin-top: 6px; margin-left: 10px;">Condomínios</h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-w-m btn-default">
                            <a href="<?php echo URL; ?>/condominios/add" style="color: #515151;">Novo</a>
                        </button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Nome</th>
                                    <th style="text-align: center;">Cnpj</th>
                                    <th style="text-align: center;">Endereço</th>
                                    <th style="text-align: center;">Cidade</th>
                                    <th style="text-align: center;">Estado</th>
                                    <th style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista_condominio as $condominio): ?>
                                <tr class="gradeX">
                                    <td class="center"><?php echo($condominio[1]); ?></td>
                                    <td class="center"><?php echo($condominio[2]); ?></td>
                                    <td class="center"><?php echo($condominio[4]); ?></td>
                                    <td class="center"><?php echo($condominio[5]); ?></td>
                                    <td class="center"><?php echo($condominio[6]); ?></td>
                                    <td>
                                        <button class="btn btn-info btn-circle" type="button" title="Editar">
                                            <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/condominios/edit/<?php echo($condominio[0]); ?>">
                                            <i class="fa fa-paste"></i>
                                        </button>

                                        <button class="btn btn-warning btn-circle" type="button" title="Deletar">
                                        <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/condominios/del/<?php echo($condominio[0]); ?>">
                                            <i class="fa fa-times"></i>
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