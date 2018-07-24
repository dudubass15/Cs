<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Painel de Avisos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo URL; ?>/home">Home</a>
            </li>
            <li class="active">
                <strong>Avisos</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight blog">
    <div class="row">
        <?php foreach($info_aviso as $a): ?>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                        <a href="<?php echo URL; ?>/avisos/view/<?php echo($a['id']); ?>" class="btn-link">
                            <h2>
                                <?php echo($a['titulo']); ?>
                            </h2>
                        </a>
                    <div class="small m-b-xs">
                        <strong><?php echo($a['usuario']); ?></strong> 
                            <span class="text-muted">
                                <i class="fa fa-clock-o"></i> 
                                    <?php echo($a['horario']); ?> 
                                    <?php echo date("d/m/Y", strtotime($a['data_postagem'])); ?>
                            </span>
                    </div>
                    <p>
                        <?php echo($a['resumo']); ?>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Tag(s):</h5>
                            <button class="btn btn-primary btn-xs" type="button">
                                <?php echo($a['tag'] == '' ? 'Nenhuma' : $a['tag']); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>