<?php get_header();
//Template name: About
?>

<main>

    <?php $thumb = get_the_post_thumbnail_url(); ?>
    <div class="image-class" style="background-image: url('<?php echo $thumb;?>')">
    </div>

    <?php the_content(); ?>

</main>

<?php get_footer();
?>