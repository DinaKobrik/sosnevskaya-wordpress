<?php
/*
Template Name: Документы
*/
?>

<?php
get_header();
?>

<section class="document">
        <div class="container">
            <h1 class="title document__title"><?php the_field('document_title') ?></h1>
            <div class="document-wrapper">

            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'documents',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
            ?>
                <div class="document-item">
                    <div class="document-item__name"><?php the_title(); ?></div>
                    <div class="document-item__date"><?php the_field('document-item_date'); ?></div>
                    <a href="<?php the_field('document-item_download'); ?>" download="file.pdf" class="document-item__download"><img
                            src="<?php echo bloginfo('template_url'); ?>/assets/img/icon_download.png" alt="Скачать">Скачать</a>
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