<?php
/*
 Template Name: Search Page Template
*/
?>
<?php get_header(); ?>


<?php include get_template_directory() . '/site-header.php'; ?>

<div class="container sub-page search-page">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
        
            <div class="sub-page-header">
                <img src="../wp-content/themes/ProfitTimeGPS/img/icon-search-results.svg">
                <h1>Search Results</h1>
            </div>
            <div class="search-result-count default-max-width">
               
                <?php if ( have_posts() ) { ?>
                    <ul class="search-results">
                    <?php while ( have_posts() ) { the_post();  ?> 
                        <li>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('video_description'); ?></p>
                            <a href="<?php the_permalink(); ?>">Watch the video</a>
                        </li>
                <?php } // end while ?>
                    </ul>
                <?php } else { ?>
                    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                    <div class="alert alert-info">
                      <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
                <?php } ?>

                




               
            </div><!-- .search-result-count -->
        
        <?php include get_template_directory() . '/site-footer.php'; ?>
    </div>
  </div>
</div>






<?php get_footer(); ?>