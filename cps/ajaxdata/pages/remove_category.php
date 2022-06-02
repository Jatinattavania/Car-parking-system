<?php


session_start();
error_reporting(0);


if(isset($_GET['editid'])){
    echo"hello";
$id=$_GET['editid'];
echo $id;
include('../includes/dbconn.php');


$qry="DELETE from vcategory where id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:vehicle_category.php');
}else{
    echo"ERROR!!";
}
}
?>