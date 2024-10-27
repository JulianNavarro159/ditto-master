   
<?php
/**
 * 
 * Template Name: wedding-details
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$flower_left = get_field('flower_left');
$flower_right = get_field('flower_right');
$itinerary = get_field('itinerary');
?>
<main id="wedding-details-template-8771dd">
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
                    <?php if($itinerary): ?>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-9">
                                <div class="wedding-list">
                                    <?php foreach($itinerary as $item): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-6 item">
                                                <img src="<?= $item['icon']['url']; ?>" alt="<?= $item['icon']['title']; ?>" class="icon">
                                                <h5><?= $item['name']; ?></h5>
                                                <!-- <?php if($item['event_date']): ?>
                                                    <h3><?= $item['event_date']; ?></h3>
                                                <?php else: ?>
                                                    <hr>
                                                <?php endif; ?> -->
                                                <hr>
                                                <p><?= $item['description']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>