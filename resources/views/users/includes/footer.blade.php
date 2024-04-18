<section class="footer1">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="footer2">
          <img src="{{ asset('userassets') }}/images/logo.png" class="img-fluid" alt="">
          <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
        </div>
        <div>
          <form class="footer4">
            <input class="form-control me-2" type="search" placeholder="Your Email" aria-label="Search">
            <button class="btn footer3" type="submit">Submit</button>
          </form>
        </div>
        <div class="row footer7">
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="footer5">
              <h4>Product</h4>
              <ul class="footer6">
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="footer5">
              <h4>Resources</h4>
              <ul class="footer6">
                <li><a href="#">Blog</a></li>
                <li><a href="#">User Guides</a></li>
                <li><a href="#">Webinars</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="footer5">
              <h4>Company</h4>
              <ul class="footer6">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="footer5">
              <h4>Plans & Pricing</h4>
              <ul class="footer6">
                <li><a href="#">Personal</a></li>
                <li><a href="#">Startup</a></li>
                <li><a href="#">Organization</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row footer8">
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="dropdown drop">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                ENGLISH
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">ENGLISH</a></li>
                <li><a class="dropdown-item" href="#">FRENCH</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <div class="footer9">
              <p>2024 Brand, Inc, . Privacy . Terms . Sitemap</p>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <div class="footer10">
              <a href="#"><img src="{{ asset('userassets') }}/images/pic17.png" alt=""></a>
              <a href="#"><img src="{{ asset('userassets') }}/images/pic18.png" alt=""></a>
              <a href="#"><img src="{{ asset('userassets') }}/images/pic19.png" alt=""></a>
              <a href="#"><img src="{{ asset('userassets') }}/images/pic20.png" alt=""></a>
              <a href="#"><img src="{{ asset('userassets') }}/images/pic21.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('userassets') }}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('userassets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('userassets') }}/js/slick.js"></script>
<script src="{{ asset('userassets') }}/js/slick.min.js"></script>
<script src="{{ asset('userassets') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('userassets') }}/js/owl-custom.js"></script>
<script src="{{ asset('userassets') }}/js/title.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="{{ asset('userassets') }}/js/custom.js"></script>

<script>
  document.getElementsByTagName("body")[0].style.overflowX = "hidden";
</script>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
</script>

<script>
  (function($) {
    "use strict";

    jQuery(document).ready(function() {

      /**
       * ======================================
       * 02. preloader
       * ======================================
       */

      if ($("#preloader").length > 0) {
        // Set a time delay (in milliseconds) before hiding the preloader
        var delayTime = 3000; // Adjust this value as needed (3000 milliseconds = 3 seconds)

        setTimeout(function() {
          $("#preloader").fadeOut(); // Hide the preloader after the delay
        }, delayTime);
      }

    });
  })(jQuery);
</script>

<!-- scroll-top the page  -->
<script>
  // scrool top animation 

  var btn = $('#button_top');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 100) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '100');
  });
</script>

<!-- mouse animation -->
<script>
  $(window).mousemove(function(e) {
    $(".ring").css(
      "transform",
      `translateX(calc(${e.clientX}px - 1.25rem)) translateY(calc(${e.clientY}px - 1.25rem))`
    );
  });
</script>
