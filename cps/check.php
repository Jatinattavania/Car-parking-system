<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Login</title>
  </head>
  <body>
    <?php
      require'partials/_nav.php';
    ?>
    <div class="container">
      <h1 class="text-center">LOG IN </h1>
      <form action="loginVerify.php" method="post">
        <div class="mb-3 row" style="margin-top:10%">
          <div class="col-md-4"></div>
          <!--<label for="username" class="col-sm-2 col-form-label">Username</label>-->
          <div class="col-md-4">
            <input type="text" class="form-control bg-dark text-light" placeholder="@username" id="username" name="username">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-4"></div>
          <!--<label for="email" class="col-sm-2 col-form-label">Email</label>-->
          <div class="col-md-4">
            <input type="password" class="form-control bg-dark text-light" placeholder="Password" id="password" name="password">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-5"></div>
          <div class="col-md-2">
            <input type="submit" class="form-control bg-dark text-light" value="Log in">
          </div>
        </div>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
