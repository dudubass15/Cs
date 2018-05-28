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
<body>

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
							<a href="#"><i class="fa fa-bell"></i> <span class="nav-label">Encomendas</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="<?php echo URL; ?>/encomenda/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

								<li><a href="<?php echo URL; ?>/encomenda/view1"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Pendentes</span> </a></li>

								<li><a href="<?php echo URL; ?>/encomenda/view2"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Concluídas</span> </a></li>
							</ul>
						</li>

						<li>
							<a href="index.html"><i class="fa fa-cogs"></i> <span class="nav-label">Configurações</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#"><i class="fa fa-building-o"></i> <span class="nav-label">Condomínios</span> <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">

										<li><a href="<?php echo URL; ?>/condominios/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

										<li><a href="<?php echo URL; ?>/condominios"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Visualizar</span> </a></li>

									</ul>
								</li>

								<li>
									<a href="#"><i class="fa fa-users"></i> <span class="nav-label">Blocos</span> <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">

										<li><a href="<?php echo URL; ?>/bloco/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

										<li><a href="<?php echo URL; ?>/bloco/"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Visualizar</span> </a></li>

									</ul>
								</li>

								<li>
									<a href="#"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Apartamentos</span> <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">

										<li><a href="<?php echo URL; ?>/apartamento/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

										<li><a href="<?php echo URL; ?>/apartamento"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Visualizar</span> </a></li>

									</ul>
								</li>

								<li>
									<a href="#"><i class="fa fa-male"></i> <span class="nav-label">Moradores</span> <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">

										<li><a href="<?php echo URL; ?>/morador/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

										<li><a href="<?php echo URL; ?>/morador"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Visualizar</span> </a></li>

									</ul>
								</li>

								<li>
									<a href="#"><i class="fa fa-user-o"></i> <span class="nav-label">Usuarios Sistema</span> <span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">

										<li><a href="<?php echo URL; ?>/usuarios/add"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Novo</span> </a></li>

										<li><a href="<?php echo URL; ?>/usuarios"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Visualizar</span> </a></li>
									</ul>
								</li>
							</ul>
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
						<form role="search" class="navbar-form-custom" method="post" action="#">
							<div class="form-group">
								<input type="text" placeholder="Digite algo para buscar ..." class="form-control" name="top-search" id="top-search">
							</div>
						</form>
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

		<!-- Select2 -->
		<script src="<?php echo URL; ?>/assets/js/plugins/select2/select2.full.min.js"></script>

		<!-- Mascaras para inputs -->
		<script src="<?php echo URL; ?>/assets/js/jquery.mask.js"></script>
		<script src="<?php echo URL; ?>/assets/js/plugins/dataTables/datatables.min.js"></script>

		<!-- Toastr -->
		<script src="<?php echo URL; ?>/assets/js/plugins/toastr/toastr.min.js"></script>

	</body>

			<!-- <script>
				$(document).ready(function() {
					setTimeout(function() {
						toastr.options = {
							closeButton: true,
							progressBar: true,
							showMethod: 'slideDown',
							timeOut: 4000
						};
						toastr.success('Olá, Seja bem vindo ...', 'Sitema CS');

					}, 1300);


					var data1 = [
					[0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
					];
					var data2 = [
					[0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
					];
					$("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
						data1, data2
						],
						{
							series: {
								lines: {
									show: false,
									fill: true
								},
								splines: {
									show: true,
									tension: 0.4,
									lineWidth: 1,
									fill: 0.4
								},
								points: {
									radius: 0,
									show: true
								},
								shadowSize: 2
							},
							grid: {
								hoverable: true,
								clickable: true,
								tickColor: "#d5d5d5",
								borderWidth: 1,
								color: '#d5d5d5'
							},
							colors: ["#1ab394", "#1C84C6"],
							xaxis:{
							},
							yaxis: {
								ticks: 4
							},
							tooltip: false
						}
						);

					var doughnutData = {
						labels: ["App","Software","Laptop" ],
						datasets: [{
							data: [300,50,100],
							backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
						}]
					} ;


					var doughnutOptions = {
						responsive: false,
						legend: {
							display: false
						}
					};


					var ctx4 = document.getElementById("doughnutChart").getContext("2d");
					new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

					var doughnutData = {
						labels: ["App","Software","Laptop" ],
						datasets: [{
							data: [70,27,85],
							backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
						}]
					} ;


					var doughnutOptions = {
						responsive: false,
						legend: {
							display: false
						}
					};


					var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
					new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

					$(".select2_demo_1").select2();
					$(".select2_demo_2").select2();
					$(".select2_demo_3").select2({
						placeholder: "Select a state",
						allowClear: true
					});


				});
			</script>
		-->

		<script>
			$(document).ready(function(){
				$('.dataTables-example').DataTable({
					pageLength: 25,
					responsive: true,
					dom: '<"html5buttons"B>lTfgitp',
					buttons: [
					{ extend: 'copy'},
					{extend: 'csv'},
					{extend: 'excel', title: 'ExampleFile'},
					{extend: 'pdf', title: 'ExampleFile'},

					{extend: 'print',
					customize: function (win){
						$(win.document.body).addClass('white-bg');
						$(win.document.body).css('font-size', '10px');

						$(win.document.body).find('table')
						.addClass('compact')
						.css('font-size', 'inherit');
					}
				}
				]

			});

			});

		</script>
		</html>