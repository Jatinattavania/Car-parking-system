<?php
    session_start();
    error_reporting(0);

    include('../includes/dbconn.php');
    if (($_SESSION['user']!="jatin")) {
    header('location:logout.php');
    } else{

    if(isset($_POST['update-category']))
    {
        $name=$_SESSION['user'];
        $catname=$_POST['catename'];
        $eid=$_POST['editid'];
        $query=mysqli_query($con, "UPDATE vcategory set VehicleCat='$catname' where ID='$eid'");
        if ($query) {
        $msg="Category has been updated.";
        header('location:/cps/ajaxdata/index.html');
    }
    else
        {
        $msg="Something Went Wrong. Please try again";
        }

    }
  ?>



<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>update_category</title>
      <!--Custom Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="panel panel-default">
         <div class="panel-heading">
         <h1>Update Vehicle Category</h1>
         </div>
         <div class="panel-body">
            <form method="POST" action="./pages/update_category.php">
            
            <?php
               $cid=$_GET['editid'];
               $ret=mysqli_query($con,"SELECT * from  vcategory where ID='$cid'");
               $cnt=1;
               while ($row=mysqli_fetch_array($ret)) {
            ?>  
            <div class="col-md-12">
               <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" class="form-control" placeholder="GA8KH-8690" value="<?php  echo $row['VehicleCat'];?>" id="catename" name="catename" required>
                  <input type="hidden" value="<?php echo $cid ?>" name="editid">
               </div>
               <?php }?>
               <button type="submit" class="btn btn-success" name="update-category">Make Changes</button>
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