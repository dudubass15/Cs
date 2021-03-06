<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">

    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo URL; ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

</head>

<body class="gray-bg">
    <!-- Botão que dá acesso a pagina administrativa da aplicacao -->
    <div id="button-left">
        <a href="<?php echo URL; ?>/admin/login" class="btn btn-w-m btn-link"><i class="fa fa-home"></i> <span class="nav-label">Administrativo</span></a>
    </div>

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">CS</h1>
            </div>

            <form class="m-t" method="POST" role="form">
                <div class="form-group">
                    <input type="email" name="login" class="form-control" placeholder="fulano@cs.com.br" required="@cs.com.br">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo URL; ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>