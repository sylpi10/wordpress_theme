<?php get_header() ?>


<?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>

            <li>
                <h2> <?php the_title() ?> </h2>
                <h3>By <?php the_author() ?></h3>
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '']) ?>
                <h5><?php the_category() ?></h5>
                <a class="more" href="<?php the_permalink() ?>">
                    See more
                </a>
                <div><?php the_content() ?></div>
            </li>

        <?php endwhile ?>
    </ul>
<?php else : ?>
    <h2>No articles</h2>
<?php endif; ?>

<?php get_footer() ?>