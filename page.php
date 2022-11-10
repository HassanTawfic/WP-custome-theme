<?php
get_header();
?>
    <div class="section-header">
        <div class="d-flex">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
    <div class="container">

    <?php
        if( have_posts())
        {
            while( have_posts())
            {
                the_post();
                get_template_part('template-parts/content', 'page');
            }
        }
    ?>

    </div>
<?php
get_footer();
?>
