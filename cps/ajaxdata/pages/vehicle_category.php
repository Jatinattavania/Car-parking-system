<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if (($_SESSION['user']!="jatin")) {
        header('../location:logout.php');
        } else 
?>

<!DOCTYPE html>   
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	   <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/datatable.css" rel="stylesheet">
	   <link href="css/datepicker3.css" rel="stylesheet">
	   <link href="css/styles.css" rel="stylesheet">
      <title>vehicle_category</title>
   </head>
   <body>

      <div class="row">
      <div class="col-lg-12">
      <div class="panel panel-default">
      <div class="panel-heading">Vehicle Categories <a type="button" class="btn btn-sm btn-primary page9">Add New Vehicle Category</a></div>
      <div class="panel-body">
      <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">

         <thead>
            <tr>
               <th>#</th>
               <th>Vehicle Category</th>
               <th>Published On</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <!-- <tr>
               <td>1</td>
               <td>Two Wheeler</td>
               <td>garbage value</td>
               <td><a href=""><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i>success</button></a>
                  <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button> </a>
               </td>
            </tr>
            <tr>
               <td>2</td>
               <td>Three Wheeler</td>
               <td>garbage value</td>
               <td><a href=""><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i>success</button></a>
                  <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button> </a>
               </td>
            </tr>
            <tr>
               <td>3</td>
               <td>Four Wheeler</td>
               <td>garbage value</td>
               <td><a href=""><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i>success</button></a>
                  <a href=""><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button> </a>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="col py-3">
         <div id="page_1"></div>
      </div> -->
      <?php
        $ret=mysqli_query($con,"SELECT * from  vcategory");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>
   
            <tr>

            <td><?php echo $cnt;?></td>
                 
            <td><?php  echo $row['VehicleCat'];?></td>

            <td><?php  echo $row['CreationDate'];?></td>
            <?php  $vid= $row['ID'];?>
            
            <td><a href="#" class="page14"> <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button> </a>
            <a href="#" class="page15"> <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> </a>
            </td>
             
            <?php $cnt=$cnt+1;}?>
        </tbody>

         </table>
			</div>
			</div>
			</div>
				
				
				
</div><!--/.row-->
		
	
	</div>	<!--/.main-->
	
   <script>
      $(document).ready(function () {
         $(".page9").click(function () {
            $("#page").load("pages/add_category.php");
         });
      });

      
      $(document).ready(function () {
         $(".page14").click(function () {
            $("#page").load("pages/update_category.php?editid=<?php echo $vid;?>");
         });
      });

      $(document).ready(function () {
         $(".page15").click(function () {
            $("#page").load("pages/remove_category.php?editid=<?php echo $vid;?>");
         });
      });

      
      </script>

      
	
   <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
   <script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>

	</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>           
   </body>
</html>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
		<
</body>
</html>

<?php
      
