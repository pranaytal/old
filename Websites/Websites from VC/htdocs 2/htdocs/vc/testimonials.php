<?php  
$ok=$_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js js" lang="en-gb"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Virtual Concept ! FeedBack</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
   
    <!-- Favicon --> 
	<link rel="shortcut icon" href="http://www.virtualconcept.in/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href="css/css.css" rel="stylesheet" type="text/css">
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css">
    

<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="styles/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/green.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/red.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/brown.css" />-->
    


<!-- just remove the below comments witch bg patterns you want to use -->
    
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="styles/bg-patterns/pattern-nine.css" />-->
    
    <!-- style switcher -->
    <link rel="stylesheet" media="screen" href="css/color-switcher.css">
    
    <!-- iosslider -->
	<link rel="stylesheet" media="screen" href="css/common.css">
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="css/skin.css">
    
    <!-- faqs -->
    <link rel="stylesheet" href="css/accordion.css" type="text/css" media="all">
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="css/ui.css">
   

    
<link type="text/css" rel="stylesheet" href="css/widget.css"><style type="text/css">#twtr-widget-1 .twtr-avatar { display: none; } #twtr-widget-1 .twtr-tweet-text { margin-left: 0; }</style> 
 <script>
	function fun(okk)
	{
		if(okk==1)
		{
			alert("Thanks for your feedback");


		}
		
	}
	
	function validateForm()
	{
		var x=document.forms["feedback"]["email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Not a valid e-mail address");
			return false;
		}
		if (document.forms["feedback"]["message"].value.length < 60) 
		{
			alert("Message must not be less than \n6o characters");
			return false; 
		}
	}
    </script>
</head>

<body class="bg-cover">

