<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Aviso</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo URL; ?>/home">Home</a>
            </li>
            <li>
                <a href="<?php echo URL; ?>/avisos">Avisos</a>
            </li>
            <li class="active">
                <strong>Visualização</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight article">
<?php foreach($visualizar_aviso as $v): ?>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="pull-right">
                        <button class="btn btn-white btn-xs" type="button" style="text-decoration: none;">
                            <a href="<?php echo URL; ?>/avisos/edit/<?php echo($v['id']); ?>">Editar</a>
                        </button>
                        <button class="btn btn-white btn-xs" type="button">
                            <a href="<?php echo URL; ?>/avisos/del/<?php echo($v['id']); ?>" onclick="return del();">Deletar</a>
                        </button>
                    </div>
                    <div class="text-center article-title">
                    <span class="text-muted"><i class="fa fa-clock-o"></i> 
                        <?php echo($v['horario']); ?> 
                        <?php echo date("d/m/Y", strtotime($v['data_postagem'])); ?>
                    </span>
                        <h1>
                            <?php echo($v['titulo']); ?>
                        </h1>
                    </div>
                    <p>
                        <?php echo($v['resumo']); ?>
                    </p>
                    <p>
                        <?php echo($v['texto']); ?>
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                                <h5>Tag(s):</h5>
                                <button class="btn btn-primary btn-xs" type="button">
                                    <?php echo($v['tag'] == '' ? 'Nenhuma' : $v['tag']); ?>
                                </button>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>