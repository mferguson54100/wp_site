<?php get_header(); ?>

    <?php if(have_posts()):?>

            <?php while(have_posts()): the_post() ?>
                <div <?php post_class() ?>>
                        <h2> <?php the_title()?> </h2>
                        <div class='excerpt'>
                                    <?php the_excerpt() ?>
                        <?php the_excerpt() ?>
                    </div>
            <a href=<?php the_permalink() ?> class ='button'>read on</a>
                </div>
            <?php endwhile?>

    <?php else : ?>

<h2>There are currently no post </h2>

<?php endif?>
<?php get_footer(); ?>