<div class="site_wrapper">
	
    <div class="container_full">
    	
        <div class="top_section">
    
    	<div class="container">

    		<div id="logo"><a href="index.html" class="site_logo"> <span class="logo_caption"></a></div><!-- end logo -->
            	
               <nav id="access" class="access" role="navigation">
                <div id="menu" class="menu">
                  <ul id="tiny">
                    <li><a href="index.php">Home</a>
                        <!--<ul style="display: none; top: 68px; visibility: visible;">
                            	<li><a href="index-variation1.html">Home Variation 1</a></li>
                                <li><a href="index-variation2.html">Home Variation 2</a></li>
                                <li><a href="index-variation3.html">Home Variation 3</a></li>
                                <li><a href="index-variation4.html">Home Variation 4</a></li>
                                <li><a href="index-variation5.html">Home Variation 5</a></li>
							</ul>-->
                    </li>
                    <li><a href="about.php">Who We Are </a>
                        <!--<ul style="display: none; top: 68px; visibility: visible;">
                            	<li><a href="index.html">Header Style 1</a></li>
                                <li><a href="index.html">Header Style 2</a></li>
                                <li><a href="index.html">Header Style 3</a></li>
                                <li><a href="index.html">Header Style 4</a></li>
							</ul>-->
                    </li>
                    <li><a href="services.php">Our Services</a>
                        <!--<ul style="display: none; top: 68px; visibility: visible;">
                            	<li><a href="index.html">Footer Style 1</a></li>
                                <li><a href="index.html">Footer Style 2</a></li>
                                <li><a href="index.html">Footer Style 3</a></li>
                                <li><a href="index.html">Footer Style 4</a></li>
							</ul>-->
                    </li>
                    <li><a href="testimonials.php" class="active">Testimonials</a> </li>
                    <li><a href="current_opening.html">Openings</a>
                        <!--
                        	<ul style="display: none; top: 68px; visibility: visible;">
                            	<li><a href="index-slider-1.html">Revolution Slider</a></li>
                                <li><a href="index-slider-2.html">Nivo Slider</a></li>
                                <li><a href="index.html">Thumbs Slider</a></li>
                                <li><a href="index-slider-3.html">Static Image</a></li>
                                <li><a href="index-slider-4.html">Video Slider</a></li>
							</ul>-->
                    </li>
                    <li><a href="portfolio.html">Portfolio</a>
                        <!--<ul style="display: none; top: 68px; visibility: visible;">
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="columns.html">Page Columns</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="#">Sample Third Leavel &nbsp;&gt;</a>
                                    <ul style="display: none; top: 0px; visibility: visible;">
                                        <li><a href="#">Third Leavel One</a></li>
                                        <li><a href="#">Third Leavel Two</a></li>
                                        <li><a href="#">Third Leavel Three</a></li>
                                    </ul>
                                </li>                             
                                <li><a href="#">Custom BG &amp; Colors</a></li>
                                <li><a href="#">PSD Files Included</a></li>                             
                                <li><a href="#">Clean &amp; Valid Code</a></li>
                            </ul>-->
                    </li>
                    <!--<li><a href="#">Pages</a>
                        
                        	<ul style="display: none; top: 68px; visibility: visible;">
                                <li><a href="about.html">About Page Style 1</a></li>
                                <li><a href="about-2.html">About Page Style 2</a></li>
                                <li><a href="services.html">Services Style 1</a></li>
                                <li><a href="services-2.html">Services Style 2</a></li>
                                <li><a href="full-width.html">Full Width Page</a></li>
                                <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                <li><a href="left-nav.html">Left Navigation</a></li>
                                <li><a href="right-nav.html">Right Navigation</a></li>
                                <li><a href="404.html">404 Error Page</a></li>
                            </ul>
                        </li>-->
                    <!-- <li><a href="#">Portfolio</a>
                        
                        	<ul style="display: none; top: 68px; visibility: visible;">
                                <li><a href="portfolio-one.html">Single Image</a></li>
                                <li><a href="portfolio-two.html">2 Columns</a></li>
                                <li><a href="portfolio-three.html">3 Columns</a></li>
                                <li><a href="portfolio-four.html">4 Columns</a></li>
                            </ul>
                        </li>-->
                    <!--  
                        <li><a href="#">Blog</a>
                        
                            <ul style="display: none; top: 68px; visibility: visible;">

                            <li><a href="blog.html">with Large Image</a></li>
                            <li><a href="blog-2.html">with Small Image</a></li>
                            <li><a href="blog-post.html">Single Post</a></li>
                            </ul>
                        </li>-->
                    <li><a href="contact.php">Contact Us</a>
                        <!--<ul style="display: none; top: 68px; visibility: visible;">
                            <li><a href="contact-2.php">Contact Style 1</a></li>
                            <li><a href="contact.php">Contact Style 2</a></li>
                            </ul>-->
                    </li>
                  </ul>
                   
                </div>
                
          </nav>
                

		</div> 

	</div>
    
   <div class="top_shadow"></div><!-- end shadow -->

   </div><!-- end top -->



<!-- Content
======================================= --> 

<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Testimonials</h1></div>
        <div class="reght_pagenation"><a href="index.html">Home</a> <i>/</i> <a href="#">Features</a> <i>/</i> Testimonials</div>
	</div>
</div><!-- end page title -->   


<div class="container">

<div class="content_fullwidth">

        
    <!--<div class="what_people_says2">
            <h2>What Peopel Says</h2>
            
            <ul>
                <li class="left"><img src="images/site-img10.jpg" alt=""></li>
                <li class="right">H. Rackham <i>- customer</i>
                <p>Internet tend to repeat predefined chunks as 
necessary, making this the first true generator on the Internet. It uses
 a dictionary of over 200 Latin words, combined with a handful of model 
sentence structures, to generate Lorem Ipsum which looks reasonable. The
 generated Lorem Ipsum is therefore always<br></p></li>
            </ul>
            
        </div>--><!-- end what people says -->
        
        <div class="clearfix mar_top4"></div>
        
		
        <div class="one_half">
       <div class="what_people_says"> 
      
                
                	<?php
					require "testimonials_files/db.php";
					$qry="SELECT * FROM posts WHERE approved=1 ORDER BY id DESC LIMIT 4" ;
					$result2=mysql_query($qry,$res);
        			while ($row=mysql_fetch_row($result2))
					{
						?>
                <ul>
                	<li class="left"><img src="testimonials_files/upload/<?php echo $row['5'] ?>" alt="site-img11" height="94" width="94"></li>
					<li class="right"><?php echo $row['1'] ?><i>- <?php echo $row['3'] ?></i>
                    </li><li class="right"><p><?php echo $row['4'] ?></p></li>
                </ul>
                 <?php  }?> 
                <!--<ul>
                	<li class="left"><img src="services_files/site-img13.jpg" alt="site-img13"></li>
                    <li class="right">A. Jacob Roys <i>- customer</i>
                    </li><li class="right"><p>We use tend repeat prede 
