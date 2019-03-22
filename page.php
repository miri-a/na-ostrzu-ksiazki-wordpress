<?php /* Template Name: CustomPageT1 */ ?>
 
<?php get_header(); ?>
 
<div class="write-item container">
  <div class="row">
    <div class="posts-item col-md-12 col-lg-9">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_title(); ?></h1>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer(); 
?>

</div>

<?php get_sidebar(); ?>

<?php wp_footer(); ?>

</body>
</html>