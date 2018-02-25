<?php
/**
 * Single Features template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $ft1 = get_field('work_feature_1');
 $ft2 = get_field('work_feature_2');

?>

<?php if($image) : ?>
  <section class="container">
    <div class="row single-page__features">
      <div class="col-10 col-centered">

      </div>

      <img class="red-icon" id="icon8" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
      <img class="red-icon" id="icon9" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
    </div>
  </section>
<?php endif; ?>
