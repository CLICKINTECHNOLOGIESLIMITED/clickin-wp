<?php include("send_email.php") ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
  
  <!-- content article start -->
  <article class="contentCntr">

      <div class="content stick" id="content1"> 
        
        <!-- mobile box start -->
        <section class="mobileBox">
          <figure> <img id="originalImage" src="images/screen1.jpg" alt="clickin"> <img id="revertImage" src="images/signup_mobile_img.png" alt="clickin"> </figure>
        </section>
        <!-- mobile box end --> 
        
        <!-- signup box start -->
        <section class="signupBox">
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
        </section>
        <!-- signup box end -->
        <div class="clear"></div>
      </div>
      <div class="content stick" id="content2"> 
        
        <!-- mobile box start -->
        <section class="mobileBox">
          <figure> <img src="images/screen2.png" alt="clickin"> </figure>
        </section>
        <!-- mobile box end --> 
        
        <!-- signup box start -->
        <section class="signup_blue_box">
          <h3>ADD, INVITE OR FIND A PARTNER <br>
            TO START CLICKIN’ WITH</h3>
          <form method="POST" action="">
            <div class="signupContainer1">
              <fieldset class="abs">
                <input type="text" placeholder="Enter email" name="email" />
                <input type="hidden" name="m" value="1" />
                <input class="submit" type="submit" value="sign up" />
              </fieldset>
            </div>
          </form>
        </section>
        <!-- signup box end --> 
      </div>
      <div class="content stick" id="content3"> 
        
        <!-- mobile box start -->
        <section class="mobileBox">
          <figure><img src="images/screen3.png" alt="clickin"> <img id="revertImage" src="images/signup_mobile_img.png" alt="clickin"></figure>
        </section>
        <!-- mobile box end --> 
        
        <!-- signup box start -->
        <section class="signup_blue_box">
          <h3>DRAG THE CLICKER TO GIVE OR<br>
            TAKE POINTS FROM ONE ANOTHER</h3>
          <form method="POST" action="">
            <div class="signupContainer1">
              <fieldset class="abs">
                <input type="text" placeholder="Enter email" name="email" />
                <input type="hidden" name="m" value="1" />
                <input class="submit" type="submit" value="sign up" />
              </fieldset>
            </div>
          </form>
        </section>
        <!-- signup box end --> 
      </div>
      <div class="content stick" id="content4"> 
        
        <!-- mobile box start -->
        <section class="mobileBox">
          <figure><img src="images/screen4.png" alt="clickin"> <img id="revertImage" src="images/signup_mobile_img.png" alt="clickin"></figure>
        </section>
        <!-- mobile box end --> 
        
        <!-- signup box start -->
        <section class="signup_blue_box">
          <h3>DRAG THE CLICKER TO GIVE OR<br>
            TAKE POINTS FROM ONE ANOTHER</h3>
          <form method="POST" action="">
            <div class="signupContainer1">
              <fieldset class="abs">
                <input type="text" placeholder="Enter email" name="email"/>
                <input type="hidden" name="m" value="1" />
                <input class="submit" type="submit" value="sign up" />
              </fieldset>
            </div>
          </form>
        </section>
        <!-- signup box end --> 
      </div>
      <div class="content stick" id="content5"> 
        
        <!-- mobile box start -->
        <section class="mobileBox">
          <figure><img src="images/screen5.png" alt="clickin"> <img id="revertImage" src="images/signup_mobile_img.png" alt="clickin"></figure>
        </section>
        <!-- mobile box end --> 
        
        <!-- signup box start -->
        <section class="signup_blue_box">
          <p>DRAG THE CLICKER TO GIVE OR<br>
            TAKE POINTS FROM ONE ANOTHER</p>
          <form method="POST" action="">
            <div class="signupContainer1">
              <fieldset class="abs">
                <input type="text" placeholder="Enter email" name="email"/>
                <input type="hidden" name="m" value="1" />
                <input class="submit" type="submit" value="sign up" />
              </fieldset>
            </div>
          </form>
        </section>
        <!-- signup box end --> 
      </div>
            <!--Start blueBg-->
      <div class="blueBg content" id="content6">
        <ul>
          <li> <img src="images/img1.png" alt=""/>
            <p>ADD MULTIPLE PARTNERS</p>
          </li>
          <li> <img src="images/img2.png" alt=""/>
            <p>CONTROL RELATIONSHIP VISIBILITY</p>
          </li>
          <li> <img src="images/img3.png" alt=""/>
            <p>HANDPICK YOUR FOLLOWERS</p>
          </li>
          <li> <img src="images/img4.png" alt=""/>
            <p>SEARCH AND DISCOVER CLICKERS</p>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
      <!--End blueBg-->
			<div class="yourScore content" id="content7"> <img src="images/your-score.png" alt=""/>
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
      <div id="bouncy"><a class="next" href="#"></a></div>
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
