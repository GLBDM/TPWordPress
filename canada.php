<?php get_header();
//Template name: Canada
?>

<main>

    <?php $thumb = get_the_post_thumbnail_url(); ?>
    <div class="image-class" style="background-image: url('<?php echo $thumb;?>')">
    </div>


    <div class="region1 display">
        <p><b><?php the_field('region1'); ?></b></p>
        <p>∟<?php the_field('province_territoire1'); ?></p>
        <p>∟∟<?php the_field('capitale1'); ?></p>
    </div>

    <div class="region2 display">
        <p><b><?php the_field('region2'); ?></b></p>
        <p>∟<?php the_field('province_territoire2'); ?></p>
        <p>∟∟<?php the_field('capitale2'); ?></p>
    </div>

    <div class="region3 display">
        <p><b><?php the_field('region3'); ?></b></p>
        <p>∟<?php the_field('province_territoire3'); ?></p>
        <p>∟∟<?php the_field('capitale3'); ?></p>
    </div>

    <div class="region4 display">
        <p><b><?php the_field('region4'); ?></b></p>
        <p>∟<?php the_field('province_territoire4'); ?></p>
        <p>∟∟<?php the_field('capitale4'); ?></p>
    </div>
    
    <div class="region5 display">
        <p><b><?php the_field('region5'); ?></b></p>
        <p>∟<?php the_field('province_territoire5'); ?></p>
        <p>∟∟<?php the_field('capitale5'); ?></p>
    </div>
    

</main>

<?php get_footer();
?>