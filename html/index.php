<?php include("send_email.php") ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Clickin</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/idangerous.swiper.css" type="text/css" rel="stylesheet">
  
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/common.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/mixpanel.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/validations.js"></script>
	<?php if(@$_POST['m'] == 1){?>
	<script src="js/thankyou.js"></script>
	<?php unset($_POST['m']); } ?>
</head>
<body>

<div class="mobile-icon">menu icon</div>

<div class="mobile-navBox">
  <div class="mobilemenu">
    <ul>
      <li><a href="about.html">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="http://clickinkeepscoring.tumblr.com/" target="_blank" >Blog</a></li>
      <li><a href="https://www.facebook.com/pages/Clickin-Keep-Scoring/627229503987907" target="_blank" class="facebook">facebook</a></li>
      <li><a href="https://twitter.com/ClickinApp" target="_blank" class="twitter">twitter</a></li>
    </ul>
  </div>
</div>
<!-- mobile menu end --> 

<!-- popup start -->
<div class="videopopup">
  <div class="videobox">
    <iframe src="http://www.youtube.com/embed/XGSy3_Czz8k"> </iframe>
  </div>
  <div class="close">close</div>
</div>
<!-- popup end --> 

<div class="wrapperBox"> 
  
  <header>
    <div class="center"> 
      
      <div class="logo"><a href="index.php">Clickin</a></div>

      <nav class="hide">
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      
      <!-- sociable start -->
      <div class="sociableBox">
        <ul>
          <li><a href="http://clickinkeepscoring.tumblr.com/" target="_blank" >Blog</a></li>
          <li><a href="https://www.facebook.com/pages/Clickin-Keep-Scoring/627229503987907" target="_blank" class="facebook">facebook</a></li>
          <li class="gap"><a href="https://twitter.com/ClickinApp" target="_blank" class="twitter">twitter</a></li>
          <li id="disableEmail">
			<form method="POST" action="">  
				<input type="text" placeholder="Enter email" name="email" />
				<input type="hidden" name="m" value="1" />
				<input class="submit" type="submit" value="sign up" />
			</form>	
          </li>
        </ul>
      </div>
      <!-- sociable end --> 
      
    </div>
  </header>

  <article class="contentCntr">

      <div class="mobileFrame"> 
        <div class="widthWrapper">
        
          <section class="signupBox">
          	<div class="signupBoxWrap">
              <h1>Clickin</h1>
              <p>IS THE SIMPLEST AND FASTEST <br>
                WAY TO EXPRESS YOURSELF</p>
              <form method="POST" action=""> 
                <div class="signupContainer">
                  <fieldset id="abs">
                    <input type="text" placeholder="Enter email" name="email"/>
                    <input type="hidden" name="m" value="1" />
                    <input class="submit" type="submit" value="sign up" />
                  </fieldset>
                </div>
                <span class="align"><a href="#" class="watchvideo">Watch Video</a></span>
              </form>
              <div class="clear"></div>
            </div><!-- .signupBoxWrap -->
          </section><!-- .signupBox -->

          <section class="mobileBox">
            <div class="mobileSwiper">
            	<div class="swiper-container">
              	<div class="swiper-wrapper">
                	<div class="swiper-slide"><img src="images/img-1.jpg" alt="clickin"></div>
                	<div class="swiper-slide"><img src="images/img-2.jpg" alt="clickin"></div>
                	<div class="swiper-slide"><img src="images/img-3.jpg" alt="clickin"></div>
                	<div class="swiper-slide"><img src="images/img-4.jpg" alt="clickin"></div>
                	<div class="swiper-slide"><img src="images/img-5.jpg" alt="clickin"></div>
                	<div class="swiper-slide"><img src="images/img-6.jpg" alt="clickin"></div>
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
                <p><img src="images/img1.png" alt=""/></p>
                <p>ADD MULTIPLE PARTNERS</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img2.png" alt=""/></p>
                <p>CONTROL RELATIONSHIP VISIBILITY</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img3.png" alt=""/>
              	<p>HANDPICK YOUR FOLLOWERS</p>
            	</div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img4.png" alt=""/>
              	<p>SEARCH AND DISCOVER CLICKERS</p>
            	</div><!-- .boxWrap -->
            </li>
          </ul>
          <div class="clear"></div>
        </div><!-- .widthWrapper -->
      </div><!-- .blueBg -->

			<div class="yourScore">
        <div class="widthWrapper">
          <img src="images/your-score.png" alt=""/>
          <p>Be it a loyal lover, a casual fling or someone you just met Clickin' is for those who share a connection or want to.</p>
          <div class="yourScoreContainer">
            <form method="POST" action="">  
              <fieldset class="abs">
                <input type="text" placeholder="Enter email" name="email" class="email" />
                <input type="hidden" name="m" value="1" />
                <input class="submit" type="submit" value="sign up" />
              </fieldset>
            </form>
          </div><!-- yourScoreContainer - Form -->
        </div><!-- .widthWrapper -->
    </div><!-- .yourScore -->      
  </article>
 
  <footer>
    <div class="center">
      <p>Clickin Technologies Ltd. 2014 </p>
      <ul>
        <li><a href="#">Faqs</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of use</a></li>
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
