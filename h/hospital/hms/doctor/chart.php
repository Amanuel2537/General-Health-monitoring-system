<?php

$connect = mysqli_connect("localhost", "root", "", "phms");

$query = "SELECT * FROM patient_data   ORDER BY id DESC LIMIT 30";

$result = mysqli_query($connect, $query);

$chart_patient = '';
while ($row = mysqli_fetch_array($result)) {

	$chart_patient .= "{ Time_Stamp:'" . $row["Time_Stamp"] . "', Temperature:" . $row["Temperature"] . ",BPM:" . $row["BPM"] . ",  oxygen_level:" . $row["oxygen_level"] . "}, ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Doctor | Dashboard</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle"> Patient Realdata value</h1>
							</div>

							<ol class="breadcrumb">
								<li>
									<span>User</span>
								</li>
								<li class="active">
									<span>chart page</span>
								</li>
							</ol>
						</div>
					</section>
				</div>


				<div id="app">
					<style>
						.container>h2 {
							align-items: center;
						}

						.container>h3 {
							align-items: center;
						}
					</style>

					<br /><br />
					<div class="container" style="width:900px;">

						<br /><br />
						<div id="chart"></div>
					</div>



					<div id="app">
						<?php include('include/sidebar.php'); ?>
						<div class="app-content">

							<?php include('include/header.php'); ?>

							<!-- end: SELECT BOXES -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>

<!-- <?php include('include/footer.php'); ?> -->
<!-- start: SETTINGS -->
<?php include('include/setting.php'); ?>

<!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="vendor/autosize/autosize.min.js"></script>
<script src="vendor/selectFx/classie.js"></script>
<script src="vendor/selectFx/selectFx.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="assets/js/main.js"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script src="assets/js/form-elements.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		FormElements.init();
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
<!-- start: FOOTER -->
<?php include('include/footer.php'); ?>
<!-- end: FOOTER -->
</script>
<title> patetnt data in bar chart</title>
<script>
	Morris.Bar({
		element: 'chart',
		data: [<?php echo $chart_patient; ?>],
		pointFillColors: ['grey', 'red'],
		pointStrokeColors: ['black', 'blue'],
		xkey: 'Time_Stamp',
		ykeys: ['Temperature', 'BPM', 'oxygen_level'],
		labels: ['Temperature', 'BPM', 'oxygen_level'],
		// hideHover: 'auto',
		//  		 stacked: true
		//           barColors:['##FF0000', '#9b5cd4','##FF0000',],
	});
</script>

<script>
	Morris.Line({
		element: 'chart',
		data: [<?php echo $chart_patient; ?>],
		pointFillColors: ['grey', 'red'],
		pointStrokeColors: ['black', 'blue'],
		xkey: 'Time_Stamp',
		ykeys: ['Temperature', 'BPM', 'oxygen_level'],
		labels: ['Temperature', 'BPM', 'oxygen_level'],
	


		ymin: -100,
		ymax: 100,
		// numLines: 8,


	});
</script>

</html>