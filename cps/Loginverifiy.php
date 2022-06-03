<?php 
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include "./Database.php";
    $username =$_POST["name"];
    $password =$_POST["password"];
    $sql = "SELECT * FROM users WHERE `Name`='$username'"; 
    $result = $conn->query($sql);
    $num = $result->num_rows;
      if($num > 0 ){
        while($row=mysqli_fetch_assoc($result)){
          if(md5($password)== $row['Password']){
          echo'Logging In';
          session_start();
          $_SESSION["user"]= $username;
          $_SESSION["start"]= time();
          $_SESSION["expire"]= time()+(12*60*60);
         header("Location: /Car-parking-system/cps/ajaxdata/index.php");
         exit;
          }
          else{
            echo 'Invaild Credentials';
          }
        }
        
        
      }
      else {
        echo 'User not found';
     }
  }  
?>

