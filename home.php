<?php
get_header();

if ( have_posts()) {
    while (have_posts() ) {
        the_post();

    ?>
    <article>
        <header><?php the_title(); ?></header>
        <div class="content">
            <?php the_content(); ?>
        <div>
        <a href="<?php echo get_the_permalink() ?>">Lien</a>
    </article>
    <?php
    }
} else {
 ?>
 <p><?php _e('Y\'a pas de posts'); ?> </p>
 <?php
}




get_footer();
?>
