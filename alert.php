<!------------------------ start preloader ----------------------->
<div class="loader-wrapper" id="loader-wrapper">
    <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
</div>
<!------------------------ end preloader ----------------------->

<div class="success-div animated fadeInRight" id="success-div">
    <div><i class="bi-check-all"></i></div> 
    PASSWORD RESET SUCCESSFUL!<br /> 
    <span>Check your email to confirm.</span>
</div>


<div class="success-div animated fadeInRight" id="not-success-div">
    <div><i class="bi-x-circle"></i></div> 
    INVALID LOGIN PARAMETERS!<br /> 
    <span>Please check the login detail.</span>
</div>


<div class="success-div animated fadeInRight" id="warning-div">
    <div><i class="bi-exclamation-octagon-fill"></i></div> 
    USER ERROR!<br /> 
    <span>Fill The Fields To Continue</span>
</div>


<div id="get-more-div">
     
</div>

<div id="get-more-div-secondary"></div>












<div class="sidenavdiv">
    <div class="sidenavdiv-in" onclick="_close_side_nav()"></div>
</div>


<div class="live-chat-back-div"> 

   <a href="tel:+2348083533750" title="Call Customer Care">
        <div class="chat-div">
            <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
            <div class="text">+234 808 353 3750 </div>
          <br clear="all" />
        </div>
    </a>
    
       <a href="https://api.whatsapp.com/send?text=Hello Always Online Classes &phone=+2348083533750" title="Whatsapp" target="_blank">
        <div class="chat-div">
            <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
            <div class="text">+234 808 353 3750 </div>
          <br clear="all" />
        </div>
    </a>
    
    <a href="https://web.facebook.com/" target="_blank" title="Facebook">
        <div class="chat-div">
            <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
            <div class="text">Facebook Page </div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://twitter.com/" target="_blank" title="Twitter">
        <div class="chat-div">
            <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
            <div class="text">Twitter Page</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://www.instagram.com/" target="_blank" title="Instagram">
        <div class="chat-div">
            <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
            <div class="text">Instagram Page</div>
          <br clear="all" />
        </div>
    </a>
  
</div>


<div class="index-menu-back-div"> 

    <div class="div">
        <a href="<?php echo $website_url;?>" title="Home Page">
        <li <?php if ($page=='index.php') {?> id="active-li"<?php }?>><i class="bi-house"></i> Home page</li></a>
    </div>
        
    <div class="div">
        <a href="<?php echo $website_url ?>/about" title="About Us">
        <li <?php if ($page=='about.php') {?> id="active-li"<?php }?>><i class="bi-building-check"></i> About</li></a>
    </div>
    
    <div class="div">
        <li onclick="_open_li('exams')"><i class="bi-activity"></i> Exams Categories <i class="bi-plus" id="side-expand"></i></li>
        <div class="sub-li" id="exams-sub-li">
            <div id="fetch_index_menu_exam"></div>
            <script> _get_index_menu_exam();</script>
        </div>
    </div>

    <div class="div">
        <a href="<?php echo $website_url;?>/blog" title="Blog">
        <li <?php if ($page=='blog/index.php') {?> id="active-li"<?php }?>><i class="bi-building"></i> Blog</li></a>
    </div>

    <div class="div">
        <a href="<?php echo $website_url;?>/faq" title="FAQ">
        <li <?php if ($page=='faq.php') {?> id="active-li"<?php }?>><i class="bi-question-circle"></i> FAQ's</li></a>
    </div>

    <div class="div">
        <a href="<?php echo $website_url;?>/contact" title="Contact Us">
        <li <?php if ($page=='contact.php') {?> id="active-li"<?php }?>><i class="bi-person-lines-fill"></i> Contact Us</li></a>
    </div>

    <div class="div">
        <a href="<?php echo $website_url;?>/login" title="Sign Up/Login">
        <li <?php if ($page=='login.php') {?> id="active-li"<?php }?>><i class="bi-box-arrow-in-right"></i> Sign Up/Login</li></a>
    </div>
    
    <div class="menu-title" style="height:100px;"> &nbsp;</div>
</div>  

