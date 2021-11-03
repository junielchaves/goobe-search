<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="shortcut icon" href="./public/images/goobe_favoricon.png" type="image/png" />
  <!-- Bootstrap/CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="./public/css/reset.css" rel="stylesheet" type="text/css">
  <link href="./public/css/custom.css" rel="stylesheet" type="text/css">
  <title><?=$title ?></title>
</head>
<body>
  
  
   <!------------------------ Script PHP ----------------------------------------------->
  <?php
  require_once './vendor/autoload.php';
  use App\router;
  use App\modules\searchData;

  echo Router::getRouter($_SERVER['REQUEST_URI']);
  ?>
   <!--------------------------------------------------------------------------------->
  
  
  
  <!------------------------ Imports JavaScript------------------------------------------->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <!-- Bootstrap/JavaScript-Bundle-Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="./public/js/main.js"></script>
  <!------------------------------------------------------------------------------------------->
</body>
</html>