chunks as necessary making this on first true generator on the internet 
has uses a dictionary latin words  have evolved over the years.</p></li>
                </ul>
                <div class="clearfix mar_top2"></div>
                
                <ul>
                	<li class="left"><img src="services_files/site-img13.jpg" alt="site-img13"></li>
                    <li class="right">A. Jacob Roys <i>- customer</i>
                    </li><li class="right"><p>We use tend repeat prede 
chunks as necessary making this on first true generator on the internet 
has uses a dictionary latin words  have evolved over the years.</p></li>
                </ul>-->
                
            </div><!-- end what people says -->
        </div>
        <div class="one_half last">	            
            
            <h2>Your Feedback Please</h2>
		
					<form name="feedback"action="testimonials_files/save.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()";>
					
						<fieldset>
						
												
						<label for="name" class="blocklabel">Your Name*</label>
						<p class=""><input name="yourname" class="input_bg" id="name" type="text" maxlength="50" required></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class=""><input name="email" class="input_bg" id="email" type="text" maxlength="127" required></p>
						
						
						<label for="company" class="blocklabel">Company Name*</label>
						<p><input name="company" class="input_bg" id="website" type="text" maxlength="25" required></p>
						
						<label for="image" class="blocklabel">Your Image</label>
						<p><input name="file" class="input_bg" id="image" type="file" accept="image/jpeg"></p>
                        
						<label for="message" class="blocklabel">Your Message*</label>
						<p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" maxlength="250" required></textarea></p><p id="demo" style=" text-align:end"></p>
						
						
						<p >
						<input id="myemail" name="myemail" value="gsrthemes9@gmail.com" type="hidden">
						<input id="myblogname" name="myblogname" value="yourcompanyname.com" type="hidden">
						</p><div class="clearfix"></div>
						<input name="Send" value="SUBMIT" class="button medium align" id="send" type="submit" ><p></p>
												
						</fieldset>
						
						</form> 
			</div>
        <!-- end what people says -->

</div>
<!-- end content full width area -->
<?php
        $last_four="SELECT id FROM posts WHERE approved=1 ORDER BY  id DESC LIMIT 4";
		
		$last_4=mysql_query($last_four, $res);
		$odd_Id = $even_Id = 0;

		while($row=mysql_fetch_row($last_4))
		{
			
			if(($row[0]%2)==0)
			{
				$even_Id++;
			}
			else
			{
				$odd_Id++;
			}
			
		}
		/*echo "odd = ".$odd_Id;
		echo "<br>";
		echo "even = ".$even_Id;*/
		
		/*if($odd_Rows == $even_Rows)
		{
			$L1=$L2=$odd_Rows-2;
			//echo $L1."  ".$L2;
		}
		else
		{
			if($odd_Rows > $even_Rows)
			{
				$diff=abs($odd_Rows - $even_Rows);
				switch($diff)
				{
					case 1:
					$L1=$odd_Rows-3;
					$L2=$even_Rows-1;
					break;
					
					case 2:
					}
			else
			{
				$L1=$odd_Rows-1;
				$L2=$even_Rows-3;
			}
		}*/
		;
		$qry_odd= "SELECT * FROM posts WHERE (ID %2) <> 0 AND approved=1";
		$qry_even= "SELECT * FROM posts WHERE (ID %2) = 0 AND approved=1";
		$odd_res=mysql_query($qry_odd,$res);
		$even_res=mysql_query($qry_even,$res);
		$odd_Rows=mysql_num_rows($odd_res);
		$even_Rows=mysql_num_rows($even_res);
		
		$L1=$odd_Rows-$odd_Id;
		$L2=$even_Rows-$even_Id;
		//echo "<BR>".$L1."  ".$L2;
		$odd_Sel="SELECT * FROM posts WHERE (ID %2) <> 0 AND approved=1 LIMIT $L1 ";
		$even_Sel="SELECT * FROM posts WHERE (ID %2) = 0 AND approved=1 LIMIT $L2 ";
		
		$odd=mysql_query($odd_Sel, $res);
		$even=mysql_query($even_Sel, $res);
        				
		?>

 <div class="one_half">
        
        	<div class="what_people_says"> 
                <?php
                while ($row_Odd=mysql_fetch_row($odd))
				{
					?>
                <ul>
                	<li class="left"><img src="testimonials_files/upload/<?php echo $row_Odd['5'] ?>" alt="site-img11" height="94" width="94"></li>
                    <li class="right"><?php echo $row_Odd['1'] ?><i>- <?php echo $row_Odd['3'] ?></i>
                    </li><li class="right"><p><?php echo $row_Odd['4'] ?></p></li>
                </ul>
                
                <div class="clearfix mar_top2"></div>
           <?php  }?>      
                <!--<ul>
                	<li class="left"><img src="services_files/site-img13.jpg" alt="site-img13"></li>
                    <li class="right"><?php echo $row['1'] ?><i>- <?php echo $row['3'] ?></i>
                    </li><li class="right"><p>We use tend repeat prede 
