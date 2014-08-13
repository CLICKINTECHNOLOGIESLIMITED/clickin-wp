<footer class="site-footer"> 
	<p>

		<?php if(get_option('clickIn_footerEmail')) { ?>
      <a href="mailto:<?php echo get_option('clickIn_footerEmail'); ?>" target="_blank"><?php echo get_option('clickIn_footerEmail'); ?></a>
    <?php } ?>

  </p>
</footer><!-- .site-footer -->
<?php wp_footer(); ?>
</body>
</html>