      <footer>
        <div class="container">
					<div class="copyright">
						<p>&copy; <?=date('Y')?> Mio Interiors Ltd</p>
					</div>
					<div class="social">
						<a href="https://facebook.com/pg/Mio-Interiors-175500355921967" target="_blank">
							<img src="assets/img/Icon-Facebook.svg" alt="Facebook">
            </a
            ><a href="https://twitter.com/miointeriors" target="_blank">
							<img src="assets/img/Icon-Twitter.svg" alt="Twitter">
						</a>
						<!--a href="" target="_blank">
							<img src="../assets/img/Icon-Instagram.svg" alt="Instagram">
						</a>
						<a href="" target="_blank">
							<img src="../assets/img/Icon-Pinterest.svg" alt="Pinterest">
						</a-->
					</div>
        </div>
      </footer>
    </div>
    <?php if ($title === "Contact") { ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0rzkmSa5ETq-47tmKNGi8kDtS2736tKY&callback=initMap" async defer></script>
    <script>
      function initMap() {
        var uluru = {
          lat: 51.0811362,
          lng: -1.8655195
        };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <?php } elseif ($title === "Projects") { ?>
    <script src="assets/js/slick.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.single-item').slick({
          arrows: true,
          dots: true,
          infinite: true,
          speed: 400,
          slidesToShow: 1,
          slidesToScroll: 1,
          slickGoTo: 3,
          fade: true,
        });
      });
    </script>
    <?php } ?>
  </body>
</html>
