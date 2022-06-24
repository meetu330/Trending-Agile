<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trending-agile
 */

get_header();
$postID = $post->ID;
while ( have_posts() ) :
    the_post();
?>
<!--content start-->
    <section class="inner-content certificate-details-content">
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
                    
                    <?php
                    if(get_field("type",$postID)){
                        ?><div class="type"><span>Type: </span><a href="#"><?php echo get_field("type",$postID) ?></a></div><?php
                    }
                    if(get_field("level",$postID)){
                        ?><div class="level"><span>Level: </span><a href="#"><?php echo get_field("level",$postID) ?></a></div><?php
                    }
                    ?>
                    <div class="additional-details"><a href="#">Additional Details</a></div>
                </div>
                <div class="col-lg-9">
                    <div class="description">
                        <h1><?php echo get_the_title(); ?></h1>
                        <?php
                        if(get_field("issued_by",$postID)){
                            ?><div class="issued-by">Issued by <a href="#"><?php echo get_field("issued_by",$postID) ?></a></div><?php
                        }
                        $content = get_the_content($postID);
                        echo apply_filters( 'the_content', $content );
                        
                        if(get_field("skills",$postID)){
                            $tags = get_field("skills",$postID);
                            ?>
                            <div class="skills-btn-group">
                                <h4>Skills</h4>
                                <ul>
                                    <?php
                                    foreach($tags as $key=>$val){
                                        ?>
                                        <li><a href="#"><?php echo $val->name ?></a></li>    
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>    
                            <?php
                        }
                        
                        if(get_field("earning_criteria",$postID)){
                            ?>
                            <div class="earning-criteria">
                                <h4>Earning Criteria</h4>
                                <?php echo get_field("earning_criteria",$postID) ?>
                            </div>    
                            <?php
                        }
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
