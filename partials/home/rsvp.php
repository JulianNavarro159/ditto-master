<?php
/**
 * Partial Name: rsvp
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$flower_rsvp = get_field('flower_rsvp');
?>
<section class="rsvp-partial-59a1c2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="images">
                    <img src="<?= esc_url($flower_rsvp['url']); ?>" alt="<?= esc_attr($flower_rsvp['title']); ?>" class="flower-rsvp">
                </div>
                <div class="texts">
                    <h1 class="before-title"><?php the_field('title_rsvp_1'); ?></h1>
                    <h2 class="title"><?php the_field('title_rsvp_2'); ?></h2>
                    <p class="description"><?= get_field('rsvp_intro_before_form'); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-7 col-xl-4">
                <div class="form">
                    <?= do_shortcode(get_field('rsvp_form')); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.wpcf7-list-item-label').before('<span class="radio-animate"></span>');
        
        $('.radio-contain').on('click', '.wpcf7-list-item label', function() {
            var radio = $(this).find('input[type="radio"]');
            $('.wpcf7-list-item').removeClass('active');
            if (radio.prop('checked')) {
                $(this).parent().addClass('active');
            }
        });
    });
</script>