chunks as necessary making this on first true generator on the internet 
has uses a dictionary latin words  have evolved over the years.</p></li>
                </ul>-->
                
            </div>
        
        </div><!-- end what people says -->
        
        <div class="one_half last">
          <div class="what_people_says"> 
                
                <?php
                while ($row_Even=mysql_fetch_row($even))
				{
					?>
                <ul>
                	<li class="left"><img src="testimonials_files/upload/<?php echo $row_Even['5'] ?>" alt="site-img11" height="94" width="94"></li>
                    <li class="right"><?php echo $row_Even['1'] ?><i>- <?php echo $row_Even['3'] ?></i>
                    </li><li class="right"><p><?php echo $row_Even['4'] ?></p></li>
                </ul>
                
                <div class="clearfix mar_top2"></div>
           <?php  }?>      
                <!--<ul>
                	<li class="left"><img src="services_files/site-img13.jpg" alt="site-img13"></li>
                    <li class="right">A. Jacob Roys <i>- customer</i>
                    </li><li class="right"><p>We use tend repeat prede 
chunks as necessary making this on first true generator on the internet 
has uses a dictionary latin words  have evolved over the years.</p></li>
                </ul>-->
                
            </div>
          
        </div>
        <!-- end what people says -->

</div>
<!-- end content full width area -->
<div class="mar_top2"></div>

</div>


<!-- Footer
======================================= -->

<div class="container">

	<div class="twitter_feed">
    
             <p><script src="testimonials_files/ga.js" async type="text/javascript"></script><script src="testimonials_files/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 1,
                  interval: 5000,
                  width: 900,
                  height: 70,
                  theme: {
                    shell: {
                      background: 'transparent',
                      color: '#000'
                    },
                    tweets: {
                      background: 'transparent',
                      color: '#999',
                      links: '#ff9900'
                    }
                  },
                  features: {
                    scrollbar: false,
                    loop: false,
                    live: false,
                    hashtags: true,
                    timestamp: true,
                    avatars: false,
                    behavior: 'all'
                  }
                }).render().setUser('gsrthemes9').start();
                </script></p><div class="twtr-widget twtr-widget-profile" id="twtr-widget-1"><div class="twtr-doc" style="width: 900px;">            <div class="twtr-hd"></div>            <div class="twtr-bd">              <div class="twtr-timeline" style="height: auto;">                <div class="twtr-tweets">                  <div class="twtr-reference-tweet"></div><div class="twtr-tweet" id="tweet-id-1"><div class="twtr-tweet-wrap">         <div class="twtr-avatar">           <div class="twtr-img"> </div>         </div>         <div class="twtr-tweet-text">           <p>Find us on Social Media             <a target="_blank" href="https://www.facebook.com/#!/pages/Virtual-Concept-Hardware-and-Software-Technology-Private-Limited/199888860036638" class="twtr-user">Facebook</a>---<a target="_blank" href="https://twitter.com/virtualconceptt" class="twtr-user">Twitter</a>---<a target="_blank" href="https://plus.google.com/105680967097938130098" class="twtr-user">Google Plus</a>---<a target="_blank" href="http://pinterest.com/virtualconcept/" class="twtr-user">Pinterest</a>---<a target="_blank" href="http://www.linkedin.com/company/virtual-concept-hardware-and-software-technology-p-limited" class="twtr-user">LinkedIn</a>                      </p>         </div>       </div></div>                  <!-- tweets show here -->                </div>              </div>            </div>            <div class="twtr-ft">              <div><a target="_blank" href="https://twitter.com/"><img alt="" src="images/widget-bird.png"></a>                <span> </span>              </div>            </div>          </div></div>
            <p></p>
    
    </div>
	
    <div class="shadow_02"></div>

