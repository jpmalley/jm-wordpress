<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
