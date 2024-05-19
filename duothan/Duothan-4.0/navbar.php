

<?php

session_start();


$_SESSION["username"] = "Dushan";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="resources/logo.png" width="110" height="80">
          </a
        
          <?php
          if (!isset($_SESSION["username"])) {
            echo("
            <div class='nav-item' >
            <p>".$_SESSION["username"]."</p>
            <a  class='mx-1' href='url'>
                <button type='submit' class='btn btn-primary'>Sign Out</button>
            </a>
        </div>
            ");
          
        }else{
          echo("
          <div class='nav-item' >
            
          <a href='url'>
              <button type='submit' class='btn btn-secondary mr-3'>Sign in</button>
          </a>
          <a  class='mx-1' href='url'>
              <button type='submit' class='btn btn-primary'>Sign up</button>
          </a>
      </div>
          ");
        }
          ?>
        </div>
        
      </nav>
</body>
</html>