</div>


<div id="footer">
  <div class="footer_columns">
    <div class="container">
      <div class="one_fourth">
        <div class="footer_logo"><a href="index.html" class="footer_logo">
          <h1><img src="images/footer_logo.jpg" alt="footer logo" width="150" height="50"></h1>
          <span class="logo_caption">clean, professional &amp; simple</span></a></div>
        <ul class="address-liste">
          <li class="icon1">Ground Floor, Shailza Apartment, Matwari<br>
            Hazaribagh, jharkhand, India 825301</li>
          <li class="icon2">+91 6546 270119</li>
          <li class="icon2">+91 9430143342, 9708167801, 9934153842</li>
          <li class="worldmap"></li>
        </ul>
      </div>
      <!-- end address info -->
      <div class="one_fourth">
        <h2>Useful links</h2>
        <ul class="arrows_list1">		
            <li><a href="about.html">Our History</a></li>
            <!--<li><a href="#">Professional Research</a></li>-->
            <li><a href="portfolio.html">Our Development</a></li>
            <li><a href="#">Partnership With Us</a></li>
            <li><a href="current_0pening.html">Company Carreer</a></li>
           <!-- <li><a href="#">New Technology</a></li>-->
            <li><a href="testimonials.html">Client Testimonials</a></li>
		</ul>
      </div>
      <!-- end section -->
      <div class="one_fourth">
        <h2>Get in touch</h2>
        <ul class="socials-list">
          <li><a target="_blank" href="https://www.facebook.com/#!/pages/Virtual-Concept-Hardware-and-Software-Technology-Private-Limited/199888860036638" title="facebook"><img src="images/footer-socials-01.png" alt="pic">Connect with facebook</a></li>
          <li><a target="_blank" href="https://twitter.com/virtualconceptt" title="twitter"><img src="images/footer-socials-02.png" alt="pic">Follow on twitter</a></li>
          <li><a target="_blank" href="https://plus.google.com/105680967097938130098" title="google plus"><img src="images/footer-socials-03.png" alt="pic">Sharing on Google+</a></li>
          <li><a target="_blank" href="http://www.linkedin.com/company/virtual-concept-hardware-and-software-technology-p-limited" title="you tube"><img src="images/footer-socials-04.png" alt="pic">Connect with linkedin</a></li>
          <li><a target="_blank" href="http://pinterest.com/virtualconcept/" title="linked in"><img src="images/footer-socials-05.png" alt="pic">Content sharing on Pinterest</a></li>
          <li><a href="#" title="linked in"><img src="images/footer-socials-06.png" alt="pic">Share videos on YouTube</a></li>
          <!-- <li><a href="#" title="rss"><img src="images/footer-socials-07.png" alt="">Subscribe rss feed</a></li>-->
        </ul>
      </div>
      <!-- end social links -->
      <div class="one_fourth last">
        <h2>Flickr Photos</h2>
        <div id="flickr_badge_wrapper">
          <script type="text/javascript" src="js/badge_code_v2.js"></script>
          <!--<a href="http://www.flickr.com/photos/93382411@N07/8490922427/"><img src="description_files/8490922427_c1a1a35818_s.jpg" alt="A photo on Flickr" title="8" height="75" width="75"></a>
                <a href="http://www.flickr.com/photos/93382411@N07/8490919577/"><img src="description_files/8490919577_afdf637fc6_s.jpg" alt="A photo on Flickr" title="7" height="75" width="75"></a>
                <a href="http://www.flickr.com/photos/93382411@N07/8490912767/"><img src="description_files/8490912767_2a8a4ce8e3_s.jpg" alt="A photo on Flickr" title="6" height="75" width="75"></a>-->
                <a href="http://www.flickr.com/photos/93382411@N07/8492007572/"><img src="description_files/8492007572_67c355afba_s.jpg" alt="A photo on Flickr" title="5" height="75" width="75"></a>
                <a href="http://www.flickr.com/photos/93382411@N07/8492003654/"><img src="description_files/8492003654_ce6ed3e18d_s.jpg" alt="A photo on Flickr" title="4" height="75" width="75"></a>
                <a href="http://www.flickr.com/photos/93382411@N07/8490896907/"><img src="description_files/8490896907_4eea752cdc_s.jpg" alt="A photo on Flickr" title="3" height="75" width="75"></a>
                <span style="position:absolute;left:-999em;top:-999em;visibility:hidden" class="flickr_badge_beacon"><img src="description_files/p.gif" alt="" height="0" width="0"></span> </div>
      </div>
      <!-- end flickr -->
    </div>
  </div>
  <!-- end footer all columns -->
  <div class="copyright_info">
    
    	<div class="container">
        
    	<div class="one_half"><b>Copyright © 2013 (VC) Virtual Concept. All rights reserved</b></div>
		
        <div class="one_half last">
        	<span><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a></span>
                    
        </div>
        
		</div>
        
    </div><!-- end copyright info -->  
