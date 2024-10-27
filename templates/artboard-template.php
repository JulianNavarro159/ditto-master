   
<?php
/**
 * 
 * Template Name: artboard
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$flower_left = get_field('flower_left');
$flower_right = get_field('flower_right');
$hotels_list = get_field('hotels_list');
?>
<main id="artboard-template-bd95df">
<section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <div class="flowers">
                            <?php if($flower_left): ?>
                                <img src="<?= $flower_left['url']; ?>" alt="<?= $flower_left['title']; ?>" class="flower-left">
                            <?php
                                endif;
                                if($flower_right):
                            ?>
                                <!-- <img src="<?= $flower_right['url']; ?>" alt="<?= $flower_right['title']; ?>" class="flower-right"> -->
                            <?php endif; ?>
                        </div>
                        <h1><?= get_field('title'); ?></h1>
                    </div>
                    <?php if($hotels_list): ?>
                        <div class="hotels-list">
                            <div class="row">
                                <?php foreach($hotels_list as $item): ?>
                                    <div class="col-12 col-md-6">
                                        <div class="image-contain">
                                            <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>">
                                        </div>
                                        <div class="text-container">
                                            <h2><?= $item['name']; ?></h2>
                                            <?php if($item['alternative_texts']): ?>
                                                <div class="alternative-text mb-4">
                                                    <?= $item['alternative_texts']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <!-- <a href="<?= $item['map_link']; ?>" class="map" target="_blank">
                                                <?php if(get_bloginfo("language") == "en-US"): ?>
                                                    Click here to open Google Maps
                                                <?php else: ?>
                                                    Clic aquí para abrir Google Maps
                                                <?php endif; ?>
                                            </a>
                                            <a href="<?= $item['hotel_link']; ?>" class="hotel-cta" target="_blank">
                                                <?php if(get_bloginfo("language") == "en-US"): ?>Booking<?php else: ?> Reserva <?php endif; ?>
                                            </a> -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    