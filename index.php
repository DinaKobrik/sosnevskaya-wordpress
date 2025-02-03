
   <?php get_header(); ?>
    <section id="promo" class="promo">
        <div class="promo__gradient"></div>
            <div class="container">
                <h1 class="promo__header"><span>8-я</span><br>СОСНЕВСКАЯ</h1>
                <p class="promo__descr"><?php the_field('promo__descr') ?></p>
                <div class="promo-wrapper">
                    <div class="promo-item">
                        <div class="promo-item__number">14</div>
                        <div class="promo-item__divider">/</div>
                        <div class="promo-item__unit">Минут</div>
                        <div class="promo-item__descr">Пешком до метро
                            «Тульская»</div>
                    </div>
                    <div class="promo-item">
                        <div class="promo-item__number">21</div>
                        <div class="promo-item__divider">/</div>
                        <div class="promo-item__unit">Минута</div>
                        <div class="promo-item__descr">Пешком до метро
                            «Тульская»</div>
                    </div>
                    <div class="promo-item">
                        <div class="promo-item__number">100</div>
                        <div class="promo-item__divider">/</div>
                        <div class="promo-item__unit">Метров</div>
                        <div class="promo-item__descr">До кремля</div>
                    </div>
                </div>
            </div>
        
    </section>
    <section id="advantages" class="advantages"></section>
        <div class="container">
            <h2 class="title advantages__title"><?php the_field('advantages_title', 2); ?></h2>
            <div class="advantages-wrapper">

            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'advantages',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
            ?>
                <div class="advantages-item">
                    <div class="advantages-item__img">
                            <?php
                            $image = get_field('advantages-item_img');

                            if (!empty($image)): ?>
                            <img 
                            src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $image['alt']; ?>">
                            <?php endif;
                            ?></div>
          
                    <div class="advantages-item__number"><?php the_field('advantages-item_number') ?></div>
                    <div class="advantages-item__descr"><?php the_field('advantages-item_descr') ?></div>
                </div>
            <?php
                }

                wp_reset_postdata(); // сброс
            ?>

            

            </div>
        </div>
    </section>
    <section class="slider">
        <div class="container">
            <div class="slider-container">
                <div class="slider-wrapper">

                    <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'slider',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                            <div class="slider-item">
                                <?php
                                $image = get_field('slider-item');

                                if (!empty($image)): ?>
                                <img 
                                src="<?php echo $image['url']; ?>" 
                                alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                                ?>
                            </div>

                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="select" class="select">
        <div class="container">
            <div id="select1" class="select__wrapper select__wrapper-active">
                <div class="select__title title"><?php the_field('select_title', 2) ?></div>
                <div class="select-step">
                    <span class="select-step__number">Шаг 1 из 3</span>
                    <span class="select-step__divider-bold"></span>
                    <span class="select-step__divider"></span>
                </div>
                <div class="select-step__wrapper">

                    <div class="select-step__subheader">Выберите этаж</div>
                    <div class="select-step__floor">
                        <select name="floor" id="floor">
                            <option class="floor-wrapper" id="floor1" value="1">1 этаж</option>
                            <option class="floor-wrapper" id="floor2" value="2">2 этаж</option>
                            <option class="floor-wrapper" id="floor3" value="3">3 этаж</option>
                            <option class="floor-wrapper" id="floor4" value="4">4 этаж</option>
                            <option class="floor-wrapper" id="floor5" value="5">5 этаж</option>
                            <option class="floor-wrapper" id="floor6" value="6">6 этаж</option>
                            <option class="floor-wrapper" id="floor7" value="7">7 этаж</option>
                            <option class="floor-wrapper" id="floor8" value="8">8 этаж</option>
                            <option class="floor-wrapper" id="floor9" value="9">9 этаж</option>
                        </select>
                    </div>
                    <div id="selectStepDescr1" class="select-step__descr-wrapper select-step__descr-wrapper-active">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number1') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text1') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number1') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text1') ?></div>
                        </div>
                    </div>
                    <div id="selectStepDescr2" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number2') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text2') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number2') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text2') ?></div>
                        </div>
                    </div>
                     <div id="selectStepDescr3" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number3') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text3') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number3') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text3') ?></div>
                        </div>
                    </div>
                    <div id="selectStepDescr4" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number4') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text4') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number4') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text4') ?></div>
                        </div>
                    </div>
                    <div id="selectStepDescr5" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number5') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text5') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number5') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text5') ?></div>
                        </div>
                    </div>
                     <div id="selectStepDescr6" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number6') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text6') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number6') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text6') ?></div>
                        </div>
                    </div>
                    <div id="selectStepDescr7" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number7') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text7') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number7') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text7') ?></div>
                        </div>
                    </div>
                    <div id="selectStepDescr8" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number8') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text8') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number8') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text8') ?></div>
                        </div>
                    </div>
                     <div id="selectStepDescr9" class="select-step__descr-wrapper">
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_free-number9') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_free-text6') ?></div>
                        </div>
                        <div class="select-step__descr">
                            <div class="select-step__descr-number"><?php the_field('select-step_sold-number9') ?></div>
                            <div class="select-step__descr-text"><?php the_field('select-step_sold-text9') ?></div>
                        </div>
                    </div>

                </div>
                <div id="next" class="select__button button button_primary">Продолжить</div>

                <div id="selectImg" class="select-step__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg_select.png" alt="ЖК 8-я Сосневская">
                </div>
                <div class="select__bg"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/select_bg.png" alt=""></div>


            </div>
            <div id="select2" class="select__wrapper">
                <div class="select__title title">Квартиры</div>
                <div class="select-step select-step__layout">
                    <span class="select-step__number">Шаг 2 из 3</span>
                    <span class="select-step__divider-bold"></span>
                    <span class="select-step__divider"></span>
                </div>
                <div class="select-step__wrapper">

                    <div class="select-step__subheader">Выберите квартиру</div>


                </div>
                <div class="select-step__arrows">
                    <div id="selectArrowLeft" class="button button_primary select-step__arrow">&lt;</div>
                    <div id="selectArrowRight" class="button button_primary select-step__arrow">&gt;</div>

                </div>

                <div class="select-card__container">
                    <div data-category="floor1" id="cardWrapper1" class="select-card__wrapper select-card__wrapper-active">

                         <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor1',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor2" id="cardWrapper2" class="select-card__wrapper">

                            <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor2',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    
                    </div>
                    <div data-category="floor3" id="cardWrapper3" class="select-card__wrapper">
                        <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor3',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor4" id="cardWrapper4" class="select-card__wrapper">
                         <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor4',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor5" id="cardWrapper5" class="select-card__wrapper">
                         <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor5',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor6" id="cardWrapper6" class="select-card__wrapper">
                                                 <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor6',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor7" id="cardWrapper7" class="select-card__wrapper">
                        <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor7',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor8" id="cardWrapper8" class="select-card__wrapper">
                         <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor8',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                    <div data-category="floor9" id="cardWrapper9" class="select-card__wrapper">
                         <?php 
                        // параметры по умолчанию
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'floor9',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                            ?>
                                <div class="select-card__item">
                                    <div class="select-card__area"><?php the_field('select-card_area') ?></div>
                                    <div class="select-card__rooms"><?php the_field('select-card_rooms') ?></div>
                                    <div class="select-card__img">
                                            <?php
                                            $image = get_field('select-card_img');

                                            if (!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                            <?php endif;
                                            ?></div>
                                    <div class="select-card__descr"><?php the_field('select-card_descr') ?></div>
                                    <div class="select-card__button button openForm">Оставить заявку</div>
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>
                    </div>
                </div>
                <div class="select__bg"></div>
            </div>


        </div>
    </section>
    <section id="infrastructure" class="infrastructure">
        <h2 class="title infrastructure__title"><?php the_field('infrastructure_title', 2) ?></h2>
        <div class="infrastructure-wrapper">

            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'infrastructure',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
            ?>
                <div class="infrastructure-item">
                    <div class="infrastructure-item__img"> 

                        <?php
                        $image = get_field('infrastructure-item_img');

                        if (!empty($image)): ?>
                        <img 
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                        ?>
                    </div>

                    <div class="infrastructure-item__text">
                        <div class="infrastructure-item__number"><?php the_field('infrastructure-item_number'); ?></div>
                        <div class="infrastructure-item__subheader"><?php the_field('infrastructure-item_subheader'); ?></div>
                        <div class="infrastructure-item__descr"><?php the_field('infrastructure-item_descr'); ?></div>
                    </div>
                </div>
            <?php
                }

                wp_reset_postdata(); // сброс
            ?>

           
        </div>
    </section>
    <section id="mortgage" class="mortgage">
        <div class="container">
            <h2 class="title mortgage__title"><?php the_field('mortgage_title', 2) ?></h2>
            <div class="mortgage-categories">
                <button id="mortgage" class="mortgage-category button">
                    Ипотека
                </button>
                <button id="familyMortgage" class="mortgage-category button">
                    Семейная ипотека
                </button>
                <button id="supportMortgage" class="mortgage-category button">
                    Ипотека с господдержкой
                </button>
                <button id="itMortgage" class="mortgage-category button">
                    IT ипотека
                </button>

            </div>
            <div class="mortgage-advantages">
                

                <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'mortgage-advantage',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                    <div class="mortgage-advantage">
                        <div class="mortgage-advantage__subheader"><?php the_field("mortgage-advantage_subheader") ?></div>
                        <div class="mortgage-advantage__descr"><?php the_field("mortgage-advantage_descr") ?></div>
                    </div>   
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                 ?>

            </div>
            <div class="banks">
                <div class="banks__subheader">Банки – партнеры</div>
                <div class="banks-table">
                    <table>
                    <thead>
                        <th>Банк</th>
                        <th>Первоначальный
                            взнос</th>
                        <th>Срок
                            кредитования</th>
                        <th>Процентная
                            ставка</th>
                        <th>Ежемесячный
                            платеж</th>
                        <th></th>
                    </thead >
                    <tbody data-category="mortgage">

                        <?php 
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'mortgage',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                            <tr>
                                <td class="banks-name"><span class="banks-name__img">
                                    
                                    <?php
                                        $image = get_field('banks-name_img');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                        
                                        </span><?php the_field('banks-name_name'); ?></td>
                                <td><?php the_field('banks-name_contribution'); ?></td>
                                <td><?php the_field('banks-name_deadline'); ?></td>
                                <td><?php the_field('banks-name_parcentage'); ?></td>
                                <td><?php the_field('banks-name_payment'); ?></td>
                                <td class="banks__button openForm">Оставить заявку</td>
                            </tr>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>

                    </tbody>
                    <tbody data-category="familyMortgage">

                        <?php 
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'family-mortgage',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                            <tr>
                                <td class="banks-name"><span class="banks-name__img">
                                    
                                    <?php
                                        $image = get_field('banks-name_img');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                        
                                        </span><?php the_field('banks-name_name'); ?></td>
                                <td><?php the_field('banks-name_contribution'); ?></td>
                                <td><?php the_field('banks-name_deadline'); ?></td>
                                <td><?php the_field('banks-name_parcentage'); ?></td>
                                <td><?php the_field('banks-name_payment'); ?></td>
                                <td class="banks__button openForm">Оставить заявку</td>
                            </tr>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>

                    </tbody>
                    <tbody data-category="supportMortgage">

                        <?php 
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'support-mortgage',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                            <tr>
                                <td class="banks-name"><span class="banks-name__img">

                                    <?php
                                        $image = get_field('banks-name_img');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>
                                        </span><?php the_field('banks-name_name'); ?></td>
                                <td><?php the_field('banks-name_contribution'); ?></td>
                                <td><?php the_field('banks-name_deadline'); ?></td>
                                <td><?php the_field('banks-name_parcentage'); ?></td>
                                <td><?php the_field('banks-name_payment'); ?></td>
                                <td class="banks__button openForm">Оставить заявку</td>
                            </tr>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>

                    </tbody>
                    <tbody data-category="itMortgage">

                        <?php 
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'it-mortgage',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                            <tr>
                                <td class="banks-name"><span class="banks-name__img">

                                    <?php
                                        $image = get_field('banks-name_img');

                                        if (!empty($image)): ?>
                                        <img 
                                        src="<?php echo $image['url']; ?>" 
                                        alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>

                                        </span><?php the_field('banks-name_name'); ?></td>
                                <td><?php the_field('banks-name_contribution'); ?></td>
                                <td><?php the_field('banks-name_deadline'); ?></td>
                                <td><?php the_field('banks-name_parcentage'); ?></td>
                                <td><?php the_field('banks-name_payment'); ?></td>
                                <td class="banks__button openForm">Оставить заявку</td>
                            </tr>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>

                    </tbody>
                </table></div>
            </div>
            <div class="mortgage-button">
                <div class="button button_primary openForm">Напишите нам</div>
                <div class="mortgage-button__descr">Подберем для вас лучшие
                    условия кредитования</div>
            </div>
        </div>
    </section>
    <section class="location">
        <div class="container">
            <div class="location-container">
                <div class="location-title">
                    <h2 class="title location__title"><?php the_field('location_title'); ?></h2>
                    <div class="location-title__descr"><?php the_field('location-title_descr'); ?></div>
                </div>
                <div class="location-wrapper">

                    <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'location',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                    <div class="location-item">
                        <div class="location-item__img">
                            <?php
                            $image = get_field('location-item_img');

                            if (!empty($image)): ?>
                            <img 
                            src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $image['alt']; ?>">
                            <?php endif;
                            ?>
                        
                        </div>
                        <div class="location-item__name"><?php the_field('location-item_name'); ?></div>
                    </div>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>

                    
                </div>
                <div class="location-advantages">
                    <div class="location-advantage">
                        <div class="location-advantage__number">14</div>
                        <div class="location-advantage__divider">/</div>
                        <div class="location-advantage__unit">Минут</div>
                        <div class="location-advantage__descr">Пешком до метро
                            «Тульская»</div>
                    </div>
                    <div class="location-advantage">
                        <div class="location-advantage__number">21</div>
                        <div class="location-advantage__divider">/</div>
                        <div class="location-advantage__unit">Минута</div>
                        <div class="location-advantage__descr">Пешком до метро
                            «Тульская»</div>
                    </div>
                </div>
                <div class="location-maps">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A595c39b9f09c0e8a30c0547148c74c845da437d65eace9fe11b545cf4abfe5bc&amp;source=constructor"
                        width="648" height="648" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="title contact__title"><?php the_field('contact_title', 2); ?></div>
            <div class="contact-container">
                <div class="contact-wrapper">

                    <?php 
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'contact-phone',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                    <div class="contact-item">
                        <div class="contact-item__contact">
                            <a href="tel:<?php the_field('contact-item_phone'); ?>">

                                <?php
                                $image = get_field('contact-item_img');

                                if (!empty($image)): ?>
                                <img 
                                src="<?php echo $image['url']; ?>" 
                                alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                                ?>
        
                                <span class="phone"><?php the_field('contact-item_phone'); ?></span>
                            </a>
                        </div>
                        <div class="contact-item__descr"><?php the_field('contact-item_descr'); ?></div>
                    </div>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                    <?php 
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'contact-mail',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                        <div class="contact-item">
                            <div class="contact-item__contact">
                                <a href="mailto:<?php the_field('contact-item_mail'); ?>">

                                    <?php
                                    $image = get_field('contact-item_img');

                                    if (!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                    <?php endif;
                                    ?>

                                    <span><?php the_field('contact-item_mail'); ?></span>
                                </a>
                            </div>
                            <div class="contact-item__descr"><?php the_field('contact-item_descr'); ?></div>
                        </div>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                </div>
                <div class="contact-adress">
                    <div class="contact-adress__subheader"><?php the_field('contact-adress_subheader'); ?></div>
                    <div class="contact-adress__descr"><?php the_field('contact-adress_descr'); ?></div>
                </div>
                <div class="contact-link">
                    <?php
                        wp_nav_menu( array(
                            'menu'            => 'Main',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                            'container'       => false,           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'menu_class'      => 'contact-link__wrapper',          // (string) class самого меню (ul тега)
                            'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                            'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                            'depth'           => 1,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                        ) );
                    ?>
                    <div class="contact-link__button button button_primary openForm">Напишите нам</div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <div class="modal-content__close">&times;</div>
            <div class="modal-content__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg_select.png" alt="ЖК 8-я Сосневская"></div>
            <div class="modal-content__subheader">Оставьте
                заявку</div>
                 <?php 
                    echo do_shortcode('[wpforms id="494"]')
                ?>              
            <div class="modal-content__privat">Нажимая кнопку "Отправить заявку" вы соглашаетесь с <a
                        href="<?php echo bloginfo('template_url'); ?>/assets/privacy/index.php"">политикой
                        конфиденциальности</a></div>
            <div class="modal-content__thanks">
            <div class="modal-content__thanks-subheader">Спасибо за заявку</div>
            <div class="modal-content__thanks-descr">Наш менеджер свяжется с вами в ближайшее время</div>
            </div>
        </div>
    </div>
    <div class="up"><a href="#promo">&raquo;</a></div>
<?php get_footer(); ?>