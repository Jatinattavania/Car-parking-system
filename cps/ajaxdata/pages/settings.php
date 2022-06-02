<?php
    session_start();
    error_reporting(1);
    include('../includes/dbconn.php');

        if (($_SESSION['user']!="jatin")) {
            header('location:logout.php');
        } else {
            if(isset($_POST['set-settings'])){

                $name=$_POST['Name'];
                $email=$_POST['Email'];
                $Phoneno=$_POST['Phoneno'];
                $Address=$_POST['Address'];
                echo $name;
                echo $email;
                echo $Phoneno;
                echo $Address;
        
            $query=mysqli_query($con,"UPDATE users set `Name`='$name', `Email`='$email', `Phone no`='$Phoneno',`Address`='$Address' where `Name`='$name'");
            if ($query) {
                $msg="Settings has been updated";
                echo "hello";
        } else {
            $msg="Something Went Wrong";
            echo "jatin";
            }
        }
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>settings</title>
      <!--Custom Font-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="panel panel-default">
         <div class="panel-heading">
            <h1>Settings</h1>
         </div>
         <div class="panel-body">
            <div class="col-md-12">

               <form method="post" action="./pages/settings.php">
                  <div class="form-group">

                  <?php
                        $name=$_SESSION['user'];
                        $ret=mysqli_query($con,"SELECT * from users where `Name`='$name'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        
                     ?>

                     <p style="color:red;"></p>
                     <div class="col-lg-11">
                        <label>Name</label>
                        <input type="text" class="form-control" value="" name="Name" required>
                     </div>
                  </div>
                  <div class="col-lg-11">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="" name="Email" required>
                     </div>
                  </div>
                  <div class="col-lg-11">
                     <div class="form-group">
                        <label>Phoneno</label>
                        <input type="text" class="form-control" name="Phoneno" value="" required>
                     </div>
                  </div>
                  <div class="col-lg-11">
                     <div class="form-group">
                        <label>Address</label>
                        <input type="address" class="form-control" name="Address" value="" required="true">
                     </div>
                  </div>
                  <br><br>
                  <center>
                     <button type="submit" class="btn btn-info" name="set-settings">Make Changes</button>
                  </center>
            </div>
            <?php } ?>
            </form>
         </div>
      </div>
      </div>
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>		
   </body>
</html>
<?php }  ?>
