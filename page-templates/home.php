<?php
/**
 * ============== Template Name: Home
 *
 * @package Dockenbush
 */
get_header();?>


<div id=" page">



<!-- ******************* Hero Content ******************* -->

<?php get_template_part( 'template-parts/section-hero' );?>

<!-- ******************* Reservations Section ******************* -->

<div id="reservations"></div>

<div class="booking-form sticky pl2 pr2" id="make-a-booking">
    <?php echo do_shortcode('[hb_booking_form search_only="yes" redirection_url="/bookings/rooms"]'); ?>
</div>

<!-- ******************* Intro Content ******************* -->
<?php get_template_part( 'template-parts/section-intro' );?>

<!-- ******************* Rooms Content ******************* -->

<?php get_template_part( 'template-parts/section-rooms' );?>

<!-- ******************* Testimonials Content ******************* -->

<?php get_template_part( 'template-parts/section-testimonials' );?>

<!-- ******************* Gallery  ******************* -->

<?php get_template_part( 'template-parts/section-gallery' );?>

<!-- ******************* Features  ******************** -->

<?php get_template_part( 'template-parts/section-features' );?>

<!-- ******************* Local Area  ******************** -->

<?php get_template_part( 'template-parts/section-local-area' );?>

<!-- ******************* Things to do & Places to eat  **************** -->

<?php get_template_part( 'template-parts/section-things-to-do' );?>

<!-- ******************* Map Panel  ******************* -->

<div class="container-fluid pl1 pr1 pb1">

    <?php echo do_shortcode('[wp_mapbox_gl_js map_id="107"]');?>

</div>

<!-- ******************* Contact ******************* -->

<?php get_template_part( 'template-parts/section-contact' );?>

<?php get_footer();?>
