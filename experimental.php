<?php
/*
* Template Name: Experimental
*/
get_header();
?>


<!-- Page Title
        ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Experimental Code</h1>
    </div>
</section><!-- #page-title end -->




<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">


            <?php

            echo wp_login_url();
            echo '<br>';
            wp_loginout();
            echo '<br>';
            bloginfo('name');
            echo '<br>';
            echo home_url();
            echo '<br>';
            single_post_title();
            ?>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>