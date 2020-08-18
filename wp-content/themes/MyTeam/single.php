<?php get_header()?>

<div class="container">
        <div class="">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <h2> <?php the_title(); ?> </h2>
            <?php the_content(); ?>
          <?php endwhile; ?>
          <?php comments_template(); ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

</div>

<?php get_footer()?>