<?php 
	get_header(); 
?>

<div class="page-wrapper">
  <article id="post-<?php the_ID(); ?>" class="single-article">

		<?php if(have_posts()) : ?>
    <?php 	while(have_posts()) : the_post(); ?>

    <header class="single-post-header">
      <h2 class="category-title">News</h2>
      <p><?php echo get_the_date('d F, Y', '', '', FALSE); ?></p>
      <h1><?php the_title(); ?></h1>
    </header><!-- .single-post-header -->
    
		
		
		<?php if(get_post_meta(get_the_ID(),'videoCode',TRUE)) { ?>
    
    <div class="single-post-media">
      <div class="video-wrapper">
        <div class="video-container">
          <?php echo stripslashes(get_post_meta(get_the_ID(),'videoCode',TRUE)); ?> 
        </div><!-- .video-wrapper -->
      </div><!-- .video-container -->
    </div><!-- .single-post-media -->

    <?php } else { ?>
  
			<?php if(has_post_thumbnail()) { ?>

    <div class="single-post-media">
      
				<?php the_post_thumbnail(); ?>
    
    </div><!-- .single-post-media -->

	    <?php } ?>

    <?php } ?>
    
    <div class="single-post-desc">
    	
			<?php the_content(); ?>

    </div><!-- .single-post-desc -->

    <?php endwhile; ?>
    
    <?php else : ?>

      <p>Something went worng! Please visit this page after some time.</p>

    <?php endif; ?>

	</article><!-- .single-article -->
  
  <?php 
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>
  
  
</div><!-- .page-wrapper -->

<?php get_footer(); ?>