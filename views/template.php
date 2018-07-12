<?php

$_SESSION['login'];

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">
	<link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/cs.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/plugins/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

	<!-- Toastr style -->
	<link href="<?php echo URL; ?>/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
</head>
<body class="pace-done body-small">

	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['nome'] ?></strong>
								</span> <span class="text-muted text-xs block"><?php echo $_SESSION['login'] ?> <b class="caret"></b></span> </span> </a>
								<ul class="dropdown-menu animated fadeInRight m-t-xs">
									<li><a href="<?php echo URL; ?>/login/logout">Sair</a></li>
								</ul>
							</div>
							<div class="logo-element">
								IN+
							</div>
						</li>

						<li>
							<a href="<?php echo URL; ?>/home"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
						</li>

						<li>
							<a href="<?php echo URL; ?>/encomenda"><i class="fa fa-gift"></i> <span class="nav-label">Registro Geral</span></a>
						</li>
					</li>
				</ul>
			</div>
		</nav>
		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<a href="<?php echo URL; ?>/login/logout">
								<i class="fa fa-sign-out"></i> Sair
							</a>
						</li>
					</ul>
				</nav>
			</div>
			
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>

			<div class="footer">
				<div class="pull-right">
					<strong>Copyright</strong> CS &copy; 2014-2018
				</div>
			</div>
		</div>

	<!-- Mainly scripts -->
	<script src="<?php echo URL; ?>/assets/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php echo URL; ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="<?php echo URL; ?>/assets/js/inspinia.js"></script>
	<script src="<?php echo URL; ?>/assets/js/plugins/pace/pace.min.js"></script>
	<script src="<?php echo URL; ?>/assets/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

	<!-- Toastr -->
	<script src="<?php echo URL; ?>/assets/js/plugins/toastr/toastr.min.js"></script>

	<!-- JS criado do zero -->
	<script src="<?php echo URL; ?>/assets/js/template.js"></script>

</body>
</html>