<?php /* Template Name: inner page */ 

get_header(); ?>
     

<!--Inner Banner Start-->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="inner-banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
    <div class="container">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<!--Inner Banner End-->

<!--content start-->

<section class="inner-content">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</section>

<!--content end-->


<?php get_footer(); ?>