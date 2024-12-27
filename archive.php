<?php
get_header();
?>

<article class="content px-3 py-5 p-md-5 ">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

    <?php
    the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => 'Back',
        'next_text' => 'Forward',
        'screen_reader_text' => 'Navigate through posts',
    ]);
    ?>
</article>

<?php
get_footer();
?>