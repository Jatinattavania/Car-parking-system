<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if (($_SESSION['user']!="jatin")) {
        header('location:logout.php');
        } else {
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>incoming_vehicle</title>
      <!--Custom Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h1>Incoming Vehicles</h1>
               </div>
               <div class="panel-body">
                  <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">
                     <input type="Search" placeholder="Search" id="" width="100px" aria-label="Search">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Vehicle No.</th>
                           <th>Company</th>
                           <th>Category</th>
                           <th>Parking Number</th>
                           <th>Vehicle's Owner</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
        <?php
        $ret=mysqli_query($con,"SELECT * FROM vehicle_info WHERE Status='' ORDER BY InTime DESC");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>
   
            <tr>

            <td><?php echo $cnt;?></td>
                 
            <td><?php  echo $row['RegistrationNumber'];?></td>

            <td><?php  echo $row['VehicleCompanyname'];?></td>

            <td><?php  echo $row['VehicleCategory'];?></td>

            <td><?php  echo 'CA-'.$row['ParkingNumber'];?></td>

            <td><?php  echo $row['OwnerName'];?></td>
            
            
	    <td><a href="../ajaxdata/pages/takeaction.php?updateid=<?php echo $row['ID'];?>"><button type="button class+btn btn-sm btn-danger">Take action</button></a>
            </td>
            
            </tr>

                <?php $cnt=$cnt+1;}?>
 
        
        </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>		
   </body>
</html>
<?php }  ?>
