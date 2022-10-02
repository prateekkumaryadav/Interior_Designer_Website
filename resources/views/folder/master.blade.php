<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Interior Floor Interior and Furniture Website Template | Home : W3layouts</title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->
<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="/">Interior <span>Floor</span></a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="/about">About</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="/services">Services</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="/contact">Contact</a>
					</li>
                </ul>
                <!--/search-right-->
				<div class="search-right">
					<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">

							<form action="#" method="post" class="search-box">
								<input type="search" placeholder="Saerch your Keyword" name="search" required="required"
									autofocus="">
								<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
							</form>

						</div>
						<a class="close" href="#close">×</a>
					</div>
					<!-- /search popup -->
				</div>
				<!--//search-right-->
				<div class="box-support">
					<p>For Support Call <span class="fa fa-headphones"></span></p>
					<h5>1800-999-888</h5>
				</div>
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->

<div>
    @yield('content')
</div>

<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="footer-list-29 col-lg-4">
          <h6 class="footer-title-29">About our Company</h6>
          <p>We aim to provide high standard of Living in Affordable range since 2005. </p>
          <div class="main-social-footer-29 mt-4">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
              <p><span class="fa fa-map-marker"></span> Prateek Home decors, block 351, New Market Road
                Vadodara, Gujarat, India  PIN: 390024</p>
            </li>
            <li><a href="tel:+91 1800 999 888"><span class="fa fa-phone"></span> +(91) 1800 999 888</a></li>
            <li><a href="mailto:prateek@decors.in" class="mail"><span class="fa fa-envelope-open-o"></span>
            prateek@decors.in</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-lg-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Interiors</a></li>
            <li><a href="#blog"> Blog posts</a></li>
            <li><a href="/contact">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Latest from blog</h6>
          <div class="footer-post mb-4">
            <a href="#blog-single">Helping you and your house become better acquainted.</a>
            <p class="small"><span class="fa fa-clock-o"></span> March 9, 2022</p>
          </div>
          <div class="footer-post">
            <a href="#blog-single">Creating quality urban lifestyles..</a>
            <p class="small"><span class="fa fa-clock-o"></span> March 19, 2022</p>
          </div>

        </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
    <div class="bottom-copies">
      <p class="copy-footer-29 text-center">© 2022 Interior Floor. All rights reserved. Designed and Created by <a
          href="https://www.linkedin.com/in/prateekkumaryadav/" target="_blank">
          Prateek Kumar</a></p>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- Template JavaScript -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="assets/js/owl.carousel.js"></script>

<!-- script for carousel1 -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>