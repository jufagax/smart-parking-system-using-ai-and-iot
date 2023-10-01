<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if (strlen($_SESSION['vpmsaid']==0)) 
	{
    	header('location:logout.php');
    }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
        <?php include 'includes/navigation.php' ?>
	
		<?php
		$page="income";
		include 'includes/sidebar.php'
		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Income</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Total Income</div>
						<div class="panel-body">
                        <div class="col-md-12 no-padding">
                            <div class="row progress-labels">
								<h1 class="col-md-12 text-center">₹ <?php include 'counters/income-count.php' ?></h1>
							</div>
                            <p class="lead text-center"><?php echo "Total parking charge collected till date - " . date("Y/m/d") . "<br>"; ?></p>
							
                        </div>

						</div>
					</div>
				</div>	
        </div>

        <div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Today's total parking charge collection</div>
						<div class="panel-body">
                        
                        <div class="col-md-12 no-padding">

                        
                            <div class="row progress-labels">
								<h1 class="col-md-12 text-center">₹ <?php include 'counters/currentday-income.php' ?></h1>
								<!-- <div class="col-sm-6" style="text-align: right;">50%</div> -->
							</div>
							
                        </div> 
						</div>
					</div>
				</div>	
        </div>


        <div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Yesterday's total parking charge collection</div>
						<div class="panel-body">
                        
                        <div class="col-md-12 no-padding">

                        
                            <div class="row progress-labels">
								<h1 class="col-md-12 text-center">₹ <?php include 'counters/yesday-income.php' ?></h1>
							</div>
							
                        </div>
						</div>
					</div>
				</div>	
        </div>
	</div>	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
		
</body>
</html>