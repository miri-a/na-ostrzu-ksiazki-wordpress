  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></p>

  <?php the_content(); ?>
  
  <p><b>Autorka: </b><i><?php the_author(); ?></i>
  <p><b>Kategorie: </b><?php the_category(', '); ?></p>
  <p><?php echo get_the_tag_list('<b>Tagi:</b> ',', ','');?></p>

  <p><a href="#"><?php comments_number( $zero, $one, $more ); ?></a></p>


