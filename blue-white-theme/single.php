<?php get_header(); ?>
<div class="content-area">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
