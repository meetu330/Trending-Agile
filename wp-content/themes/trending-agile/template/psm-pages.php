<?php
/* Template Name: PSM detail */ 

get_header();
$postID = $post->ID;
while ( have_posts() ) :
    the_post();
?>
<!--content start-->
    <section class="inner-content certificate-details-content psm-details-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="big-image">
                    <?php
                    if ( has_post_thumbnail( $post->ID ) ) {
                        echo get_the_post_thumbnail( $post->ID, 'full' );
                    }else{
                        ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cert_mark_SP_badge.png" alt="">
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="description">
                        <h1><?php echo get_the_title(); ?></h1>
                        <?php
                        $content = get_the_content($postID);
                        echo apply_filters( 'the_content', $content );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--content end-->
    <?php
    endwhile;
    ?>
    <?php get_footer(); ?>
