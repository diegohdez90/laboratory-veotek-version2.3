
<html lang="en">
<head>
<title>Informes Bisel</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/lab.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/informes.css">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../css/print-bisel.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/lab.js"></script>
</head>


<body>

	<div class="container">
		<div class="row header">
			<div class="col-md-8">
				<img width="100%" align="center" src="../../img/veotek-lab.png">	
			</div>
			<div class="col-md-4">
				
<?php

$fecha=$_GET['fecha'];
$completos = $_GET['completos'];
$ranurados = $_GET['ranurados'];
$tresPiezas = $_GET['tresPiezas'];

			include ('../funciones.php');
							if (verificar_usuario()){
								print "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido $_SESSION[login] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> ";
								print "<a href='../salir.php'/> Cerrar Sesion</a> ";


							} else {
								header('Location:../sesion.php');
							}

echo'			
			</div>
		</div>';

?>
		<div class="row">
			<div class="col-md-8 informes">
				<div class="reports">
					<div id="donutchart" style="width: 770px; height: 450px;"></div>
				</div>
			</div>

								

			<script type="text/javascript" src="https://www.google.com/jsapi"></script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Armazones', 'Total'],
						['Completos',<?php echo $completos;?>],
						['Ranurados',<?php echo $ranurados;?>],
						['3 Piezas',<?php echo $tresPiezas;?>],
						]);
					var options = {
						title: 'Armazones de <?php echo $fecha; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
					chart.draw(data, options);
				}
			</script>



			<div class="col-md-4 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="../seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
	                        Modificar Pedidos</p>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="../index.php"><span class="glyphicon glyphicon-home" style="font-size:44px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="../articulos.php"><span class="glyphicon glyphicon-file" style="font-size:44px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="../alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:44px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><a href="../baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:44px;"></span></a><br>
		                        Salidas</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="../modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:44px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><a href="../pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:44px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><a href="../informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:44px;"></span></a><br>
		                        Informes</php>
							</li>
							<li>
								<p class="text-center"><a href="../busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:44px;"></span></a><br>
		                        Busqueda</p>
							</li>
							<li>
								<p class="text-center"><span onclick="window.print()" class="glyphicon glyphicon-print" style="font-size:44px;"></span></a><br>
		                        Imprimir</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>



