<?php include("send_email.php") ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
	<title>Clickin</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
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
<!-- mobile menu start -->
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
  <div class="mobile-icon">menu icon</div>
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
<!-- container start -->
<div class="wrapperBox"> 
  
  <!-- header start -->
  <header>
    <div class="center"> 
      
      <!-- logo start -->
      <div class="logo"> <a href="">Clickin</a> </div>
      <!-- logo end --> 
      
      <!-- nav start -->
      <nav class="hide">
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <!-- nav end --> 
      
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
  <!-- header end --> 
  
<div class="fixedMobile">
		<div class="fixedWrapper">
        <!-- signup box start -->
        <section class="signupBox">
        	<div class="signUpBoxWrap">
            <h1>Clickin</h1>
            <p>IS THE SIMPLEST AND FASTEST <br>
              WAY TO EXPRESS YOURSELF</p>
            <form method="POST" action="" class=""> 
              <div class="signupContainer">
                <fieldset id="abs">
                  <input type="text" placeholder="Enter email" name="email"/>
                  <input type="hidden" name="m" value="1" />
                  <input class="submit" type="submit" value="sign up" />
                </fieldset>
              </div>
              <span class="align"><a href="#" class="watchvideo">Watch Video</a></span>
              <div class="clear"></div>
            </form>
            </div><!-- .signUpBoxWrap -->
        </section>
        <!-- signup box end -->
				
        <div class="mobileBoxMobile">
        	<img src="images/mobile-screen.png">
        </div><!-- .mobileBoxMobile -->
        
        <!-- mobile box start -->
        <section class="mobileBox">
        	<div class="phoneFrame"><img src="images/mobile.png"></div>
          <div class="phoneScreens">
          	<div class="screenImage" id="screen1"><img id="originalImage" src="images/img-1.jpg" alt="clickin"></div>
          	<div class="screenImage" id="screen2"><img id="originalImage" src="images/img-2.jpg" alt="clickin"></div>
          	<div class="screenImage" id="screen3"><img id="originalImage" src="images/img-3.jpg" alt="clickin"></div>
          	<div class="screenImage" id="screen4"><img id="originalImage" src="images/img-4.jpg" alt="clickin"></div>
          	<div class="screenImage" id="screen5"><img id="originalImage" src="images/img-5.jpg" alt="clickin"></div>
          	<div class="screenImage" id="screen6"><img id="originalImage" src="images/img-6.jpg" alt="clickin"></div>
          </div><!-- .phoneScreens -->
        </section>
        <!-- mobile box end --> 
        


        <div class="clear"></div>
		</div><!-- fixedWrapper -->
</div><!--  -->
  
  <!-- content article start -->
  <article class="contentCntr lastPage" id="screen7">
      <!--Start blueBg-->
      <div class="blueBg content">
      	<div class="widthWrap">
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
                <p><img src="images/img3.png" alt=""/></p>
                <p>HANDPICK YOUR FOLLOWERS</p>
              </div><!-- .boxWrap -->
            </li>
            <li>
            	<div class="boxWrap">
                <p><img src="images/img4.png" alt=""/></p>
                <p>SEARCH AND DISCOVER CLICKERS</p>
              </div><!-- .boxWrap -->
            </li>
            <div class="clear"></div>
          </ul>
         </div><!-- .widthWrap -->
      </div>
      <!--End blueBg-->
			<div class="yourScore content">
      	<div class="widthWrap">
        	<div class="boxWrapWhite">
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
            </div>
          </div>
        </div><!-- .widthWrap -->
    </div>      
  </article>
  <!-- content article end --> 
 
  <!-- footer start -->
  <footer>
    <div class="center">
      <p>Clickin Technologies Ltd. 2014</p>
      <ul>
        <li><a href="#">Faqs</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of use</a></li>
      </ul>
    </div>
  </footer>
  <!-- footer end --> 
</div>
<!-- container end -->
</body>
</html>
