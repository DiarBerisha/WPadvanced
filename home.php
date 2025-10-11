<?php get_header(); ?>

<main><h2>Digital School</h2>
    <?php if(have_posts()): while (have_posts()): the_post();?>
    <h2><?php the_title();?></h2>
    <p><?php the_content()?></p>
    <?php endwhile; endif; ?>


</main>
<?php get_footer(); ?>
