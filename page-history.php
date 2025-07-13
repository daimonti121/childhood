<?php 
/* 
Template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('story_title_main'); ?></h1>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title_first_row'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr_first_row'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img_first_row'); ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img_second_row'); ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title_second_row'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr_second_row'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_title_third_row'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_descr_third_row'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_img_third_row'); ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>