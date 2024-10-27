   
<?php
/**
 * 
 * Partial Name: banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$flower_left = get_field('flower_left');
$flower_right = get_field('flower_right');
$img = get_field('img');
$img_banner_2 = get_field('img_banner_2');
// $image_above = get_field('image_above');
?>
<section class="banner-partial-a0227b">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-5">

                <div class="images" >
                    <img src="<?= $flower_left['url']; ?>" alt="<?= $flower_left['title'] ?>" class="flower-left">
                    <img src="<?= $flower_right['url']; ?>" alt="<?= $flower_right['title'] ?>" class="flower-right">
                </div>
                
                <div class="image-container-2">
                    <img src="<?= $img_banner_2['url']; ?>" alt="<?= $img_banner_2['title'] ?>" class="img_banner_2">
                </div>

                <div class="banner-container">
                    <h1><?php the_field('title_banner'); ?></h1>
                    <h2><?php the_field('title_banner_2'); ?></h2>
                    
                    <div class="image-container">
                        <img src="<?= $img['url']; ?>" alt="<?= $img['title'] ?>" class="img">
                    </div>

                    
                    <h2><?php the_field('text_banner'); ?></h2>
                </div>
                
            </div>
        </div>
    </div>
</section>
                    