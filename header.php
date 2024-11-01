<?php  include 'alert.php'?>
<div id="loading">
    <img id="loading-image" src="<?php echo $website_url?>/all-images/images/loader.gif" alt="animated zoomIn"/> 
</div>

<header class="fadeInDown animated"> 
    <div class="header-top-div">
        <div class="div-in">
            <div class="contact"><i class="bi-envelope"></i> Info@countdown@gmail.com</div>
            <div class="contact phone"><i class="bi-telephone"></i> +234 808 353 3750</div>

            

            <!-- <a href="tel:+14154944044" title="Call Customer Care">
    <li style="background:#008040;"><i class="bi-telephone-outbound-fill"></i></li></a>
    <a href="https://web.facebook.com/CityOneLimo/" target="_blank" title="Facebook">
    <li style="background:#2980b9;"><i class="bi-facebook"></i></li></a>
    <a href="https://twitter.com/Cityonelimo" target="_blank" title="Twitter">
    <li style="background:#3498db;"><i class="bi-twitter"></i></li></a>
    <a href="https://www.instagram.com/cityone_limo/" target="_blank" title="Instagram">
    <li style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></li></a>
    <a href="https://api.whatsapp.com/send?text=Hello CityOne Limo&amp;phone=+14158699686" target="_blank" title="Whatsapp">
      <li style="background:#25D366;"><i class="bi-whatsapp"></i></li></a> -->

            <ul>
                <a href="#" target="_blank" title="linkedin">
                <a href="https://instagram.com/beckynyst" target="_blank" title="instagram">
                <li class="li"><i class="bi-instagram"></i></li></a>
                <a href="https://www.instagram.com/beckynyst" target="_blank" title="Instagram">

                <li class="li"><i class="bi-facebook"></i></li></a>
                <a href="https://web.facebook.com/CityOneLimo/" target="_blank" title="Facebook">
                <a href="https://api.whatsapp.com/send?text=Hello Beckynyst Limo&amp;phone=+234 808 353 3750" target="_blank" title="Whatsapp">
                <li><i class="bi-whatsapp"></i></li></a>
                <a href="tel:+234 808 353 3750" title="Call Customer Care">
                <li><i class="bi-telephone"></i></li></a>
            </ul>
            <a href="<?php echo $website_url ?>/user/login/" title="SIGN UP / LOGIN">
            <button class="btn" title="JOIN US NOW">For more Enquiry</button></a>
            <br clear="all" />
        </div>   
    </div>  
    
    <div class="header-div-in">
        <div class="logo-div">
            <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.jpg" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
        </div>

        <ul>                          
            <a href="<?php echo $website_url ?>/" title="Home Page"><li <?php if (($website_auto_url=="$website_url/index")||($website_auto_url=="$website_url/")||($website_auto_url=="$website_url")) {?> class="active" <?php }?>> HOME</li></a>        
            <a href="<?php echo $website_url ?>/about" title="About Us"><li <?php if (($website_auto_url=="$website_url/about")) {?> class="active" <?php }?>>ABOUT US</li></a>        
            <!-- <a href="<?php echo $website_url ?>/exams/" title="Our Exams"><li id="expand"  <?php if (strstr($website_auto_url, "$website_url/exams/")) {?> class="active" <?php }?>><i class="bi-plus"></i>EXAMS          
                <div class="sub-nav-div animated fadeIn">
                    <a href="<?php echo $website_url ?>/exams/" title="Exams Categories">
                    <div class="li" id="li"><strong>Available Exams</strong></div></a>

                        <div class="fetch" id="fetch_header_exam">
                            <script> _get_fetch_header_exam();</script>
                        </div>
                </div>
            </li></a>  -->

            <a href="<?php echo $website_url ?>/blog/" title="Our Blog"><li <?php if (strstr($website_auto_url, "$website_url/blog/")) {?> class="active" <?php }?>>BLOG</li></a>
            <a href="<?php echo $website_url ?>/faq" title="Frequently Ask Question"><li <?php if (($website_auto_url=="$website_url/faq")) {?> class="active" <?php }?>>FAQ</li></a>   
            <a href="<?php echo $website_url ?>/contact" title="Contact Us"><li <?php if (($website_auto_url=="$website_url/contact")) {?> class="active" <?php }?>>CONTACT US</li></a>
            <br clear="all" />
        </ul>
        <button class="mobile-btn" onclick="_open_menu()"><i class="bi-list"></i></button>
        <a href="<?php echo $website_url ?>/user/login/" title="SIGN UP / LOGIN">
        <button class="sign-up" title="SIGN UP / LOGIN"> Get Started</button></a>
        <br clear="all" />
    </div>
</header>