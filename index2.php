<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'webmaster@anthonyfrank.me'; 
		$to = 'anthonyfrank@live.com'; 
		$to_sms = '9047101298@myboostmobile.com';
		$subject = 'Message from AnthonyFrank.me';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			}
		}
	}
?>
<html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>
    
    <title>Anthony Frank - Portfolio</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/reset.css"/> 
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>
    <!--[if IEMobile]> 
    <link rel="stylesheet" type="text/css" href="css/iemobile.css"/>
    <![endif]--> 
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery-ui-map.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
    <body>
        <!-- Container -->
        <section id="container">
        
            <!-- Header --> 
			<header> 
            	<!-- Logo -->
            	<div id="logo">
                	<h2>ANTHONY FRANK</h2>
                    <h4>GRAPHIC & WEB DESIGNER</h4>
                </div>
                <!-- /Logo -->
                
                <!-- Social Icons -->
                <ul class="socialicons">
                    <li class="socials-text">Social Profiles</li>
                	<li><a href="https://www.facebook.com/profile.php?id=100004930966583" class="transition">&#x2a;</a></li><!--FacebooK-->
                    <li><a href="https://twitter.com/afrank84" class="transition">&#x2c;</a></li><!--Twitter-->

                    <!--<li><a href="#" class="transition">&#x2d;</a></li>-->
                    <!--<li><a href="#" class="transition">&#x31;</a></li>-->
                </ul>
                <!-- /Social Icons -->
            </header>
            <!-- /Header -->
            
            <!-- Content -->
            <section id="content" >
            
                <!-- Profile -->
                <div id="profile"> 
                 	<!-- About section -->
                	<div class="about">
                    	<div class="photo-inner">
                            <ul>
                                <li><img src="images/frank_clear.png" height="186" width="153" /></li>
                                <li><img src="images/frank_clear-1.jpg" height="186" width="153" /></li>
                            </ul>
                        </div>
                        <h1>ANTHONY FRANK</h1>
                        <div id="cbp-qtrotator" class="cbp-qtrotator">

                            <div class="cbp-qtcontent current"> 
                                <h3>GRAPHIC & WEB DESIGNER</h3>
                            </div>

                            <div class="cbp-qtcontent"> 
                                <h3>Analytics Specialist</h3>
                            </div>

                            <div class="cbp-qtcontent"> 
                                <h3>SEO Engineer</h3>
                            </div>
                            <div class="cbp-qtcontent"> 
                                <h3>SOCIAL MEDIA SPECIALIST</h3>
                            </div>
  
                        </div>
                        <!--<p class="personal_info">
                        I like to make cool and creative designs. My design stash is always full of refreshing ideas. 
                        Feel free to take a look around my Vcard.</p>-->
                         <p class="personal_info">
                        I leverage technology in order to work remotely and live an independent and nomadic lifestyle traveling
                        the world with my wife and children.
                         </p>
                    </div>
                    <!-- /About section -->
                     
                    <!-- Personal info section -->
                	<ul class="personal-info">
						<li><label>Name</label><span>Call Me Frank...</span></li>
                        <li><label>Birthday</label><span>September 18, 1988</span></li>
                        <li><label>Address</label><span>Melrose Fl</span></li>
                        <li><label>Email</label><span class="word-wrap">AnthonyFrank@live.com</span></li>
                        <!--<li><label>Phone</label><span>+123 456 789 111</span></li>-->
                        <li><label>Website</label><span class="word-wrap"><a href="#">www.AnthonyFrank.me</a></span></li>
                    </ul>
                    <!-- /Personal info section -->
                </div>        
                <!-- /Profile --> 

                <!-- Menu -->
                <nav class="menu">
                	<ul class="tabs">
                        <li class="tmenu"><a href="#profile" class="tab-profile"><i>&#x43;</i>Profile</a></li>
                        <li class="tmenu"><a href="#resume"><i>&#x3a;</i>Resume</a></li>
                        <li class="tmenu"><a href="#portfolio"><i>&#x38;</i>Portfolio</a></li>
                        <li class="tmenu"><a href="#contact"><i>&#x21;</i>Contact</a></li>
                    </ul>
                    <a class="prev" id="menu-prev" href="#">&#xe073;</a>
                    <a class="next" id="menu-next" href="#">&#xe076;</a>

                </nav>
                <!-- /Menu --> 
                
                <!-- Resume -->
                <section id="resume">
                	 <div class="timeline-section">
                        <!-- Timeline for Employment  -->   
                        <h3 class="main-heading">Employment</h3>   
                        <ul class="timeline">
                            <li>
                                                   
                                <div class="timelineUnit">
                                    <h4>Owner<span class="timelineDate">2009 - Present</span></h4>
                                    <h5>Code This Project</h5>
                                    <p>I sell college help material and tutorials to students for computer programming, web development, and database management courses. My digital products range from code snippets to full CMS systems. I also use this company to launch my other SaaS prototypes for outside emerging technology companies.</p>
                                </div>
                            </li>
                            <li>
                         
                                <div class="timelineUnit">
                                    <h4>Freelancer<span class="timelineDate">2009 - Present</span></h4>
                                    <h5>Changes Per Contract</h5>
                                    <p>Basically, I come into companies and produce a list of inefficiencies, bad practices, and money wasters. I then provide multiple solutions for every problem I find, and usually am able to automate many processes and even bring in additional income for growth.</p>
                                </div>
                            </li>
                            <li>
                     
                                <div class="timelineUnit">
                                    <h4>Asset Protection<span class="timelineDate">2008 - 2009</span></h4>
                                    <h5>Consectetur adipiscing </h5>
                                    <p>I worked as undercover security for the tougher parts of an inner city store. I did a lot fighting and detaining of shoplifters, trespassers, drug dealers, and other riff raff that came into my store. Probably would have been better off just going into M.M.A. (Mixed Martial Arts) or doing the local cage fights for quick cash. At least the job was interesting and the fighting kept me fit. </p>
                                </div>
                            </li>
                            <li>
                     
                                <div class="timelineUnit">
                                    <h4>Infantry Rifleman<span class="timelineDate">2004 - 2008</span></h4>
                                    <h5>United States Marine Corps</h5>
                                    <p>I served 3 combat tours in 4 years. Lost many friends and learned many lessons, which have helped develop my character into the person I am today. I apply these lessons and values not only to my business practices but also every facet of my life. However, there are few challenges left in this world that will ever come close to my time served in the Marines.</p>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul> 
                        <!-- /Timeline for Employment  -->

                        <!-- Timeline for Education  -->   
                        <h3 class="main-heading">Education</h3>   
                         <ul class="timeline">
                            <li>            
                                <div class="timelineUnit">
                                    <h4>B.A.S. Information Technology Management<span class="timelineDate">2011 - 2015</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                    <p>Graduated top of my class as <i>Summa Cum Laude</i>.</p>
                                </div>
                            </li>
                            <li>             
                                <div class="timelineUnit">
                                    <h4>A.S. Information Technology  <span class="timelineDate">2009 - 2011</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                    <p>Graduated top of my class with <i>High Honors</i>.</p>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul> 
                        <!-- /Timeline for Education  -->  

                        <!-- Timeline for Certifications & Continued Education  --> 
                        <h3 class="main-heading">Certificates</h3>   
                         <ul class="timeline">
                            <li>            
                                <div class="timelineUnit">
                                    <h4>Information Analysis<span class="timelineDate">2015</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                </div>
                            </li>
                            <li>             
                                <div class="timelineUnit">
                                    <h4>Web Development Specialist<span class="timelineDate">2015</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                </div>
                            </li>
                            <li>             
                                <div class="timelineUnit">
                                    <h4>Customer Support Specialist<span class="timelineDate">2010</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                </div>
                            </li>
                            <li>             
                                <div class="timelineUnit">
                                    <h4>Computer Programming Specialist<span class="timelineDate">2012</span></h4>
                                    <h5>Florida State College at Jacksonville</h5>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul> 
                        <!-- /Timeline for Education  -->            
                    </div>
                    <div class="skills-section">
                        <!-- Skills -->
                        <h3 class="main-heading">Languages & Frameworks</h3> 
                        <ul class="skills">
                            <li>
                                <h4>HTML 5</h4>
                                <div class="rating" data-rat="7"></div>

                            </li>
                            <li>
                                <h4>CSS 3</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>
                            <li>
                                <h4>JavaScript</h4>
                                <div class="rating" data-rat="5"></div>
                            </li>
                            <li>
                                <h4>Jquery</h4>
                                <div class="rating" data-rat="3"></div>
                            </li>
                            <li>
                                <h4>SASS</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>LESS</h4>
                                <div class="rating" data-rat="3"></div>
                            </li>
                            <li>
                                <h4>Bootstrap 3</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Pure CSS</h4>
                                <div class="rating" data-rat="5"></div>
                            </li>
                            <li>
                                <h4>Python</h4>
                                <div class="rating" data-rat="4"></div>
                            </li> 
                            <li>
                                <h4>Java</h4>
                                <div class="rating" data-rat="3"></div>
                            </li> 
                            <li>
                                <h4>MySQL</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Ruby</h4>
                                <div class="rating" data-rat="3"></div>
                            </li>      
                        </ul>
                   
                        <h3 class="main-heading">Software Used</h3> 
                        <ul class="skills">
                            <li>
                                <h4>Sublime Text 3</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>
                            <li>
                                <h4>Notepad ++</h4>
                                <div class="rating" data-rat="7"></div>
                            </li>
                            <li>
                                <h4>Priemer</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Photoshop</h4>
                                <div class="rating" data-rat="5"></div>
                            </li>
                            <li>
                                <h4>Muse</h4>
                                <div class="rating" data-rat="3"></div>
                            </li>
                            <li>
                                <h4>After Effects</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Filezilla</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>

                        </ul>
                        <h3 class="main-heading">Abilities</h3> 
                        <ul class="skills">
                            <li>
                                <h4>Graphic Design</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>
                            <li>
                                <h4>Web Design</h4>
                                <div class="rating" data-rat="7"></div>
                            </li>
                            <li>
                                <h4>Print Design</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>
                            <li>
                                <h4>SEO Specialist</h4>
                                <div class="rating" data-rat="7"></div>
                            </li>
                            <li>
                                <h4>Analytics</h4>
                                <div class="rating" data-rat="6"></div>
                            </li>
                            <li>
                                <h4>Email Campaigns</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Social Media Campaigns</h4>
                                <div class="rating" data-rat="5"></div>
                            </li>
                            <li>
                                <h4>Ad Campaigns</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Video Animation</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Brand Identity</h4>
                                <div class="rating" data-rat="4"></div>
                            </li>
                            <li>
                                <h4>Wordpress Development</h4>
                                <div class="rating" data-rat="5"></div>
                            </li>
                        </ul>
                     <!-- /Skills -->
                     </div>
                     <div class="clear"></div>
                    <!-- <a href="#" class="button transition">Download resume as PDF format</a> -->
                </section>
                <!-- /Resume --> 
                                        
                <!-- Portfolio -->
                <section id="portfolio">
                     <ul class="cats-filter" id="portfolio-filter">
                        <li><a href="" class="current transition" data-filter="*">All</a></li>
                        <li><a href="" class="transition" data-filter=".webdesign">WebDesign</a></li>
                        <li><a href="" class="transition" data-filter=".photoghraphy">Photoghraphy</a></li>
                        <li><a href="" class="transition" data-filter=".illustration">Illustration</a></li>
                        <li><a href="" class="transition" data-filter=".print">Print</a></li>
                        <li><a href="" class="transition" data-filter=".animation">Animation</a></li>
                        <li><a href="" class="transition" data-filter=".design">Graphic Design</a></li>
                    </ul>
                    <div class="extra-text">Some of the projects i'm proud with</div>
                    <ul id="portfolio-list">
                        <!--<li class="illustration print">
                            <a href="portfolio/1.jpg" rel="portfolio[1]" title="Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet" class="folio">
                                <img src="portfolio/1-thumb.jpg" alt="Image Title">
                                <h2 class="title">Hello Goodbye</h2>
                                <span class="categorie">Print / Illustration</span> 
                            </a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                            <a href="portfolio/4.jpg" rel="portfolio[1]" title="This is the description" class="folio hidden"></a>
                    	</li>-->
                        <li class="webdesign animation">
                            <a href="https://www.youtube.com/watch?v=JR0GK21FIa0" rel="portfolio" title="Created for a client as a final college project. I created this as a presentation instead of a powerpoint, thought it was a better way to relay information. 
                            All artwork, design, and website was created by me. Video was also created by me as well." class="folio">
                                <img src="portfolio/capstone_ss_thumb.png" alt="" >
                                <h2 class="title">Capstone</h2>
                                <span class="categorie">Video / Website</span> 
                            </a>
                    	</li>
                        <li class="design">
                            <a href="portfolio/knotify-cellphone.png" rel="portfolio" class="folio">
                                <img src="portfolio/knotify_ss_thumb.png" alt="" >
                                <h2 class="title">Knotify Mobile Development</h2>
                                <span class="categorie">Graphic Design / UX Design</span> 
                            </a>
                        </li>
                        <li class="animation">
                            <a href="https://www.youtube.com/watch?v=XfkbqfO8Ta8" rel="portfolio" title="Created as a slideshow of imagery for
                            our mission trip to Hamilton Canada." class="folio">
                                <img src="portfolio/hamilton_ss_thumb2.png" alt="" >
                                <h2 class="title">Hamilton Canada</h2>
                                <span class="categorie">Video</span> 
                            </a>
                        </li>                         
                        <li class="design">
                            <a href="portfolio/kh-logo300x300.png" rel="portfolio" class="folio">
                                <img src="portfolio/kh-logo300x300.png" alt="" >                            
                                <h2 class="title">Keystone Heights Logo</h2>
                                <span class="categorie">Graphic Design</span> 
                            </a>
                    	</li>
                        <li class="illustration print">
                            <a href="portfolio/09232014_vendors_needed_frank.png" rel="portfolio[1]" title="Was asked a couple times a month to create local advertisements for Keystone Heights Farmer's Market." class="folio">
                                <img src="portfolio/khfm_thumb.png" alt="Image Title">
                                <h2 class="title">KHFM Advertisement</h2>
                                <span class="categorie">Print / Illustration</span> 
                            </a>
                            <a href="portfolio/khfm-ad3_75x5in.png" rel="portfolio[1]" title="Ad before print." class="folio hidden"></a>
                            <a href="portfolio/p2.png" rel="portfolio[1]" title="An actual print from the local newspaper." class="folio hidden"></a>
                        </li>
                        <li class="webdesign animation">
                            <a href="portfolio/Responsive-showcase-presentation.png" rel="portfolio" title="." class="folio">
                                <img src="portfolio/Responsive-showcase-presentation.png" alt="" >
                                <h2 class="title">Mockup</h2>
                                <span class="categorie">Graphic Design</span> 
                            </a>
                        </li>
                        <!--
                        <li class="animation">
                            <a href="portfolio/5.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/5-thumb.jpg" alt="" >
                                <h2 class="title">Come together</h2>
                                <span class="categorie">Animation</span> 
                            </a>
                    	</li>
                        -->
                        <!--
                        <li class="webdesign print">
                            <a href="portfolio/6.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/6-thumb.jpg" alt="" >
                                <h2 class="title">The yellow</h2>
                                <span class="categorie">Webdesign / Print</span> 
                            </a>
                    	</li>
                        -->
                        <li class="design">
                            <a href="portfolio/Unique_Notations_Union_Street_8p5x11in.png" rel="portfolio" class="folio">
                                <img src="portfolio/unique_ss_thumb.png" alt="" >
                                <h2 class="title">Unique Notions</h2>
                                <span class="categorie">Graphic Design / Print</span> 
                            </a>
                    	</li>
                        
                        <!--
                        <li class="illustration">
                            <a href="portfolio/8.jpg" rel="portfolio" class="folio">
                                <img src="portfolio/8-thumb.jpg" alt="" >
                                <h2 class="title">Revolution</h2>
                                <span class="categorie">Illustration</span> 
                            </a>
                    	</li>
                        -->
                    </ul>
                </section>
                <!-- /Portfolio -->  
                 
                <!-- Contact -->
                <section id="contact">
                	<div id="map"><!-- Replace Lat & Long in "custom.js". It can be found in URL of google maps. --></div>
                	<!-- Contact Info -->
                    <div class="contact-info">
                        <h3 class="main-heading"><span>Contact info</span></h3>
                    	<ul>
                            <li>Location: Melrose, FL </li>
                            <li>Email: AnthonyFrank@live.com</li>
                            <li>Website: www.AnthonyFrank.me</li>
                            <!--<li>Phone: +123 456 789 111</li>-->
                        </ul>
                    </div>
                    <!-- /Contact Info -->
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h3 class="main-heading"><span>Let's keep in touch</span></h3>
                        <div id="contact-status"></div>
                        <form action="index2.php" id="contactform" method="post">
                            <p>
                            	<label for="name">Your Name</label>
                            	<input type="text" name="name" class="input" placeholder="John Doe">
								<?php echo "<p class='text-danger'>$errName</p>";?>
                            </p>
                            <p>
                            	<label for="email">Your Email</label>
                            	<input type="text" name="email" class="input" placeholder="example@domain.com">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </p>
                            <p>
                            	<label for="message">Your Message</label>
                                <textarea name="message" cols="88" rows="6" class="textarea" placeholder="What can I do for you today?"></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </p>
							<p>
                            	<label for="email"><b>2 + 3 = ?</b></label>
                            	<input type="text" name="human" class="input" placeholder="Just making sure your human. No one likes spam...">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </p>
							
                            <input type="submit" name="submit" value="Send your message" class="button transition">
							<p><?php echo $result; ?></p>
                        </form>
                    </div>
                    <!-- /Contact Form -->
                </section>
                <!-- /contact -->  

            </section>
            <!-- /Content -->
            
            <!-- Footer -->
			<footer>
            	<div class="copyright">Copyright © 2015 Anthony Frank</div>
            </footer>
            <!-- /Footer --> 
            
        </section>
		<!-- /Container -->

        <!-- Loading Scripts -->
        
        <script type="text/javascript">
            $(document).ready(function() {
            //Quotes rotator
            var divs = $('.cbp-qtcontent');

            function fade() {
            var current = $('.current');
            var currentIndex = divs.index(current),
            nextIndex = currentIndex + 1;

            if (nextIndex >= divs.length) {
            nextIndex = 0;
            }

            var next = divs.eq(nextIndex);

            next.stop().fadeIn(1000, function() {
            $(this).addClass('current');
            });

            current.stop().fadeOut(1000, function() {
            $(this).removeClass('current');
            _startProgress()
            setTimeout(fade, 3500);
            });
            }

            function _startProgress(){
            $(".cbp-qtprogress").removeAttr('style');
            $(".cbp-qtprogress").animate({
            width:"800px",
            } , 3500);
            }

            _startProgress()
            setTimeout(fade, 3500);
            });
        </script>



    </body>
</html>