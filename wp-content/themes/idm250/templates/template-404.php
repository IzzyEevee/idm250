<?php
/*
Template Name: 404
*/

get_header(); ?>
<!--blog body-->
<div class="content">
        <div class="mainDivider">
            <img src="<?php echo bloginfo('template_url'); ?>/dist/img/home/focusArea.png"/>
            <div class="info">
                <h1>Page Not Found</h1>
                <p>Sorry, this page does not exist...</p>
                <p>Please search again...</p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
