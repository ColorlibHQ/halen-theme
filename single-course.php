<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package halen
 */

get_header();
$benifits        = ! empty( halen_meta( 'benifits') ) ? halen_meta( 'benifits') : 'N/A';
$trainer_name    = ! empty( halen_meta( 'trainer_name') ) ? halen_meta( 'trainer_name') : 'N/A';
$course_fee      = ! empty( halen_meta( 'course_fee') ) ? halen_meta( 'course_fee') : 'N/A';
$available_seats = ! empty( halen_meta( 'available_seats') ) ? halen_meta( 'available_seats') : 'N/A';
$schedule_time   = ! empty( halen_meta( 'schedule_time') ) ? halen_meta( 'schedule_time') : 'N/A';
$enroll_url      = ! empty( halen_meta( 'enroll_url') ) ? halen_meta( 'enroll_url') : '#';

if( have_posts() ) {
    while( have_posts() ) : the_post();
    ?>
    <!-- cource details part here -->
    <section class="cource_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="cource_details_content">
                        <div class="single_cource_details">
                            <h4><?php the_title()?></h4>
                            <?php the_content()?>
                        </div>
                        <div class="single_cource_details">
                            <h4><?php echo esc_html( 'Benifits', 'halen' );?></h4>
                            <p><?php echo esc_html( $benifits )?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="cource_details_sidebar">
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Trainer’s Name', 'halen' );?></p>
                            <span><?php echo esc_html( $trainer_name );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Course Fee', 'halen' );?></p>
                            <span><?php echo esc_html( $course_fee );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Available Seats', 'halen' );?></p>
                            <span><?php echo esc_html( $available_seats );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Schedule', 'halen' );?></p>
                            <span><?php echo esc_html( $schedule_time );?></span>
                        </div>
                        <a href="<?php echo esc_url( $enroll_url );?>" class="btn_1"><?php echo esc_html( 'Enroll the Course', 'halen' );?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cource details part end -->
    <?php 
    endwhile;
}

// Footer============
get_footer();