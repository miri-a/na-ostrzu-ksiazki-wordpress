<?php get_header(); ?>

<div class="write-item container">
  <div class="row">
    <div class="posts-item col-md-12 col-lg-9">
  
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'content', get_post_format() );

			endwhile; ?>
         
            <nav>
    	<div class="pager">

    		<?php previous_posts_link( 'Poprzednie ' ); ?>
    		<?php next_posts_link( ' Następne' ); ?>
    	</div>
    </nav>
         
         <?php endif;
			?>

   <?php get_footer(); ?>

</div>

<?php get_sidebar(); ?>

<?php wp_footer(); ?>
</body>
</html>