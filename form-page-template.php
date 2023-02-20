<?php
/*
 Template Name: Form Page Template
*/
?>
<?php get_header(); ?>


<?php include get_template_directory() . '/site-header.php'; ?>

<div class="container sub-page feedback-page">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="sub-page-header">
                <h2 style="padding: 20px 20px 0;"><?php echo get_the_title(); ?></h2>
            </div>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
        <?php include get_template_directory() . '/site-footer.php'; ?>
    </div>
  </div>
</div>



<script type="text/javascript">
  // don't forget to add a style for:
  // `input[type="submit"].disabled, input[type="submit"].button-disabled, input[type="submit"]:disabled`
  // jQuery(function ($) {
  //   $('form[id^="gform_"]').on('change', function (e) {
  //     var $reqd = $(this).find('.gfield_contains_required.gfield_visibility_visible').filter(function (i, c) {
  //       return []
  //         .concat($(c).find('input[type="text"], textarea').filter(function (i, fl) { return $(fl).val().length == 0; }).get())
  //         .concat($(c).find('input[type="checkbox"]').not(':checked').get())
  //         .length;
  //     });
  //     if ($reqd.length) {
  //       $(this).find('input[type="submit"]').addClass('disabled button-disabled').attr('disabled', 'disabled');
  //     } else {
  //       $(this).find('input[type="submit"]').removeClass('disabled button-disabled').removeAttr('disabled');
  //     }
  //   }).trigger('change');
  // });
</script>


<?php get_footer(); ?>