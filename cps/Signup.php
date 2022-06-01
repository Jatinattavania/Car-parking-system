<?php
$showAlert = false; 
$showerror = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include "./Database.php";
    $username =$_POST["name"];
    $Email =$_POST["email"];
    $Password =$_POST["password"];
    $cpassword =$_POST["confirmPassword"];
    $Phoneno =$_POST["phoneNo"];
    $Address =$_POST["address"];
    $date = date('Y-m-d H:i:s');
    //check whether Name already exists
    $existsql = "Select * from users Where `Name` ='$username' or `Email` ='$Email' or `Phone no` = '$Phoneno'";
    $result = $conn->query($existsql);
    $numExitsRows = $result->num_rows;
    if ($numExitsRows > 0) {
      $showerror = "username already exist ";
    }
      else{
      
        if($Password == $cpassword) {
          $hash = md5($Password);
        $sql = "INSERT INTO  `users` (`Name`, `Email`, `Password`, `Address`, `Phone no`, `Date`) 
        VALUES ('$username', '$Email', '$hash', '$Address', '$Phoneno', '$date')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $showAlert = true;
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
          else{
          $showerror = "password do not match";
        }
          
            
          
      }    
    }   
 
  
    if($showAlert){
    echo'
      <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> you have register
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
 
    if($showerror){
      echo'
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
          <strong>ERROR</strong> '.$showerror.'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    
 
//Redirect browser
header("Location: http://localhost//CPS//Login.php ");
exit;
 
?>
