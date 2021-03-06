<!-- 

    TODO:   Build in some sort of animation sequence between pages - using css3 animations.
            I could use jquery to get other pages with animation sequences ready, run them
            then remove the animation classes...could be cool.

-->

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<title>THORN</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="../stylesheets/foundation.css" />
	<link rel="stylesheet" type="text/css" href="../stylesheets/app.css" />
        <link rel="stylesheet" type="text/css" href="../stylesheets/aboutus2.css" />
        <link rel="stylesheet" type="text/css" href="../stylesheets/animations.css" />

	<!--[if IE]>
		<link rel="stylesheet" href="../stylesheets/ie.css">
	<![endif]-->
	
	<script src="../javascripts/modernizr.foundation.js"></script>
        
	<!-- IE Fix for HTML5 Tags -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "5e457679-7431-4d3a-bca6-0b345b307fa1"}); </script>	




</head>
<body>

	<!-- container -->
	<div class="container" id="whatwedo">
            
<!--            <div class="row">
                
                <div class="twelve columns">
                
                    <div class="four columns">
                         logo container 
                        <div class="row" id="logoContainer">
                            <div class="twelve columns">
                                <h2 id="header_logo"><a href="../aboutus/"><img src="../images/thorn_logo.png" /></a></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="six columns">
                         nav menu container 
                        <div class="row" id="navContainer">
                            <div class="twelve columns">
                                <dl class="tabs">
                                    <dd><a href="../aboutus/?sans-animation">ABOUT US</a></dd>
                                    <dd><a class="current" href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a href="../theissue">THE ISSUE</a></dd>
                                    <dd><a href="../getinvolved">GET INVOLVED</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>-->

           <div class="row">
                
<!--                <div class="twelve columns">
                
                    <div class="four columns">
                         logo container 
                        <div class="row" id="logoContainer">
                            <div class="twelve columns">
                                <h2 id="header_logo"><a href="../aboutus/"><img src="../images/thorn_logo.png" /></a></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="six columns">
                         nav menu container 
                        <div class="row" id="navContainer">
                            <div class="twelve columns">
                                <dl class="tabs">
                                    <dd><a href="../aboutus">ABOUT US</a></dd>
                                    <dd><a class="current" href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a href="../theissue">THE ISSUE</a></dd>
                                    <dd><a href="../donate">DONATE</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>-->

                <?php include_once '../includes/header.php'; ?>
                
            </div><!-- / header -->
            
            <div class="row" id="whatWeDo">
            	<div class="ten columns">
	            	<div class="row" id="researchContainer">
		                <div class="twelve columns">
			                <div id="research" class="three columns">
		                		<hr class="goldhr" />
		                		<h5>RESEARCH AND<br />DEVELOPMENT</h5>
			                </div>
			                
			                <div class="eight columns">
			                	<div class="panelBlack">
			                		<hr class="blackhr" />
				                	<p>We partner with nonprofits and academic institutions to gather new insights into the role technology plays in child sex trafficking, the creation and proliferation of child pornography, and the normalization of child sexual exploitation.</p>
			                	</div>	
			                </div>
		                </div>
	                </div> 
		                   
		            <div class="row" id="deterranceContainer">
		                <div class="twelve columns">
			                <div id="deterrance" class="three columns">
		                		<hr class="goldhr" />
		                		<h5>DETERRENCE</h5>
			                </div>
			                
			                <div class="eight columns">
			                	<div class="panelRed">
			                		<hr class="redhr" />
				                	<p>We create and support tech initiatives that disrupt predatory behavior and work to make the internet a more hostile environment for those who seek to exploit children.</p>
			                	</div>	
			                </div>
		                </div>
		            </div> 
			            
                        <div class="row" id="technologicalContainer">
		                <div class="twelve columns">
			                <div id="technological" class="three columns">
		                		<hr class="goldhr" />
                                                <h5><!--<span id="nitPickyT">TECHNOLOGICAL</span><br />-->INNOVATION</h5>
			                </div>
			                
			                <div class="eight columns">
			                	<div class="panelDarkgrey">
			                		<hr class="darkGreyhr" />
				                	<p>We recruit the brightest minds in technology to solve specific problems in our fight against the sexual exploitation of children.</p>
			                	</div>	
			                </div>
		                </div>
	                </div> 
		              
		            <div class="row" id="industryContainer">
	                
		                <div class="twelve columns">
			                <div id="industry" class="three columns">
		                		<hr class="goldhr" />
		                		<h5>INDUSTRY<br />INITIATIVES</h5>
			                </div>
			                
			                <div class="eight columns">
			                	<div class="panelGold">
			                		<hr class="goldhr" />
				                	<p>Through our technology task force, we facilitate the sharing of information across platforms and encourage cooperation on initiatives between industry leaders.</p>
			                	</div>	
			                </div>
			            </div>
			        </div>                                             
	            </div>                       
