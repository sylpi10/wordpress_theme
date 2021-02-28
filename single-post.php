<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="details">
            <h2> <?php the_title() ?> - </h2>
            <h3>By <?php the_author() ?></h3>
            <!--<?php the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => '']) ?> -->
            <p>
                <img src="<?php the_post_thumbnail_url() ?>" alt="" width="600">
            </p>

            <div class="content"><?php the_content() ?></div>
        </div>

<?php endwhile;
endif ?>


<?php get_footer() ?>