</div>


    
<!-- style switcher -->
<script type="text/javascript" src="testimonials_files/styleswitcher.js"></script>
<link rel="alternate stylesheet" type="text/css" href="css/lightblue.css" title="lightblue">
<link rel="alternate stylesheet" type="text/css" href="css/lightgreen.css" title="lightgreen">
<link rel="alternate stylesheet" type="text/css" href="css/blue.css" title="blue">
<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="green">
<link rel="alternate stylesheet" type="text/css" href="css/red.css" title="red">
<link rel="alternate stylesheet" type="text/css" href="css/cyan.css" title="cyan">
<link rel="alternate stylesheet" type="text/css" href="css/purple.css" title="purple">
<link rel="alternate stylesheet" type="text/css" href="css/yellow.css" title="yellow">
<link rel="alternate stylesheet" type="text/css" href="css/brown.css" title="brown">

<div style="left: -204px;" id="style-selector">
     
</div><!-- end style switcher -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
   
   

</div>

 
    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="testimonials_files/jquery.js"></script>

<!-- style switcher -->
<!--<script src="testimonials_files/jquery-1_002.js"></script>
<script src="testimonials_files/styleselector.js"></script>-->

<!-- main menu -->
<script type="text/javascript" src="testimonials_files/ddsmoothmenu.js"></script>
<script type="text/javascript" src="testimonials_files/jquery-1.js"></script>
<script type="text/javascript" src="testimonials_files/selectnav.js"></script>

<!-- jquery jcarousel -->
<!--<script type="text/javascript" src="testimonials_files/jquery_004.js"></script>-->

<!-- iosSlider plugin -->
<!--<script src="testimonials_files/jquery_003.js"></script>
<script src="testimonials_files/jquery_002.js"></script>
<script src="testimonials_files/custom_002.js"></script>-->

<!-- progress bar -->
<!--<script src="testimonials_files/progress.js" type="text/javascript" charset="utf-8"></script>-->
  
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-374977-27']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>


<!-- main menu -->
<script type="text/javascript" src="testimonials_files/scripts.js"></script>


<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>


<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
</script>

<script type="text/javascript" src="testimonials_files/custom.js"></script>




</body></html>