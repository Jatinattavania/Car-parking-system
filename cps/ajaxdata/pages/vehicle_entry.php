<?php
	session_start();
	error_reporting(1);
	include('../includes/dbconn.php');
	if (($_SESSION['user']!="jatin")) {
	header('location:logout.php');
	} else {

	if(isset($_POST['submit-vehicle'])) {
		$parkingnumber=mt_rand(10000, 99999);
		$catename=$_POST['catename'];
		$vehcomp=$_POST['vehcomp'];
		$vehreno=$_POST['vehreno'];
		$ownername=$_POST['ownername'];
		$ownercontno=$_POST['ownercontno'];
		$enteringtime=$_POST['enteringtime'];
			
		$query=mysqli_query($con, "INSERT into vehicle_info(ParkingNumber,VehicleCategory,VehicleCompanyname,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehcomp','$vehreno','$ownername','$ownercontno')");
		if ($query) {
			echo "<script>alert('Vehicle Entry Detail has been added');</script>";
			echo "<script>window.location.href ='../index.php'</script>";
		} else {
			echo "<script>alert('Something Went Wrong');</script>";       
		}
	}
  ?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>vehicle_entry</title>
      <!--Custom Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="panel panel-default">
         <div class="panel-heading">
            <h1>Vehicle Entry</h1>
         </div>
         <div class="panel-body">
            <div class="col-md-12">
               <form method="POST" action="./pages/vehicle_entry.php" >
                  <div class="form-group">
                     <label>Registration Number</label>
                     <input type="text" class="form-control" placeholder="LOL-1869" id="vehreno" name="vehreno" required>
                  </div>
                  <div class="form-group">
                     <label>Vehicle's Company Name</label>
                     <input type="text" class="form-control" placeholder="Tesla" id="vehcomp" name="vehcomp" required>
                  </div>
                  <div class="form-group">
                     <label>Vehicle Category</label>
                     <select class="form-control" name="catename" id="catename">
                     <option value="0">Select Category</option>
                        <?php $query=mysqli_query($con,"SELECT * from vcategory");
										while($row=mysqli_fetch_array($query))
										{ 
										?>    
                              <option value="<?php echo $row['VehicleCat'];?>"><?php echo $row['VehicleCat'];?></option>
                  				<?php } ?> 
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Owner's Full Name</label>
                     <input type="text" class="form-control" placeholder="Enter Here.." id="ownername" name="ownername" required>
                  </div>
                  <div class="form-group">
                     <label>Owner's Contact</label>
                     <input type="text" class="form-control" placeholder="Enter Here.." maxlength="10" pattern="[0-9]+" id="ownercontno" name="ownercontno" required>
                  </div>
                  <button type="submit" class="btn btn-success" name="submit-vehicle">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </form>
         </div>
      </div>
      </div>
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>		
   </body>
</html>
<?php }  ?>