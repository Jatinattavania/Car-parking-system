<?php
    session_start();
    error_reporting(1);
    include('../includes/dbconn.php');

    if (($_SESSION['user']!="jatin")) {
    	header('location:logout.php');
    } else {

    if(isset($_GET['updateid'])){
        $cid=$_GET['updateid'];
        $remark=$_POST['remark'];
	$query=mysqli_query($con, "SELECT status from vehicle_info where ID='$cid'");
        if (mysqli_num_rows($query)> 0){
            $row= mysqli_fetch_assoc($query);
            if ($row["status"]=="")
            {
                $status="Out";
            }
            // echo $row["status"];
        }
       $query=mysqli_query($con, "UPDATE vehicle_info set Remark='NA',Status='$status',ParkingCharge='50' where ID='$cid'");
        if ($query) {
            $msg="All remarks has been updated.";
	    header('location:/Car-parking-system/cps/ajaxdata/index.php');
            exit;
        } else {
            $msg="Something Went Wrong";
        }

    }
   }  
?>
