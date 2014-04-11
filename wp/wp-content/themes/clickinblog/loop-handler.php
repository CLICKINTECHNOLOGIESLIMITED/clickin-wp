<?php
// Our include  
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');  

$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;  
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;

?>

<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => $numPosts,  
			'paged'          => $page,
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        
    <article id="post-<?php the_ID(); ?>" class="home-list">
      <div class="article-wrap">
        <div class="article-header">
          <h3>News</h3>
          <span class="comments-count"><a href="<?php the_permalink(); ?>#comments" title="Read Comments"><?php $comments_count = wp_count_comments(get_the_ID()); echo $comments_count->total_comments; ?> Comments</a></span>
          <span class="timeline-arrow"></span>
          <span class="timeline-circle"></span>
        </div><!-- .article-header -->
        
        <div class="article-content">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          
          <?php if(has_post_thumbnail()) { ?>
          <div class="article-media"><?php the_post_thumbnail(); ?></div><!-- .article-media -->
          <?php } ?>
          
          <div class="article-desc">
          	
						<?php the_excerpt(); ?>
            
          </div><!-- article-desc -->
          
          <div class="article-meta clearfix">
            <div class="published-date"><?php echo get_the_date('d F, Y', '', '', FALSE); ?></div><!-- .published-date -->
            
            <div class="social-share">
              <ul>              
                <li><a href="#" class="pinterest" title="Share on Pinterest"></a></li>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="facebook" title="Share on Facebook" onclick="return popitup('https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>)"></a></li>
                <li><a href="#" class="twitter" title="Share on Twitter"></a></li>
              </ul>
            </div><!-- .social-share --> 
          </div><!-- .article-meta --> 
        </div><!-- .article-content --> 
      </div><!-- .article-wrap --> 
    </article><!-- .home-list -->

			<?php
			endwhile;
		}
		wp_reset_postdata();
	?>
