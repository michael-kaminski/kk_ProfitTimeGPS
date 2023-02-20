<?php
/*
 Template Name: Product Tutorials Template
*/
?>
<?php get_header(); ?>


<?php include get_template_directory() . '/site-header.php'; ?>

<div class="container-fluid">
  <div class="row page-content">
    <div id="menu-container">
        <div class="lead-copy">
            <span>Have you watched the Variable Management Tutorials?</span>
            <?php wp_nav_menu( array( 'theme_location' => 'cta-menu'   ) ); ?>
        </div>
        <div class="menu-wrapper">
            <table class="menu-header">
                <tbody>
                    <tr>
                        <td class="menu-header-cell-1 text-start"><h2>Tutorial tracks</h2></td>
                        <td><div class="line"></div></td>
                        <td class="menu-header-cell-3 text-end"><a class="hide-menu">< hide menu</a></td>
                    </tr>
                </tbody>
            </table>
            <?php
                $args = array(
                    'tag_slug__and' => array( 'level-1', 'product-tutorials')
                );
                $count = 0;
                $first_item_only = true;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-1" role="button" aria-expanded="true" aria-controls="collapselvl-1"><span class="arrow"></span>Level One</a>
                    <div class="collapse show" id="collapselvl-1">
                        <ul class="video-list">
                    <?php while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; ?>
                            <li class="<?php if ($first_item_only){$first_item_only = false; echo 'active';} ?>">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-2', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-2" role="button" aria-expanded="fasle" aria-controls="collapselvl-2"><span class="arrow"></span>Level Two</a>
                    <div class="collapse" id="collapselvl-2">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-3', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-3" role="button" aria-expanded="fasle" aria-controls="collapselvl-3"><span class="arrow"></span>Level Three</a>
                    <div class="collapse" id="collapselvl-3">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-4', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-4" role="button" aria-expanded="fasle" aria-controls="collapselvl-4"><span class="arrow"></span>Level Four</a>
                    <div class="collapse" id="collapselvl-4">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-5', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-5" role="button" aria-expanded="fasle" aria-controls="collapselvl-5"><span class="arrow"></span>Level Five</a>
                    <div class="collapse" id="collapselvl-5">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-6', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-6" role="button" aria-expanded="fasle" aria-controls="collapselvl-6"><span class="arrow"></span>Level Six</a>
                    <div class="collapse" id="collapselvl-6">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-7', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-7" role="button" aria-expanded="fasle" aria-controls="collapselvl-7"><span class="arrow"></span>Level Seven</a>
                    <div class="collapse" id="collapselvl-7">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-8', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-8" role="button" aria-expanded="fasle" aria-controls="collapselvl-8"><span class="arrow"></span>Level Eight</a>
                    <div class="collapse" id="collapselvl-8">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-9', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-9" role="button" aria-expanded="fasle" aria-controls="collapselvl-9"><span class="arrow"></span>Level Nine</a>
                    <div class="collapse" id="collapselvl-9">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php
                $args = array(
                    'tag_slug__and' => array( 'level-10', 'product-tutorials')
                );
                $count = 0;
                $loop = new WP_Query( $args );      
                if ( $loop->have_posts() ) : ?>
                    <a class="level-heading" data-bs-toggle="collapse" href="#collapselvl-10" role="button" aria-expanded="fasle" aria-controls="collapselvl-10"><span class="arrow"></span>Level Ten</a>
                    <div class="collapse" id="collapselvl-10">
                        <ul class="video-list">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post();  $count++; $index = $wp_query->current_post + 1; 
                            ?>
                            <li class="">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Go to <?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td class="video-number-cell">
                                                    <div><?php echo $count; ?></div>
                                                </td>
                                                <td class="video-title-cell">
                                                    <div><?php the_title(); ?></div>
                                                </td>
                                                <td class="video-runtime-cell">
                                                    <div><?php the_field('video_runtime'); ?></div>
                                                </td>
                                                <td class="video-watched-cell">
                                                    <div class="" data-postid="<?php echo the_ID();?>"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </li>
                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            
        </div>
    </div>
    <div class="col" id="content-container">
        <a class="show-menu" style="display: none;">
            <span>
                <img src="../wp-content/themes/ProfitTimeGPS/img/icon-arrow-orange.png"> show menu
            </span>
        </a>
        <div class="blue-box">
            <div class="content-wrapper">
                <div id="video-container">
                    <?php
                    $args = array(
                        'tag_slug__and' => array( 'level-1', 'product-tutorials'),
                        'posts_per_page' =>  1
                    );
                    $loop = new WP_Query( $args );      
                    if ( $loop->have_posts() ) : ?>
                    <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php the_field('video_embed'); ?>
                </div>
                <div class="lds-ellipsis" id="load"><div></div><div></div><div></div><div></div></div>
                <table class="align-middle" width="100%">
                    <tbody>
                        <tr>
                            <td class="video-title-cell" width="90%"><h1><?php echo get_the_title(); ?></h1></td>
                            <td class="video-watched-cell">
                                <div class="" id="active-watched" data-postid="<?php echo get_the_ID();?>"></div>
                            </td>
                            <td class="video-watched-text"><span>WATCHED</span></td>
                        </tr>
                    </tbody>
                </table>
                
                <p><?php the_field('video_description'); ?></p>
                <div class="visually-hidden"><?php the_field('transcript'); ?></div>
                <hr/>
                <h2>Rate this tutorial</h2>
                <?php gravity_form( 1, false, false, false, $field_values = null, $ajax = true, $echo = true ); ?>
            </div>
        </div>
        <div id="upnext-container" class="blue-box text-center">
            <h2 class="">UP NEXT...</h2>
          <?php 
            $next_post = get_adjacent_post(true, '', true);
            if(!empty($next_post)) {
            echo '<h3 class="">' . $next_post->post_title . '</h3>'; ?>

            <p><?php the_field('video_description'); ?></p>

            <?php
            echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '" class="btn btn-primary">WATCH NEXT VIDEO</a>'; }
            ?>
        </div>
        <?php endwhile; ?>
                        
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php include get_template_directory() . '/site-footer.php'; ?> 
    </div>
  </div>
</div>






<?php get_footer(); ?>