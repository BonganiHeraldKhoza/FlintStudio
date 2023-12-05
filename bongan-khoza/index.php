<?php get_header(); ?>

<div class="row">
    <div class="col-lg-8">
        <!-- Main content loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        <?php endwhile; endif; ?>
    </div>
    <div class="col-lg-4">
        <!-- Sidebar or additional content -->
    </div>
</div>

<?php get_footer(); ?>
