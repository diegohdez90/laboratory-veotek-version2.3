<html lang="en">
<head>
<title>Informes Bisel</title>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>


<body>



						<div id="days-6">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-6" style="width: 900px; height: 400px;"></div>
						</div>
						<div id="days-5">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-5" style="width: 900px; height: 400px;"></div>
						</div>
						<div id="days-4">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-4" style="width: 310px; height: 200px;"></div>
						</div>
						<div id="days-3">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-3" style="width: 310px; height: 200px;"></div>
						</div>
						<div id="days-2">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-2" style="width: 310px; height: 200px;"></div>
						</div>
						<div id="days-1">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart-1" style="width: 310px; height: 200px;"></div>
						</div>
						<div id="today">
							<img width="100%" src="../img/veotek-lab.png">
							<h3 class="text-center">Biseles por T&eacute;cnico</h3>
							<div id="donutchart" style="width: 310px; height: 200px;"></div>	
						</div>
						<div class="row change-page">
							  <ul class="pagination" style="font-size:10px;margin-left:20px;">
						            <li class="one active pagination"><a href="#days-6">Hace 6 d&iacute;as</a></li>
						            <li class="two"><a href="#days-5">Hace 5 d&iacute;as</a></li>
						            <li class="three"><a href="#days-4">Hace 4 d&iacute;as</a></li>
						            <li class="four"><a href="#days-3">Hace 3 d&iacute;as</a></li>
						            <li class="five"><a href="#days-2">Hace 2 d&iacute;as</a></li>    
						            <li class="six"><a href="#days-2">Hace 1 d&iacute;a</a></li>
						            <li class="seven"><a href="#today">Hoy</a></li>
								</ul>
							</div>


					<?php
							$sdatea=date("Y-m-d");
							$sdateb=date("Y-m-d",strtotime("-1 days"));
							$sdatec=date("Y-m-d",strtotime("-2 days"));
							$sdated=date("Y-m-d",strtotime("-3 days"));
							$sdatee=date("Y-m-d",strtotime("-4 days"));
							$sdatef=date("Y-m-d",strtotime("-5 days"));
							$sdateg=date("Y-m-d",strtotime("-6 days"));

					?>
								

			</script>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			    <script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdateg; ?>',
						//pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-6'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatef; ?>',
						//pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-5'));
					chart.draw(data, options);
				}
			</script>




			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatee; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-4'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdated; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-3'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatec; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-2'));
					chart.draw(data, options);
				}
			</script>



			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdateb; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-1'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatea; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
					chart.draw(data, options);
				}
			</script>


</body>


