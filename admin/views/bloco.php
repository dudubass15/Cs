<?php

$usuario = new usuarios();

$id = $_SESSION['id'];

$dados = $usuario->getPermissao($id);

?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 style="font-size: 20px; margin-top: 6px; margin-left: 10px;">Blocos</h5>
                    <div class="ibox-tools">
                        <button type="button" class="btn btn-w-m btn-default">
                            <a href="<?php echo URL; ?>/bloco/add" style="color: #515151;">Novo</a>
                        </button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Condomínio</th>
                                    <th style="text-align: center;">Número</th>
                                    <?php if(in_array('DEL', $dados) or in_array('EDIT', $dados)): ?>
                                        <th style="text-align: center;">Ações</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista_bloco as $b): ?>
                                    <tr class="gradeX">
                                        <td class="center"><?php echo $b['condominio']; ?></td>
                                        <td class="center"><?php echo $b['numero']; ?></td>
                                        <?php if(in_array('DEL', $dados) or in_array('EDIT', $dados)): ?>
                                            <td>
                                                <?php if(in_array('EDIT', $dados)): ?>
                                                    <button class="btn btn-info btn-circle" type="button" title="Editar">
                                                        <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/bloco/edit/<?php echo $b['id']; ?>">
                                                            <i class="fa fa-paste"></i>
                                                        </a>
                                                    </button>
                                                <?php endif; ?>

                                                <?php if(in_array('DEL', $dados)): ?>
                                                    <button class="btn btn-warning btn-circle" type="button" title="Deletar">
                                                        <a style="text-decoration: none; color: white;" href="<?php echo URL; ?>/bloco/del/<?php echo $b['id']; ?>">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
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