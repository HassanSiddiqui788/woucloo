
AOS.init();

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 300) {
        $("header").addClass("darkHeader");
    }
    else{
        $("header").removeClass("darkHeader");
        // $(".btns_wrap").removeClass("btns_wrap_hover");
    }
});






let num = document.querySelectorAll(".counterup");
let numArray = Array.from(num)

numArray.map((item)=>{
    let count = 0
    function counterup(){
        count++
        item.innerHTML = count

        if(count == item.dataset.number){
            clearInterval(stop)
        }
    }

    let stop = setInterval(function(){
        counterup()
    },100)
})




$('.testimonial-slide').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// active page

$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.php"
  }
  $(`.nav-item .nav-link[href="${filename}"]`).addClass("active")
})

// tabs 

$('.tab-menu li a').on('click', function(){
  var target = $(this).attr('data-rel');
$('.tab-menu li a').removeClass('active');
  $(this).addClass('active');
  $("#"+target).fadeIn('slow').siblings(".tab-box").hide();
  return false;
});

// range 
$(function() {
	$( "#slider-range" ).slider({
	  range: true,
	  min: 130,
	  max: 500,
	  values: [ 130, 250 ],
	  slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
function toggleDropdown() {
  var dropdownMenu = document.getElementById("dropdownMenu");
  dropdownMenu.style.display === "none" ? dropdownMenu.style.display = "block" : dropdownMenu.style.display = "none";
}

function moveDots() {
  var rangeInput = document.getElementById("vol");
  var decreaseDot = rangeInput.previousElementSibling;
  var increaseDot = rangeInput.nextElementSibling;

  // Calculate the position of dots based on the value of the range input
  var rangeWidth = rangeInput.clientWidth;
  var rangeValue = rangeInput.value;
  var dotPosition = (rangeValue / rangeInput.max) * rangeWidth;

  // Update the position of dots
  decreaseDot.style.left = dotPosition - 5 + "px";
  increaseDot.style.right = rangeWidth - dotPosition - 5 + "px";
}