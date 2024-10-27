<?php
/**
 * 
 * Partial Name: count-down
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$image_above = get_field('image_above');
$date = get_field('date');
if ($date):
?>
<section class="count-down-partial-e5bffa">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-5">                
                <div class="card-container">
                    <div class="title-card-container">
                        <h2 class="title-card text-center"><?php the_field('card_title'); ?></h2>
                    </div>
                    <div class="body-card">
                        <h3 class="text-center"><?php the_field('name_of_the_bride_and_groom'); ?></h3>
                        <h4 class="text-center"><?php the_field('text_card'); ?></h4>
                        <h5><?php the_field('passenger_name'); ?></h5>
                        <h3 class="card-text text-center"><?php the_field('passenger_name_value'); ?></h3>
                        <h5><?php the_field('passes'); ?></h5>
                        <h3 class="card-text"><?php the_field('passes_value'); ?></h3>
                        <h5><?php the_field('marriage_date'); ?></h5>
                        <h3 class="card-text text-center"><?php the_field('marriage_date_value'); ?></h3>
                        <input type="hidden" class="date-init" value="<?= $date; ?>">
                        <div id="countdown"></div>
                        <h5><?php the_field('destination'); ?></h5>
                        <h3 class="card-text text-center"><?php the_field('destination_value'); ?></h3>
                        <div class="image-above-container">
                            <img src="<?= esc_url($image_above['url']); ?>" alt="<?= esc_attr($image_above['title']); ?>" class="image-above">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var date_end = $('.date-init').val();
    var countDownDate = new Date(date_end).getTime();
	
    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
    console.log(now, countDownDate, date_end);
    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    if(days <= 9){
        days = '0' + Math.floor(distance / (1000 * 60 * 60 * 24));
    }
    if(hours <= 9){
        hours = '0' + Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    }
    if(minutes <= 9){
        minutes = '0' + Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    }
    if(seconds <= 9){
        seconds = '0' + Math.floor((distance % (1000 * 60)) / 1000);
    }
    <?php if(get_bloginfo("language") == "en-US"): ?>
        document.getElementById("countdown").innerHTML = "<div class='item-count'><span>" + days + "</span><br><span>Days</span></div><div class='item-count'><span class'date'>" + hours + "</span><br><span class='h-m'>Hours</span></div><div class='item-count'><span class'date'>" + minutes + "</span><br><span class='h-m'>Minutes</span></div><div class='item-count'><span class'date'>" + seconds + "</span><br><span class='h-m'>Seconds</span></div>";
    <?php else: ?>
        document.getElementById("countdown").innerHTML = "<div class='item-count'><span>" + days + "</span><br><span>Días</span></div><div class='item-count'><span class'date'>" + hours + "</span><br><span class='h-m'>Horas</span></div><div class='item-count'><span class'date'>" + minutes + "</span><br><span class='h-m'>Minutos</span></div><div class='item-count'><span class'date'>" + seconds + "</span><br><span class='h-m'>Segundos</span></div>";
    <?php endif; ?>

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Hemos comenzado";
    }
    }, 1000);
</script>
<?php endif; ?>