<!--	        	<div id="footerContainer_whatwedo" class="two columns">
	            			        
			        
			        
			        
			        <div class="twelve colums">
		            	<hr class="goldhr" />
		            	<p><span></span>
		            	<img src="../images/social_icons/facebook.png" id="facebook_share" />
		            	
		            	<img src="../images/social_icons/twitter.png" id="twitter_share" /> 
		            	
		            	<a href="https://plus.google.com/share?url={http://www.wearethorn.org}" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="../images/social_icons/google_plus.png" alt="Share on Google+" id="google_share" /></a> 
		            	
			            <a href="mailto:
		?subject=THORN – We are digital defenders of children 
		&body=Thorn exists to continue the work started by the Demi and Ashton (DNA) Foundation in 2009.  We invest in and deploy the latest technology in order to make the web a hostile environment for child predators.  Our efforts aim to disrupt and deflate the predatory behaviors of those who use technology to abuse or traffic children, to solicit sex with children, or to create and share child pornography." target="_blank" alt="email"><img src="../images/social_icons/social_email.png" id="email_share" /></a> 
			            
			            
						</p>
			        </div>
			        
			        
			        
			    </div>-->
<!--                    <div id="footerContainer_whatwedo" class="two columns">
                        <div class="twelve colums">
                            <hr class="goldhr" />
                            <p>
                                <span></span>
                                <a href="#facebook" class="social facebook"><img src="../images/social_icons/facebook.png" id="facebook_share" /></a>

                                <a href="#twitter" class="social twitter"><img src="../images/social_icons/twitter.png" id="twitter_share" /> </a>

                                <a href="https://plus.google.com/share?url={http://www.wearethorn.org}" onclick="javascript:window.open(this.href,
    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <img src="../images/social_icons/google_plus.png" alt="Share on Google+" id="google_share" />
                                </a> 

                                <a class="social email" href="mailto:
                ?subject=THORN – We are digital defenders of children 
                &body=Thorn exists to continue the work started by the Demi and Ashton (DNA) Foundation in 2009.  We invest in and deploy the latest technology in order to make the web a hostile environment for child predators.  Our efforts aim to disrupt and deflate the predatory behaviors of those who use technology to abuse or traffic children, to solicit sex with children, or to create and share child pornography." target="_blank" alt="email">
                                    <img src="../images/social_icons/social_email.png" id="email_share" />
                                </a> 
                            </p>
                            <div id="socialPopUpContainer">
                                <div id="facebook" class="socialPopUp">
                                    <a id="share" href="#">Share</a> | <a href="https://www.facebook.com/dnafoundation">Follow</a>
                                </div>
                                <div id="twitter"  class="socialPopUp">
                                   <a class="twitter popup" href="http://twitter.com/share?text=This%20be%20good%20site!">Share</a> | <a href="https://twitter.com/dnafoundation">Follow</a>
                                </div>
                                <div id="email" class="socialPopUp">
                                    <iframe id="sidebarNewsletterForm" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%; border:none"  src="../wufoo/sidebar.html"><a href="https://goodbysilverstein.wufoo.com/forms/m7x3q1/">Fill out my Wufoo form!</a></iframe>
                                </div>
                            </div>
                        </div> / twelve column        
                    </div>-->
	
                    <?php include_once '../includes/footer.php'; ?>

            </div>
            
            <?php include_once '../includes/policy.php'; ?>
    </div><!-- / container -->





	<!-- Included JS Files -->
<!--	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../javascripts/jquery.min.js">\x3C/script>')</script>
	<script src="../javascripts/foundation.js"></script>
	<script src="../javascripts/app.js"></script>
        <script src="../javascripts/thorn.js"></script>
        <script src="../javascripts/social.js"></script>-->
        <?php include_once '../includes/scripts.php'; ?>
</body>
</html>