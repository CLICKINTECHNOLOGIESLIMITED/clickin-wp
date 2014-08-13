<?php
	if((isset($_POST['email']) and $_POST['email'] != "")){
		$to = $_POST['email'];
        $subject = "Welcome to Clickin";
        ob_start();
		include("email.html"); /* contains the html. */
		$message = ob_get_contents(); /* holds all the html as string in $message */
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
        
		$from = $_POST['email'];
        
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "X-Priority: 1 (Higuest)\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";
        $headers .= "Importance: High\r\n";
		$headers .= "X-Mailer: PHP/ ".phpversion()."\r\n"; 	
        $headers = "From:" .$from ;
        // mail($to,$subject,$message,$headers);
	}
?>
