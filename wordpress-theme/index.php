
<?php
/**
 * The main template file
 */

get_header();
?>

<main>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <section class="section section-white">
                <div class="container">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                            <h1 class="section-title"><?php the_title(); ?></h1>
                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                </div>
            </section>
            <?php
        endwhile;
    else:
        ?>
        <section class="section section-white">
            <div class="container">
                <h1 class="section-title">No se encontraron publicaciones</h1>
                <p>Lo sentimos, no se encontraron publicaciones que coincidan con tu búsqueda.</p>
            </div>
        </section>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
?>
