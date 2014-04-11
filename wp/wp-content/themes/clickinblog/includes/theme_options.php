<?php

$themename = "Theme";
$shortname = "clickIn";

$options = array (

	array( "name" => $themename." Options",
		"type" => "title"),

	array( "name" => "General Settings",
		"type" => "section"),

	array( "type" => "open"),
	
	array( "name" => "Number of post to show on load page (Default is 4)",
		"desc" => "Enter a number",
		"id" => $shortname."_no_of_posts",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Pinterest Page Url",
		"desc" => "http://www.pinterest.com/username",
		"id" => $shortname."_pintUrl",
		"type" => "text",
		"std" => ""),

	array( "name" => "Facebook Page Url",
		"desc" => "http://www.facebook.com/pageName",
		"id" => $shortname."_fbUrl",
		"type" => "text",
		"std" => ""),

	array( "name" => "Twitter Page Url",
		"desc" => "http://www.twitter.com/profile",
		"id" => $shortname."_twUrl",
		"type" => "text",
		"std" => ""),

	array( "name" => "Footer contact Email",
		"desc" => "Ex: CONTACT@CLICKINAPP.COM",
		"id" => $shortname."_footerEmail",
		"type" => "text",
		"std" => ""),
	

	array("type" => "block_sap"),


	array( "type" => "close"),
	
);


function mytheme_add_admin() {
	global $themename, $shortname, $options;
	 
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
			update_option( $value['id'], $_REQUEST[ $value['id'] ] );
		}
	 
		foreach ($options as $value) {
			if( isset( $_REQUEST[ $value['id'] ] ) ) { 
				update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 		
			} else { 
				delete_option( $value['id'] ); 
			} 
		}
		
		header("Location: admin.php?page=theme_options.php&saved=true"); 
	 
	}
	}
 
	$wptuts_options_page = add_menu_page($themename, 'Theme Options', 'administrator', basename(__FILE__), 'mytheme_admin');
	add_action( 'admin_print_scripts-' . $wptuts_options_page, 'wptuts_print_scripts' );

}

function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/includes/admin.css", false, "1.0", "all");
}

function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
$home_block = 1; 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>

<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
<div class="rm_opts">
  <form method="post">
    <?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
	break;
 
case "close":
  echo "</div></div><br />";
	break;
 
case "title":
	echo "<p>Please configure the options below.</p>";
	break;
	
case "clearfix";
	echo "<div class='clearfix'></div>";
	break;
	
case "block_sap";
	echo "<div class='block_sap'></div>";
	break;
	
case "block_heading";
	echo "<h4 class='block_heading'>" . $value['name'] ."</h4>";
	break;
	
case "home_block":
	?>
    <div class="admin_home_block">
    <?php
	break;
	
case "home_block_close";
	echo "</div>";
	break;
	
case "footer_icon";
	?>
    <div class='upload rm_input rm_text'>
      <label><?php echo $value['name']; ?></label>
      <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" />
      <input type='button' class='button button-upload' value='Upload an image'/>
      </br>
      <img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } ?>" class='preview-upload' /> </div>
    <?php
	break;

	
case 'text':
?>
    <div class="rm_input rm_text">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
      <input placeholder="<?php echo $value['desc']; ?>" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
    </div>
    <?php
break;
 
case 'textarea':
?>
    <div class="rm_input rm_textarea">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
      <textarea placeholder="<?php echo $value['desc']; ?>" name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>
</textarea>
    </div>
    <?php
break;
 
case "section":
	$i++;
	?>
    <div class="rm_section">
    <div class="rm_title">
      <h3><?php echo $value['name']; ?></h3>
      <span class="submit">
      <input name="save<?php echo $i; ?>" type="submit" value="Save changes" class="button button-primary button-large" />
      </span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <?php 
		break;
}
}
?>
    <input type="hidden" name="action" value="save" />
  </form>
</div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');

function wptuts_print_scripts() {
    wp_enqueue_style( 'thickbox' ); // Stylesheet used by Thickbox
    wp_enqueue_script( 'thickbox' );
    wp_enqueue_script( 'media-upload' );
}

?>
