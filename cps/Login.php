<?php
  session_start();
  if(isset($_SESSION["user"])){
    header("Location: ./ajaxdata/index.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="./Loginverifiy.php " method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type= "text" placeholder="name" id ="name" name ="name">
      </div>
      <div class="input-field">
        <input type="password" placeholder="password" id ="password" name ="password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button ><a href="./register.html" style=" text-decoration: none; color: #777;" >Register</a></button>
     <a href="./index.php"><button>Login</button></a>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
