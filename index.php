<?php
include_once "./includes/config.php";
$robots = "index, follow";
?>

<!doctype html>
<html lang="pt-br">

<head>
  <?php include_once "./includes/head.php"; ?>
</head>

<body>
  <?php  
  include_once "./includes/body.php";

  include_once "./templates-parts/header.php";
  include_once "./templates-parts/banner.php";
  include_once "./templates-parts/services.php";
  include_once "./templates-parts/about.php";
  include_once "./templates-parts/differentials.php";
  include_once "./templates-parts/cta.php";
  include_once "./templates-parts/gallery.php";
  include_once "./templates-parts/footer.php";
  
  include_once "./includes/modals.php";
  ?>

  <script src="./assets/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,700|Kalam:400,700" rel="stylesheet">
</body>

</html>