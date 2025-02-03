<?php
/*
Template Name: Ход строительства
*/
?>

<?php
get_header();
?>

<section class="progress">
        <div class="container">
            <div class="title progress__title"><?php the_field('progress_title') ?></div>
            <div class="progress__years">
                <button id="year2022" class="progress__year button">2022</button>
                <button id="year2021" class="progress__year button">2021</button>
                <button id="year2020" class="progress__year button">2020</button>
            </div>
            <div data-category="year2022" class="progress-wrapper">

                <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'progress2022',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="progress-item">
                            <div class="progress-item__month"><?php the_field("progress-item_month") ?></div>
                            <div class="progress-item__text">
                                <div class="progress-item__subheader"><?php the_field("progress-item_subheader") ?></div>
                                <div class="progress-item__descr"><?php the_field("progress-item_descr") ?></div>
                            </div>
                            <div class="progress-item__images">
                                <div class="progress-item__img">
                                    <?php
                                        $image = get_field('progress-item_img1');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img2');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                    <?php
                                        $image = get_field('progress-item_img3');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img4');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                ?>

            </div>
            <div data-category="year2021" class="progress-wrapper">

                <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'progress2021',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="progress-item">
                            <div class="progress-item__month"><?php the_field("progress-item_month") ?></div>
                            <div class="progress-item__text">
                                <div class="progress-item__subheader"><?php the_field("progress-item_subheader") ?></div>
                                <div class="progress-item__descr"><?php the_field("progress-item_descr") ?></div>
                            </div>
                            <div class="progress-item__images">
                                <div class="progress-item__img">
                                    <?php
                                        $image = get_field('progress-item_img1');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img2');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                    <?php
                                        $image = get_field('progress-item_img3');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img4');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                ?>


            </div>
            <div data-category="year2020" class="progress-wrapper">

                     <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'progress2020',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="progress-item">
                            <div class="progress-item__month"><?php the_field("progress-item_month") ?></div>
                            <div class="progress-item__text">
                                <div class="progress-item__subheader"><?php the_field("progress-item_subheader") ?></div>
                                <div class="progress-item__descr"><?php the_field("progress-item_descr") ?></div>
                            </div>
                            <div class="progress-item__images">
                                <div class="progress-item__img">
                                     <?php
                                        $image = get_field('progress-item_img1');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img2');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                 <div class="progress-item__img">
                                     <?php
                                        $image = get_field('progress-item_img3');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="progress-item__img">
                                        <?php
                                        $image = get_field('progress-item_img4');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>

            </div>
        </div>
    </section>

<?php
get_footer();
?>
