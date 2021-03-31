<?php get_header(); ?>
<div class="container">
<div class="conent">
<div class="posts">
<?php if (have_posts()) : while (have_posts()):the_post();?>
</div>
<h1> <?php the_title(); ?> </h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<?php endwhile; else: ?>
<p> <?php _e('sorry no posts matched your criteria'); ?> </p>
<?php endif; ?>
</div>

<?php 
   $the_query = new WP_Query( array(
     'post_type' => 'project',
      'posts_per_page' => 3,
      'post_status'=>'publish'
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php the_title(); ?>
    <?php the_excerpt(); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No Projects'); ?></p>
<?php endif; ?>


</div>
<?php get_footer(); ?>