<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Condomínios</h5>
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
                                    <td class="center"><?php print_r($condominio[1]); ?></td>
                                    <td class="center"><?php print_r($condominio[2]); ?></td>
                                    <td class="center"><?php print_r($condominio[4]); ?></td>
                                    <td class="center"><?php print_r($condominio[5]); ?></td>
                                    <td class="center"><?php print_r($condominio[6]); ?></td>
                                    <td>
                                        <button class="btn btn-info btn-circle" type="button">
                                            <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/condominios/edit/<?php print_r($condominio[0]); ?>">
                                            <i class="fa fa-paste"></i>
                                        </button>

                                        <button class="btn btn-warning btn-circle" type="button">
                                        <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/condominios/del/<?php print_r($condominio[0]); ?>">
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