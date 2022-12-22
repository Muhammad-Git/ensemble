<?php
   global $options;
   global $logo;
   global $copyrite;
   $options = get_option('cOptn');
   $logo = $options['logo'];
   $copyrite = $options['copyright'];
   $logoSrc = wp_get_attachment_url($logo);
   ?>
<section class="footer-sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-6">
            <div class="footer-text">
               <a href="<?php echo site_url();?>"> <img src="<?php echo $logoSrc;?>" class="img-fluid"></a>
               <p><?php echo $options['Address'];?></p>
               <ul>
                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                     <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                  </li>
                  <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                     <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                  </li>
               </ul>
               <a class="them-btn" href="javaScript:;">Schedule a Demo </a>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="footer-icons">
               <h3>Social</h3>
               <ul>
                  <li><a href="<?php echo $options['linkedin'];?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo $options['twitter'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <hr />
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="copy-text">
               <p><?php echo $options['copyright'];?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="scrool-num">
    <?php wp_nav_menu( array('menu'=> 'Side Menu','theme_location' => '','fallback_cb'=> false, 'menu_class' => 'scrool-num', 'container' => false ) ); ?>
                        
    <!--<ul>-->
    <!--  <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/btn-1.png');"><a href="#sec_1">01</a></li>-->
    <!--  <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/btn-2.png');"><a href="#sec_2">02</a></li>-->
    <!--  <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/btn-3.png');"><a href="#sec_3">03</a></li>-->
    <!--  <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/btn-4.png');"><a href="#sec_4">04</a></li>-->
    <!--</ul>-->
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js" type="text/javascript"></script>
<script src="https://www.invictaconsulting.us/wp-content/themes/custom-theme/inview.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script>
//     $(document).on("ready", function () {
//     $('.home-sec-1').on('inview', function (event, visible) {
//   if (visible == true) {
  
//      alert("Hello! I am an alert box!!");
              
              
//   } 
// });

// });

$(document).ready(function () {
    $('.scrool-num ul li').click(function(e) {
      

        $('.scrool-num ul li').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});
</script>
<script>
    const li= document.querySelectorAll(".scrool-num li");
const sec= document.querySelectorAll("section");
function activeMenu() {
let len = sec.length;
while(--len && window.scrollY + 97 < sec[len].offsetTop){}
li.forEach(ltx => ltx.classList.remove("active"));
li[len].classList.add("active");
}
activeMenu();
window.addEventListener("scroll", activeMenu);
</script>


<script type="text/javascript">
$(document).on("ready", function () {
  $(".work-slider").slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
        },
      },
    ],
  });
});
</script>
<script type="text/javascript">
   $(window).scroll(function () {
     var sticky = $('.sticky'),
       scroll = $(window).scrollTop();
   
     if (scroll >= 100) sticky.addClass('fixed');
     else sticky.removeClass('fixed');
   });
   $(document).on("ready", function () {
   
     wow = new WOW({
       animateClass: "animated",
       offset: 100,
       callback: function (box) {
         console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
       },
     });
   
   
   });
</script>
<script>
   $("#banner-effect").mousemove(function (e) {
     parallaxIt(e, ".ele-1", -50);
     parallaxIt(e, ".ele-2", -50);
     parallaxIt(e, ".ele-3", -50);
     parallaxIt(e, ".ele-4", -50);
     parallaxIt(e, ".ele-5", -50);
     parallaxIt(e, ".ele-6", -50);
     //   parallaxIt(e, ".ele-4", -50);
   });
   
   function parallaxIt(e, target, movement) {
     var $this = $("#banner-effect");
     var relX = e.pageX - $this.offset().left;
     var relY = e.pageY - $this.offset().top;
   
     TweenMax.to(target, 1, {
       x: (relX - $this.width() / 2) / $this.width() * movement,
       y: (relY - $this.height() / 2) / $this.height() * movement
     });
   }
   
</script>
<script>
   var btn = $('#scroll-top'); $(window).scroll(function () { if ($(window).scrollTop() > 300) { btn.addClass('show'); } else { btn.removeClass('show'); } }); btn.on('click', function (e) { e.preventDefault(); $('html, body').animate({ scrollTop: 0 }, '300'); });
</script>
<script>
   var btn = $('.scrool-num'); $(window).scroll(function () { if ($(window).scrollTop() > 500) { btn.addClass('show'); } else { btn.removeClass('show'); } });
</script>

<script>

const li= document.querySelectorAll(".scrool-num li");
const sec= document.querySelectorAll("section");

function activeMenu() {
    let len = sec.length;
    while(--len && window.scrollY + 97 < sec[len].offsetTop){}
    li.forEach(ltx => ltx.classList.remove("active"));
    li[len].classList.add("active");
}

activeMenu();
window.addEventListener("scroll", activeMenu);

</script>


</body>
</html>