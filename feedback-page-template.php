<?php
/*
 Template Name: Feedback Page Template
*/
?>
<?php get_header(); ?>


<?php include get_template_directory() . '/site-header.php'; ?>

<div class="container sub-page feedback-page">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="sub-page-header">
                <img src="../wp-content/themes/ProfitTimeGPS/img/icon-feedback.svg">
                <h1><?php echo get_the_title(); ?></h1>
                <h2>We want you to win with ProfitTime</h2>
                <p>Have a question? Have feedback? Want to make a suggestion about how we can improve this program? We want to hear from you! Use the form below to give us your thoughts.</p>
            </div>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
        <?php include get_template_directory() . '/site-footer.php'; ?>
    </div>
  </div>
</div>






<?php get_footer(); ?>