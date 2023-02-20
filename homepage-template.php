<?php
/*
 Template Name: Homepage Template
*/
?>
<?php get_header(); ?>
<style type="text/css">
html {
    margin: 0;
    padding: 0;
    min-height: 100%;
    height: auto;
}
body {
    margin: 0;
    padding: 0;
    min-height: 100%;
    height: 100%;
}
@media screen and (min-height: 900px) {
    body {
        margin: 0;
        padding: 0;
        min-height: 100%;
        height: 100vh;
    }
}
@media screen and (min-width: 1200px) {
    html {
        min-height: 100%;
        height: 100%;
    }
    body {
        min-height: 100%;
        height: 100%;
    }
}

</style>
<div class="wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col logo-container">
                <span>winning with</span>
                <img src="../wp-content/themes/ProfitTimeGPS/img/vAuto-ProfitTimeGPS-rgb.svg">
                <p><?php the_field('intro_text'); ?></p>
            </div>
        </div>
        <div class="row intro">
            <div class="col-lg-5">
                <img src="../wp-content/themes/ProfitTimeGPS/img/icon-start.svg">
                <h1><?php the_field('left_column_title'); ?></h1>
                <p><?php the_field('left_column_text'); ?></p>
                <a class="btn btn-primary" href="<?php the_field('left_column_button_link'); ?>" role="button">WATCH TUTORIALS</a>
            </div>
            <div class="col">
              <img src="../wp-content/themes/ProfitTimeGPS/img/dial-divider-vert.svg" class="d-none d-lg-block dials-desktop">
              <img src="../wp-content/themes/ProfitTimeGPS/img/dial-divider-horz.svg" class="d-lg-none dials-mobile">
            </div>
            <div class="col-lg-5">
                <img src="../wp-content/themes/ProfitTimeGPS/img/icon-flag.svg">
                <h1><?php the_field('right_column_title'); ?></h1>
                <p><?php the_field('right_column_text'); ?></p>
                <a class="btn btn-primary" href="<?php the_field('right_column_button_link'); ?>" role="button">WATCH TUTORIALS</a>
            </div>
        </div>
    </div>
    <?php include get_template_directory() . '/site-footer.php'; ?>
</div>





<?php get_footer(); ?>