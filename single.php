<?php get_header(); ?>

<div class="write-item container">
  <div class="row">
    <div class="posts-item col-md-12 col-lg-9">
  
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

<?php comments_template(); ?>

</div>

<?php get_sidebar(); ?>

</body>
</html>

<?php wp_footer(); ?>