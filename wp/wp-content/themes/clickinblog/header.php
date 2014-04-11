<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]--><head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
 
<meta name="msapplication-TileImage" content="<?php bloginfo('url')?>/favicon512x512.png">
<meta name="msapplication-TileColor" content="#fff">
<link rel="shortcut icon" href="<?php bloginfo('url')?>/favicon.ico" type="image/x-icon"/>


<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php 
	if(get_option('clickIn_no_of_posts')) { 
		$numOFPosts = get_option('clickIn_no_of_posts'); 
	} else { 
		$numOFPosts = 4; 
	} 
?>

<script type="text/javascript">
var templateDir = "<?php bloginfo('template_directory'); ?>";
var numOfPosts = "<?php echo $numOFPosts; ?>";
</script>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header clearfix">
  <nav class="main-menu clearfix">
		<?php
      if (has_nav_menu('primary')) {
        wp_nav_menu( array( 'theme_location'  => 'primary') );
      } else {
        echo "Please add a Menu from the 'admin panel > Appearance > Menus' and add it to 'Primary' location.";
      }
    ?>
  </nav><!-- .main-menu -->
  
  <div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="234" height="113" alt="CLICKIN' Blog"></a></div><!-- .site-logo -->
  
  <div class="social-links clearfix">
    <ul>

	    <?php if(get_option('clickIn_pintUrl')) { ?>
	      <li><a href="<?php echo get_option('clickIn_pintUrl'); ?>" title="Pinterest" class="pinterest" target="_blank"></a></li>
      <?php } ?>

	    <?php if(get_option('clickIn_fbUrl')) { ?>
	      <li><a href="<?php echo get_option('clickIn_fbUrl'); ?>" title="Facebook" class="facebook" target="_blank"></a></li>
      <?php } ?>

	    <?php if(get_option('clickIn_twUrl')) { ?>
	      <li><a href="<?php echo get_option('clickIn_twUrl'); ?>" title="Twitter" class="twitter" target="_blank"></a></li>
      <?php } ?>

    </ul>
  </div><!-- .social-links --> 
  
</header><!-- .site-header -->
