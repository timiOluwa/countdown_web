<div class="live-help-div" title="Chat With Us Now" onclick="_open_live_chat()">
  <div class="pix-div">
    <img src="<?php echo $website_url?>/all-images/images/cutomercare.jpg" alt="Customer Care"/>
  </div>
  <i class="bi-question"></i>Live Help
</div>

<div id="back2Top" title="Back to top"  onclick="_back_to_top();"><i class="bi-box-arrow-up"></i></div>


<script src="<?php echo $website_url?>/js/aos.js"></script>

<!-- <script>
  _disabled_inspect();
</script> -->

<script>
AOS.init({
  easing: 'ease-in-out-sine'
});

$(document).ready(function() {
  setTimeout(function(){
	  $('#loader-wrapper').addClass('loaded');
  }, 3000);
  $(".loader-wrapper").delay(4000).fadeOut(800); 
});


// <?php //if ($scookies_check==''){?>
// _get_form('accept-cookies');
// <?php //}?>

</script>

<script>
  $(window).on('load', function (){
    $('#loading').hide();
  }) 
</script>

<div class="media-link-div">
    <a href="tel:+234 808 353 3750" title="Call Customer Care">
    <li style="background:#008040;"><i class="bi-telephone-outbound-fill"></i></li></a>
    <a href="https://web.facebook.com/becknyst/" target="_blank" title="Facebook">
    <li style="background:#2980b9;"><i class="bi-facebook"></i></li></a>
    <a href="https://twitter.com/becknyst" target="_blank" title="Twitter">
    <li style="background:#3498db;"><i class="bi-twitter"></i></li></a>
    <a href="https://www.instagram.com/becknyst/" target="_blank" title="Instagram">
    <li style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></li></a>
    <a href="https://api.whatsapp.com/send?text=Hello CityOne Limo&amp;phone=+234 808 353 3750" target="_blank" title="Whatsapp">
      <li style="background:#25D366;"><i class="bi-whatsapp"></i></li></a>
</div>


