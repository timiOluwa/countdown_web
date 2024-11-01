<?php include 'config/connection.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title> Frequently Asked Questions | Offline Support | <?php echo $thename?></title>
<meta name="keywords" content="<?php echo $thename?>, SSCE Online Classes, WAEC Online Classes, NECO Online Classes, NABTEB Online Classes, GCE Online Classes, Online education, Virtual learning, Remote learning, Digital classrooms, Online courses, E-learning, Distance education, Web-based classes, Internet-based learning, Continuous online education, LMS, Learning Management System" />
<meta name="description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta property="og:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/>
<meta property="og:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>

<meta name="twitter:title" content="Embrace Learning Anytime with <?php echo $thename?> | SSCE, UTME"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/alwaysonlineclasses.jpg"/> 
<meta name="twitter:description" content="Access high-quality education from anywhere, at any time. Explore a wide range of subjects and courses delivered through virtual platforms on SSCE, GCE, NABTEB Exams and more."/>
</head>
<body>
<?php include 'header.php'?>

<div class="other-pages-title faq-other-pages-title" data-aos="fade-down" data-aos-duration="1200">
	<div class="inner-div">
		<div class="top-title-div">
			<div class="div-in">
				<ul>
					<a href="<?php echo $website_url?>"><li>Home <i class="bi-caret-right-fill"></i></li></a>
					<a href="<?php echo $website_url?>/faq"><li>Frequently asked questions </li></a>
				</ul>
			</div>			
		</div>
		
		<div class="content-div" data-aos="zoom-in" data-aos-duration="1200">
    		<h1 class="border" data-aos="fade-up" data-aos-duration="900"><span>Frequently Asked Questions</span></h1>
			<p>Edunyst provides frequently asked questions and offline support to guide you in your learning, How to subscribe for a video and many more.</p>
		</div>		
    </div>
	
</div> 


<div class="faq-content-div">

    <section class="body-div">
		<div class="body-div-in"> 
			<div class="search-text-div" data-aos="zoom-in" data-aos-duration="800">
                <div class="search-segment-div">
                    <select id="cat_id" onchange=" _get_fetch_faq('');" class="text_field">
                        <option value="" selected="selected">All FAQ Categories</option>
							<script> _get_cat('cat_id');</script>
                    </select>     
                </div>
            
                <div class="search-segment-div">
                    <input id="search_txt" onkeyup="_get_fetch_faq('');" class="text_field" placeholder="Type Here To Search..." title="Type to Search Here">
                </div>
				
            </div>
			<br clear="all"/>
			<br clear="all"/> 

            <div class="faq-back-div">
				<div class="faq-text-div main-faq-text-div">
					<div class="faq-inner-div" id="fetch_faq">
                            <script> _get_fetch_faq();</script>
						
						<div class="quest-faq-div active-faq" id="faq10">
							<div class="faq-title-text" onclick="_collapse('faq243')">
							 	<h2>Who We Are</h2>
								<div class="expand-div" id="faq243num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>					

								<div class="faq-answer-div faq-answer-display" id="faq243answer" style="display: none;">
									<p>We are a dedicated online service provider with a reliable outstanding online class service.</p>                           
								</div>
							</div>
						</div>	
					</div>
				</div>	
			</div>

		</div>
	</section>
		<br clear="all"/>
		<br clear="all"/>
		<br clear="all"/>
		<br clear="all"/>
	<?php include 'footer.php'?>
</div>
<?php include 'bottom-scripts.php'?>
</body>
</html>


