<?php get_header();
//Template name: Index
?>

<main>

    <?php $thumb = get_the_post_thumbnail_url(); ?>
    <div class="image-class" style="background-image: url('<?php echo $thumb;?>')">
        <div class="text">
            <h2>Time to move in Canada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloremque rerum, illum vero eos natus officiis ullam accusantium culpa, aut accusamus eius.</p>
            <a href="<?php echo get_permalink(12) ; ?>" class="button">Read more</a>
        </div>
    </div>

    <?php the_content(); ?>

</main>

<?php get_footer();
?>