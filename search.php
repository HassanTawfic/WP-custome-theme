<?php
get_header();
?>
    <div class="section-header">
        <div class="d-flex">
            <h1>search results</h1>
        </div>
    </div>
    <div class="container">

    <?php
        if( have_posts())
        {
            while( have_posts())
            {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
    ?>

    </div>
<?php
get_footer();
?>
