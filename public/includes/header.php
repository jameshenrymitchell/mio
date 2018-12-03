<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <title><?=$title?> | Mio Interiors</title>
    <meta name="description" content="">
    <meta name="author" content="James Mitchell">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://miointeriors.com">
    <meta property="og:site_name" content="Mio Interiors">
    <meta property="og:title" content="<?=$title?> | Mio Interiors">
    <meta property="og:description" content="">
    <meta property="og:locale" content="en_GB">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/main.min.js" async></script>
  </head>
  <body>
    <div id="wrapper">
      <nav>
        <ul>
          <li <?php if ($title === "Studio" ) { echo "class='active'"; } ?>><a href="studio.php">Studio</a></li>
          <li <?php if ($title === "Projects" ) { echo "class='active'"; } ?>><a href="projects.php">Projects</a></li>
          <li <?php if ($title === "Products" ) { echo "class='active'"; } ?>><a href="products.php">Products</a></li>
          <li <?php if ($title === "Fabrics" ) { echo "class='active'"; } ?>><a href="fabrics.php">Fabrics</a></li>
          <li <?php if ($title === "Contact" ) { echo "class='active'"; } ?>><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <div class="openNav">
        <div class="icon"></div>
      </div>
      <div id="header">
        <div class="container">
          <a href="/studio.php"><img class="logo" src="assets/img/Logo.png" alt="Mio Interiors"></a>
          <ul>
            <li <?php if ($title === "Studio" ) { echo "class='active'"; } ?>><a href="studio.php">Studio</a></li>
            <li <?php if ($title === "Projects" ) { echo "class='active'"; } ?>><a href="projects.php">Projects</a></li>
            <li <?php if ($title === "Products" ) { echo "class='active'"; } ?>><a href="products.php">Products</a></li>
            <li <?php if ($title === "Fabrics" ) { echo "class='active'"; } ?>><a href="fabrics.php">Fabrics</a></li>
            <li <?php if ($title === "Contact" ) { echo "class='active'"; } ?>><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
