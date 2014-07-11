<?php
	if((isset($_POST['email']) and $_POST['email'] != "") or (isset($_POST['email_top']) and $_POST['email_top'] != "") ){
		if(isset($_POST['email'])){
			$to = $_POST['email'];
		}
		if(isset($_POST['email_top'])){
			$to = $_POST['email_top'];
		}
		// die($to); 	
        $subject = "Welcome to Clickin";
        ob_start();
		include("email.html"); /* contains the html. */
		$message = ob_get_contents(); /* holds all the html as string in $html */
		ob_end_clean();
		$message = html_entity_decode($message);
        $from = "Team Clickin < nikhil@clickinapp.com >";
        
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers .= "X-Priority: 1 (Higuest)\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";
        $headers .= "Importance: High\r\n";
		$headers .= "X-Mailer: PHP/ ".phpversion()."\r\n"; 	
        $headers .= "From:" . $from;
        mail($to,$subject,$message,$headers);
        
        $to = "nikhil@clickinapp.com";
        $subject = "Registration to Clickin";
        
        $message = "Hi,\r\nI would like to register with Clickin.";
        
        if(isset($_POST['email'])){
			$from = $_POST['email'];
		}
		if(isset($_POST['email_top'])){
			$from = $_POST['email_top'];
		}
		// die($from);
        
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "X-Priority: 1 (Higuest)\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";
        $headers .= "Importance: High\r\n";
		$headers .= "X-Mailer: PHP/ ".phpversion()."\r\n"; 	
        $headers = "From:" .$from ;
        mail($to,$subject,$message,$headers);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Clickin</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/validations.js"></script>
<?php if(@$_POST['m'] == 1){?>
	<script src="js/thankyou.js"></script>
<?php unset($_POST['m']);
		} ?>
</head>

<body>
<!-- container start -->
<div class="wrapperBox">

	<!-- header start -->
    <header>
    	<div class="center">
    
            <!-- logo start -->
            <div class="logo">
                <a href="">Clickin</a>
            </div>
            <!-- logo end -->
            
            <!-- nav start -->
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
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
						<li>
							<form method="post" action="" onsubmit="return validateTop();">
								<input type="text" placeholder="Enter email" name="email_top" id="email_top" />
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
    
	    <div class="center">
	    
	    <!-- signup box start -->
	    <section class="signupBox">
			
			<h1>Clickin</h1>
			<p>IS THE SIMPLEST AND FASTEST <br> WAY TO EXPRESS YOURSELF</p>
			<form method="post" action="" onsubmit="return validate();">
			  <div class="signupContainer">	
				<fieldset id="abs">
					<input type="text" placeholder="Enter email" name="email" id="email" />
					<input type="hidden" name="m" value="1" />
                    <input class="submit" type="submit" value="sign up"/>
				</fieldset>
			  </div>	
				<a href="https://www.youtube.com/watch?v=K3RRCrYScEE" target="_blank" class="watchvideo">Watch Video</a>
			</form>
			       
	    </section>
	    <!-- signup box end -->
	    
	    <!-- mobile box start -->
	    <section class="mobileBox">
			<figure>
				<img id="originalImage" src="images/screen1.jpg" alt="clickin">
				<img id="revertImage" src="images/signup_mobile_img.png" alt="clickin">
		    </figure>
	    </section>
	    <!-- mobile box end -->
	    
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
