
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Music Store - Rock & Metal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<style>
		/* Preloader */
		#preloader {
			position:fixed;
			top:0;
			left:0;
			right:0;
			bottom:0;
			background-color:#E74C3C; /* change if the mask should have another color then white */
			z-index:999999; /* makes sure it stays on top */
		}
		
		#status {
			width:200px;
			height:200px;
			position:absolute;
			left:50%; /* centers the loading animation horizontally one the screen */
			top:50%; /* centers the loading animation vertically one the screen */
			background-image:url(images/preloader.gif); /* path to your loading animation */
			background-repeat:no-repeat;
			background-position:center;
			margin:-100px 0 0 -100px; /* is width and height divided by two */
		}
		#status p{text-align:center;color:#fff;font-family:DroidSansBold;}
</style>

<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/jquery.bxslider.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="images/favicon.png">
<!--favicon image-->

</head>

<body>
	<!-- Preloader -->
    <div id="preloader">
        <div id="status"><p>Loading Content...</p></div>
    </div>
    
	<div class="spacing-40 clearfix"></div>
	<div id="home" class="container top">
    	<div class="header">
            <div class="container header-inner">
                <div class="row">
                    <div class="span3 logo clearfix">
					 <h2>Music Store</h2>
                       
                    </div><!--/.logo-->
                    <div class="span9 menu clearfix">
                    <div class="menu-btn" data-target=".nav-collapse" data-toggle="collapse">
                    	<span class="icon-collapse"></span>
                    </div>
                        <ul class="navigation nav-collapse">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#Best-Album">Best Album</a></li>
                            
                            <li><a href="#Product">Product</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">Contact & About us</a></li>
                        </ul><!--/.navigation-->
                    </div><!--/.menu-->
                </div><!--/.row-->
            </div><!--/.header-inner-->
        </div><!--/.header-->
    </div><!--/home-->
    
    <div class="container home-slider">
    	<div class="overlay"></div>
        <ul class="slider">
          <li><img alt="slider" src="images/1.jpg" ></li>
          <li><img alt="slider" src="images/2.jpg" ></li>
          <li><img alt="slider" src="images/3.jpg" ></li>
          <li><img alt="slider" src="images/4.jpg" ></li>
        </ul>
        <div class="offset6 span6 motto">
        	<div class="padding clearfix">
                <h2>Welcome! To Our <span>Music Store <span>.</h2>
                <div class="motto-line clearfix"></div>
                <p>We Try To Introduce Best Rock Album To You.</p>
                <a class="black-btn move-to" href="#Product">Find Out More</a>
            </div><!--/.padding-->
        </div><!--/.span6-->
    </div><!--/.slider-->
    
    <div id="Best-Album" class="container">
    	<div class="row dark-bg">
        	<div class="span6 big-text">
                <div class="padding clearfix">
                	
                    
                    <h2>A little words to describe <span>Best Album</span>.</h2>
                </div><!--/.padding-->
            </div><!--/.dark-bg-->
            <div class="span6 color-bg">
            	<div class="padding clearfix">
                    <div  id="Best-Album-slide" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                            	
                            	<h4 class="title-Best-Album">This Is Some Of the Best Rock Album In The World</h4>
                                <p class="strong">They Get A Lot Of Awards...</p>
                                <p>They Are Best...</p>
                               
                            </div><!--item-->
                            
                           
                            
                             
                        </div><!--/.carousel-inner-->
                    </div><!--/.carousel-->
                    <!-- Carousel nav -->
                        
                </div><!--/.padding-->
            </div><!--/.color-bg-->
        </div><!--/.row-->
    </div><!--/Best Album-->
    
    <div class="container team">
    	<div class="row">
        	<div class="span4 team-inner">
            	<div class="team-top bg-dark  clearfix">
                    <img class="team-img" alt="team" src="images/team/1.jpg">
                    <div class="team-name clearfix">
                        <div class="padding">
                            <h3 class="team-title">Gary Moore</h3>
                            <p class="position">Back To The Blues</p> 
                            <i class="icon-play-circle scroll-icon"></i>
                        </div><!--/.padding-->
                    </div><!--/.team-head-->
                </div><!--/.team-top-->  
                <div class="team-bottom clearfix">
                    <div class="padding team-text clearfix">
                    <p class="strong">Back to the Blues </p>
                    <p class="team-desc">
                    Back to the Blues is a 2001 album by blues-rock guitarist and vocalist Gary Moore.
                    </p> 
                    <div class="spacing-20"></div>
                    <ul class="team-social">
                    	<a href="Gary Moore.html"  class="more">Shop <i class="icon-long-arrow-right"></i></a>
                        
                    </ul><!--/.team-social-->
                    </div><!--/.padding-->           	
                </div><!--/.team-bottom--> 
                <img alt="bg" src="images/team/team-bg.jpg"> 
            </div><!--/.team-inner-->
            
            <div class="span4 team-inner">
            	<div class="team-top bg-dark  clearfix">
                    <img class="team-img" alt="team" src="images/team/2.jpg">
                    <div class="team-name clearfix">
                        <div class="padding">
                            <h3 class="team-title">The Doors</h3>
                            <p class="position">L.A. Woman</p> 
                            <i class="icon-play-circle scroll-icon"></i>
                        </div><!--/.padding-->
                    </div><!--/.team-head-->
                </div><!--/.team-top-->  
                <div class="team-bottom clearfix">
                    <div class="padding team-text clearfix">
                    <p class="strong">L.A. Woman </p>
                    <p class="team-desc">
                L.A. Woman is the sixth studio album by American rock band, The Doors, and was released on April 19, 
				1971 on Elektra Records (see 1971 in music).
                    </p> 
                    <div class="spacing-20"></div>
                    <ul class="team-social">
                    	<a href="single-post.html"  class="more">Shop <i class="icon-long-arrow-right"></i></a>
                        
                    </ul><!--/.team-social-->
                    </div><!--/.padding-->           	
                </div><!--/.team-bottom--> 
                <img alt="bg" src="images/team/team-bg.jpg"> 
            </div><!--/.team-inner-->
            
            <div class="span4 team-inner">
            	<div class="team-top bg-dark  clearfix">
                    <img class="team-img" alt="team" src="images/team/3.jpg">
                    <div class="team-name clearfix">
                        <div class="padding">
                            <h3 class="team-title">AC/DC</h3>
                            <p class="position">HighWat To Hell</p> 
                            <i class="icon-play-circle scroll-icon"></i>
                        </div><!--/.padding-->
                    </div><!--/.team-head-->
                </div><!--/.team-top-->  
                <div class="team-bottom clearfix">
                    <div class="padding team-text clearfix">
                    <p class="strong">Highway to Hell </p>
                    <p class="team-desc">
                    Highway to Hell is an album by Australian hard rock band AC/DC. It was the band's fifth internationally released studio album and the sixth to be released in Australia. It was the last album featuring lead singer Bon Scott, who died early the following year from over-consumption of alcohol.
                    </p> 
                    <div class="spacing-20"></div>
                    <ul class="team-social">
                    	<a href="single-post.html"  class="more">Shop <i class="icon-long-arrow-right"></i></a>
                        
                    </ul><!--/.team-social-->
                    </div><!--/.padding-->           	
                </div><!--/.team-bottom--> 
                <img alt="bg" src="images/team/team-bg.jpg"> 
            </div><!--/.team-inner-->
            
        </div><!--/.row-->
    </div><!--/.team-->
    
    

    
    
    
    <div id="Product" class="container">
    	<div class="row dark-bg">
        	<div class="span5 big-text">
                <div class="padding clearfix">                    
                    <h3>This is the list of <span>recent Albums </span>.</h3>
                </div><!--/.padding-->
            </div><!--/.span5-->
            <div class="span7 color-bg">
            	<div class="padding clearfix">                                      
                    <ul class="port-filter">
                        <li><a class="white-btn" data-filter="*" href="#">All</a></li>
                        <li><a class="white-btn" data-filter=".Rock" href="#">Rock</a></li>
                        <li><a class="white-btn" data-filter=".Metal" href="#">Metal</a></li>
                    </ul>
                    
                </div><!--/.padding-->
            </div><!--/.color-bg-->
       </div><!---/.dark-bg-->
       
       <div class="portfolio-body row clearfix">
        	<div class="port-item span3 Rock">
                <a data-link="work1.html" href="#">
                   
                    <img alt="portfolio" src="images/work/1.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Beatles</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span> Please Please Me</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
						
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work2.html" href="#">
              
                    <img alt="portfolio" src="images/work/2.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Aerosmith</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span> get a grip</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Metal">
                <a data-link="work3.html" href="#">
                   
                    <img alt="portfolio" src="images/work/3.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Black Sabbath</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span> Paranoid</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work1.html" href="#">
                    
                    <img alt="portfolio" src="images/work/4.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Deep Purple</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span> Machine Head</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work2.html" href="#">
                    
                    <img alt="portfolio" src="images/work/5.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Led Zeppelin</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span>  Houses of the Holy</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work3.html" href="#">
                    
                    <img alt="portfolio" src="images/work/6.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Queen </h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Album:</span> News of the World</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work1.html" href="#">
                   
                    <img alt="portfolio" src="images/work/7.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">The Doors</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Client:</span> Morrison Hotel</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
            <div class="port-item span3 Rock">
                <a data-link="work2.html" href="#">
                    
                    <img alt="portfolio" src="images/work/8.jpg">
                    <div class="padding white-bg">
                        <h3 class="port-title">Nirvana</h3>
                        <div class="port-line clearfix"></div>
                        <p class="port-client"><span>Client:</span> Nevermind</p>
						<a href="single-post.html"  class="more">Buy <i class="icon-long-arrow-right"></i></a>
                    </div><!--/.padding-->
                </a>
            </div><!--/.span3-->
       </div><!--/.Product-body-->
        
        <div id="workslist" class="clearfix">
             <div class="container worksajax light-bg">
             </div><!--/.worksajax -->
        </div><!--/workslist-->
        
    </div><!--Product-->
    
    <div id="news" class="container">
    	<div class="row dark-bg">
            <div class="span4  big-text news-inner">
                <div class="padding clearfix">
                   <div class="spacing-100 clearfix"></div>
                   <div class="spacing-70 clearfix"></div>
                   <h2 class="title-page">Some <span>update</span> and recent <span>news</span> In Music World.</h2>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
            <div class="span8 white-bg news-inner">
                <div class="padding clearfix">
                	<i class="icon-check news-icon"></i>
                    <p class="meta">Feb <span>13</span></p>
                    <img alt="news" src="images/news/1.jpg">
                    <div class="spacing-40 clearfix"></div>
                    <h3 class="news-title">13 - Black Sabbath.</h3>
                    <div class="news-line clearfix"></div>
                    <p class="news-desc">13 is the nineteenth studio album by British rock band Black Sabbath.</p>
                    <a href="news1.html"  class="more">Read more <i class="icon-long-arrow-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
            
            <div class="clearfix"></div>
            
            <div class="span6 white-bg news-inner">
                <div class="padding clearfix">
                	<i class="icon-external-link news-icon"></i>
                    <p class="meta">June <span>23</span></p>
                    <img alt="news" src="images/news/2.jpg">
                    <div class="spacing-40 clearfix"></div>
                    <h3 class="news-title">AC/DC Kick Off ‘Rock or Bust World Tour in The Netherlands.</h3>
                    <div class="news-line clearfix"></div>
                    <p class="news-desc">AC/DC kicked off their Rock or Bust world tour in grand fashion last night (Tuesday, May 5) at 
					the massive Gelredome stadium in Arnhem, The Netherlands  The legendary rockers performed 20 songs for the huge crowd 
					including a lot of classics mixed with some new material.</p>
                    <a href="news2.html"  class="more">Read more <i class="icon-long-arrow-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
           
            <div class="span6 white-bg news-inner">
                <div class="padding clearfix">
                	<i class="icon-edit news-icon"></i>
                    <p class="meta">June <span>21</span></p>
                    <img alt="news" src="images/news/3.jpg">
                    <div class="spacing-40 clearfix"></div>
                    <h3 class="news-title">Lamb of God Launch Mysterious International Countdown.</h3>
                    <div class="news-line clearfix"></div>
                    <p class="news-desc">If Lamb of God are looking to get fans riled up and excited, then mission accomplished! Since April 23,
					Lamb of God have posted an Instagram photo teasing their seventh studio album, but this isn’t the only thing they’ve thrown at us.
					On May 4, a mysterious countdown began featuring a very familiar face.</p>
                    <a href="news3.html"  class="more">Read more <i class="icon-long-arrow-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.news-inner-->

        </div><!--/.row-->
    </div><!--/news-->
    
    
    
    <div id="contact" class="container">
    	<div class="row dark-bg">
        	<div class="span4  big-text">
                <div class="padding clearfix">
                	<div class="spacing-60 clearfix"></div>
                    <h2 class="title-page">Send us your <span>thought</span>.</h2>
                    <div class="spacing-100 clearfix"></div>
                    <div id="form-wrapper">
                                <div id="form-inner">
                                    <div id="ErrResults"><!-- retrive Error Here --></div>
                                    <div id="MainResult"><!-- retrive response Here --></div>
                                    <div id="MainContent">
                                        <form id="MyContactForm" name="MyContactForm" method="post">
                                            <p class="name"><span>Name:</span> 
                                            <input type="text" name="name" id="name" placeholder="Your Name ...">
                                            <label for="name" id="nameLb"><span class="error">*Name Field Required</span></label>
                                            </p>
                                            <p><span>Email:</span> 
                                            <input type="email" name="email" id="email" placeholder="Your Email ...">
                                            <label for="email" id="emailLb"><span class="error">*Email Field Required</span></label>
                                            </p>
                                            <p><span>Phone:</span> 
                                            <input type="text" name="phone" id="phone" placeholder="Your Telephone ...">
                                            <label for="phone" id="phoneLb"><span class="error">*Telephone Field Required</span></label>
                                            </p>
                                            <p class="textarea"><span>Message:</span>  
                                            <textarea name="message" id="message" placeholder="Your Message ..." rows="2"></textarea>
                                            <label for="message" id="messageLb"><span class="error">*Message Field Required</span></label>
                                            </p>
                                            <div class="clearfix"></div>
                                            <a href="#" class="contact-btn">Send Message</a>
                                        </form>
                                    </div><!--MainContent-->
                                </div><!--form-inner-->
                	</div><!--form-wrapper-->
                </div><!--/.padding-->
            </div><!--/.span4-->
            <div class="span8 white-bg">
                <div class="padding clearfix">
                    <h3 class="contact-title"><span>MUsic</span> Store <i class="icon-play-circle"></i></h3>
                    <div class="news-line clearfix"></div>
                    <p>Site for Selling Best Rock And Metal Music</p>
                    <div class="clearfix">
                        <div class="address">
                            <p><span class="strong"><i class="icon-map-marker"></i>  Address :</span> Tehran-Hemmat highway</p>
                            <p><span class="strong"><i class="icon-phone"></i>  Phone :</span> 123456789</p>
                            <p><span class="strong"><i class="icon-envelope-alt"></i>  Email :</span> johndoen@.gmail.com</p>
                        </div><!--/.address-->
                     
                    </div><!--/.clearfix-->
                    
                    <div class="spacing-40 clearfix"></div>
                    <div id="map_canvas"></div>
                    <div class="spacing-40 clearfix"></div>
                </div><!--/.padding-->
            </div><!--/.span8-->
            
        </div><!--/.dark-bg-->
    </div><!--/contact-->
    
    <div class="copyright container light-bg">
    	<div class="padding clearfix">

        </div><!--/.padding-->
    </div><!--/.copyright-->
    
    <div class="spacing-40 clearfix"></div>
    
<!-- Le javascript
            ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{URL::asset('js/jquery.js')}}"></script>
<!-- Preloader -->
<script type="text/javascript">
        //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $("#status").fadeOut(); // will first fade out the loading animation
                $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
            })
        //]]>
</script> 
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.bxslider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.nav.js') }}"></script>
{{--<script type="text/javascript" src="twitter/jquery.tweet.js"></script>--}}
<script type="text/javascript" src="{{URL::asset('js/jquery.fitvids.js')}}"></script>
<script src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::asset('js/ticker.js')}}"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.ui.map.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/map.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/contact.js')}}"></script>
</body>
</html>