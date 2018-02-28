<?php
/**
 * Single Image capture template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables
 $image = get_field('work_featured_image');
 $phone_images = get_field('mobile_images');

?>

<?php if($image) : ?>
  <section class="container">
    <div class="row single-page__image">
      <div class="col-8">
        <figure class="showcase" data-aos="fade-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop.svg" />
          <div class="screenshot">
            <div class="screenshot__wrap">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
            </div>
          </div>
        </figure>
      </div>
      <div class="col-3">
        <figure class="showcase" data-aos="fade-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iPhone.svg" />
          <div class="iphone-slider">
            <?php if( $phone_images ): ?>
              <?php foreach( $phone_images as $image ): ?>
                <div class="gallery-img">
                  <img src="<?php echo $image['sizes']['large'];; ?>">
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </figure>
      </div>
      <div class="col-1 sm-hide"></div>

      <img class="red-icon" id="icon6" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
      <img class="red-icon" id="icon7" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
    </div>
  </section>
<?php endif; ?>
