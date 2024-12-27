<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">
                <?php
                $post_time = get_the_time('U');
                $current_time = current_time('timestamp');
                echo human_time_diff($post_time, $current_time) . ' ago';
                ?>
            </span>
            <?php the_tags(' <span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>

            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i>
                    <?php comments_number() ?></a></span>
        </div>
    </header>


    <?php
    the_content();
    ?>

    <?php
    comments_template();
    ?>

</div>