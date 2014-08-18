<?php include("send_email.php") ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Clickin | The simplest and fastest way to express yourself</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/idangerous.swiper.css" type="text/css" rel="stylesheet">
	<meta content="favicon.png" itemprop="image">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/validations.js"></script>
	<?php if(@$_POST['m'] == 1){ ?>
	<script src="js/thankyou.js"></script>
	<?php unset($_POST['m']); } ?>
</head>
<body>

<div class="mobile-icon">Menu</div>

<div class="mobile-navBox">
  <div class="mobilemenu">
    <ul>
      <li><a href="about.html" title="About Us">About</a></li>
      <li><a href="jobs.html" title="Jobs">Jobs</a></li>
      <li><a href="contact.html" title="Contact Us">Contact</a></li>
      <li><a href="http://clickinkeepscoring.tumblr.com/" target="_blank" title="Blog">Blog</a></li>
      <li><a href="https://twitter.com/ClickinApp" title="Twitter" target="_blank" class="facebook">Twitter</a></li>
      <li><a href="https://www.facebook.com/pages/Clickin-Keep-Scoring/627229503987907" target="_blank" class="twitter" title="Facebook">Facebook</a></li>
    </ul>
  </div>
</div>

<div class="videopopup">
  <div class="videobox">
	  <div class="close">close</div>
    <iframe src="http://www.youtube.com/embed/K3RRCrYScEE"> </iframe>
  </div>
</div>

<div class="wrapperBox"> 
  
  <header>
    <div class="center"> 
      <div class="logo"><a href="index.php" title="Clickin">Clickin</a></div>
      <nav class="hide">
        <ul>
          <li><a href="about.html" title="About Us">About</a></li>
           <li><a href="jobs.html" title="Jobs">Jobs</a></li>
          <li><a href="contact.html" title="Contact Us">Contact</a></li>
        </ul>
      </nav>
      
      <div class="sociableBox">
        <ul>
          <li><a href="http://clickinkeepscoring.tumblr.com/" target="_blank" title="Blog">Blog</a></li>
          <li><a href="https://twitter.com/ClickinApp" target="_blank" class="facebook" title="Twitter">Twitter</a></li>
          <li class="gap"><a href="https://www.facebook.com/pages/Clickin-Keep-Scoring/627229503987907" target="_blank" class="twitter" title="Facebook">Facebook</a></li>
        </ul>
      </div>
    </div>
  </header>

  <article class="contentCntr">

      <div class="mobileFrame"> 
        <div class="widthWrapper">
          <section class="signupBox">
          	<div class="signupBoxWrap">
              <h1>Clickin</h1>
              <p>TURN ANY RELATIONSHIP INTO<br>
                A GAME OF NUMBERS</p>
                <form method="POST" action=""> 
                  <div class="signupContainer">
                    <!--fieldset id="abs">
                      <input type="text" placeholder="Enter email" name="email"/>
                      <input type="hidden" name="m" value="1" />
                      <input class="submit" type="submit" value="sign up" />
                    </fieldset-->
                  </div>
                  <span class="align"><a href="#" class="watchvideo" title="watch Video">Watch Video</a></span>
                </form>

              <div class="clear"></div>
              <div class="availStore">
                               <a href="https://itunes.apple.com/us/app/clickin-keep-scoring/id901882470" target="_blank"><img src="images/appStore.png" alt="apple store"></a>
                               <a href="#"><img src="images/googleStoreComing.png" alt="google store"></a>
                              </div>
            </div><!-- .signupBoxWrap -->
          </section><!-- .signupBox -->

          <section class="mobileBox">
            <div class="mobileSwiper">
            	<div class="swiper-container">
              	<div class="swiper-wrapper">
                	<div class="swiper-slide"><img src="images/img-1.jpg" alt="Clickin | The simple and fastest way to express yourself"></div>
                	<div class="swiper-slide"><img src="images/img-2.jpg" alt="Clickin | Add, invite or find partners to start Clickin' with"></div>
                	<div class="swiper-slide"><img src="images/img-3.jpg" alt="Clickin | Drag the clicker to give or take points from one another"></div>
                	<div class="swiper-slide"><img src="images/img-4.jpg" alt="Clickin | Trade in points to get what you want"></div>
                	<div class="swiper-slide"><img src="images/img-5.jpg" alt="Clickin | Privately share with your followers"></div>
                	<div class="swiper-slide"><img src="images/img-6.jpg" alt="Clickin | Signup and login"></div>
                </div><!-- .swiper-wrapper -->
              </div><!-- .swiper-container -->
            	
            </div><!-- .mobileSwiper -->
          </section><!-- .mobileBox -->

        	<div class="clear"></div>
        </div><!-- .widthWrapper -->
      </div><!-- .mobileFrame -->
      
      <div class="blueBg">
        <div class="widthWrapper">
          <ul>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img1.png" alt="Add Multiple Partners"/></p>
                <p>ADD MULTIPLE PARTNERS</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img2.png" alt="Control Relationship Visibility"/></p>
                <p>CONTROL RELATIONSHIP VISIBILITY</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img3.png" alt="Handpick Your Flowers"/>
              	<p>HANDPICK YOUR FOLLOWERS</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img4.png" alt="Search and Discover Clickers"/>
              	<p>SEARCH AND DISCOVER CLICKERS</p>
            	</div><!-- .boxWrap -->
            </li>
          </ul>
          <div class="clear"></div>
        </div><!-- .widthWrapper -->
      </div><!-- .blueBg -->

			<div class="yourScore">
        <div class="widthWrapper">
          <img src="images/your-score.png" alt="Your Score"/>
          <p>Be it a loyal lover, a casual fling or someone you just met Clickin' is for those who share a connection or want to.</p>

        </div><!-- .widthWrapper -->
    </div><!-- .yourScore -->      
  </article>
 
  <footer>
    <div class="center">
      <p>Clickin Technologies Ltd. 2014 </p>
      <ul>
        <li><a href="privacy-policy.html">Privacy Policy</a></li>
        <li><a href="terms-of-use.html">Terms of use</a></li>
      </ul>
    </div>
  </footer>

</div><!-- .wrapperBox -->


  <script src="js/idangerous.swiper-2.1.min.js"></script>
  <script>
		var mySwiper = new Swiper('.swiper-container',{
			loop:true,
			autoplay:4000,
			speed:500,
			grabCursor: true,
			paginationClickable: true
		})
  </script>
  
</body>
</html>