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
                the_content();
            }
        }
    ?>

    </div>
<?php
get_footer();
?>
