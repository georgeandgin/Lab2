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
</div>
<?php get_footer(); ?>