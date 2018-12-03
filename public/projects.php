<?php 
  $title = "Projects";
  include("includes/header.php");
?>
<div id="slate">
  <div class="container">
    <h1>Interior Projects</h1>
    <h2>We enhance both commercial and residential properties, delivering from conception through to&nbsp;execution.</h2>
  </div>
</div>
<div id="projects">
  <div class="container">
    <div class="projects">
      <div class="single-item">
        <?php 
          for ($i = 1; $i <= 10; $i++) {
            if ($i < 10) {
              echo "<img src='assets/img/Interior-00" . $i . ".JPG'>";
            } else {
              echo "<img src='assets/img/Interior-0" . $i . ".JPG'>";
            }
          }
        ?>
      </div>
    </div>
    <h2>Got a project in mind?</h2>
    <a class="button" href="mailto:miointeriors@gmail.com?subject=Consultation" target="_blank">Book a Consultation</a>
  </div>
</div>
<?php 
  include("includes/footer.php");
?>