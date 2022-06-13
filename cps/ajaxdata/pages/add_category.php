<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');

    if (($_SESSION['user']!="jatin")) {
   	header('location:logout.php');
    } else{

    if(isset($_POST['submit-category']))
    {
        $catname=$_POST['catename'];
        $sdesc=$_POST['sdesc'];
        
        $query=mysqli_query($con, "INSERT into vcategory(VehicleCat,shortDescription) value('$catname','$sdesc')");
        if ($query) {
        $msg="Category has been added";
    
        header('location:/Car-parking-system/cps/ajaxdata/index.php');
        exit;
    }
    else
        {
        $msg="Something Went Wrong";
        }

    
    }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datatable.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
</head>
<body>
	
		<?php
		$page="vehicle-category";
        ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Vehicle Category Management</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Add New Vehicle Category</div>
						<div class="panel-body">

                        <?php if($msg)
						echo "<div class='alert bg-info ' role='alert'>
						<em class='fa fa-lg fa-warning'>&nbsp;</em> 
						$msg
						<a href='#' class='pull-right'>
						<em class='fa fa-lg fa-close'>
						</em></a></div>" ?> 
                        
                        <div class="col-md-12">

							<form method="post" action="./pages/add_category.php">
                            
								<div class="form-group">
									<label>Category Name</label>
									<input type="text" class="form-control" placeholder="Enter Here.." id="catename" name="catename" required>
								</div>


								<div class="form-group">
									<label>Short Description</label>
									<input type="text" class="form-control" placeholder="Enter Here.." id="sdesc" name="sdesc" required>
								</div>
								


									<input type="submit" class="btn btn-success" name="submit-category">
									<button type="reset" class="btn btn-default">Reset</button>
								</div> <!--  col-md-12 ends -->
                            </form>

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

<?php }  ?>
