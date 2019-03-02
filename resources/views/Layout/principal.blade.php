<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico">

	<title>Gcon-pub</title>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- bootstrap theme -->
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<!--external css-->
	<!-- font icon -->
	<link href="css/elegant-icons-style.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<!-- full calendar css-->
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
	<!-- easy pie chart-->
	<link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
	<!-- container section start -->
	<section id="container" class="">


		<header class="header dark-bg">
			<div class="toggle-nav">
				<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
					<i class="icon_menu"></i>
				</div>
			</div>

			<!--logo start-->
			<a href="/" class="logo">Gcon
				<span class="lite">Pub</span>
			</a>
			<!--logo end-->

			<div class="top-nav notification-row">
				<!-- notificatoin dropdown start-->
				<ul class="nav pull-right top-menu">
					<!-- user login dropdown start-->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<span class="profile-ava">
								<img alt="" src="">
							</span>
							<span class="username">Bem Vindo:
								<strong>Adriano Xavier</strong>
							</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu extended logout">
							<div class="log-arrow-up"></div>
							<li class="eborder-top">
								<a href="#">
									<i class="icon_profile"></i> Meu Perfil</a>
							</li>
							<li>
								<a href="#">
									<i class="icon_mail_alt"></i> Menssagens</a>
							</li>
							<li>
								<a href="#">
									<i class="icon_clock_alt"></i> Linha do Tempo</a>
							</li>
							<li>
								<a href="login.html">
									<i class="icon_key_alt"></i> Sair</a>
							</li>
						</ul>
					</li>
					<!-- user login dropdown end -->
				</ul>
				<!-- notificatoin dropdown end-->
			</div>
		</header>
		<!--header end-->

		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu">
					<li class="active">
						<a class="" href="/">
							<i class="icon_house_alt"></i>
							<span>Home</span>
						</a>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="">
							<i class="icon_document_alt"></i>
							<span>Contratos</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li>
								<a class="" href="cadastrar contrato">Cadastrar Contrato</a>
							</li>
							<li>
								<a class="" href="contratos">Listar contratos</a>
							</li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="">
							<i class="icon_desktop"></i>
							<span>Participantes</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li>
								<a class="" href="cadastrar participante">Cadastrar Participantes</a>
							</li>
							<li>
								<a class="" href="listar participantes">Listar Participantes</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->

		<section class="content" id="main-content">
			<section class="wrapper">
				@yield('conteudo')
			</section>
		</section>
	</section>
	<!-- container section start -->

	<!-- javascripts -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- nice scroll -->
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	<!-- charts scripts -->
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="js/jquery.sparkline.js" type="text/javascript"></script>
	<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
	<script src="js/owl.carousel.js"></script>
	<!-- jQuery full calendar -->
	<<script src="js/fullcalendar.min.js"></script>
		<!-- Full Google Calendar - Calendar -->
		<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<!--script for this page only-->
		<script src="js/calendar-custom.js"></script>
		<script src="js/jquery.rateit.min.js"></script>
		<!-- custom select -->
		<script src="js/jquery.customSelect.min.js"></script>
		<script src="assets/chart-master/Chart.js"></script>

		<!--custome script for all page-->
		<script src="js/scripts.js"></script>
		<!-- custom script for this page-->
		<script src="js/sparkline-chart.js"></script>
		<script src="js/easy-pie-chart.js"></script>
		<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="js/jquery-jvectormap-world-mill-en.js"></script>
		<script src="js/xcharts.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/gdp-data.js"></script>
		<script src="js/morris.min.js"></script>
		<script src="js/sparklines.js"></script>
		<script src="js/charts.js"></script>
		<script src="js/jquery.slimscroll.min.js"></script>
</body>

</html>