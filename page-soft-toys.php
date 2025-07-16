<?php
/* 
Template Name: Мягкие игрушки
*/
?>

<?php
get_header();
?>

<div class="toys">
    <div class="container">
        <!-- <h2 class="subtitle"><?php the_field('soft_toys'); ?></h2> -->
        <h2 class="subtitle">Мягкие игрушки</h2>

        <div class="toys__wrapper">

            <?php
            // параметры по умолчанию
            $my_posts = get_posts(array(
                'numberposts' => -1,
                'category_name' => 'soft_toys',
                'orderby' => 'date',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            global $post;

            foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>
                <div class="toys__item" style="background-image: url(
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        }
                        ?>)">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('toys_desrc'); ?>
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                    </div>
                </div>
                <?php
            }

            wp_reset_postdata(); // сброс
            ?>

        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <!-- <?php the_field('toys_descr') ?> -->
                    <h3>🧸 Преимущества мягких игрушек</h3>
                    <p style="margin-top: 20px;">Преимущества мягких игрушек
                        Развивающие игрушки не просто развлекают — они формируют ключевые навыки в игре. Такие игрушки
                        способствуют развитию моторики, логики, памяти, внимания и речи. Они учат ребёнка исследовать
                        мир, пробовать, ошибаться и достигать результата. С их помощью дети быстрее осваивают цвета,
                        формы, числа и даже первые понятия о времени и пространстве. Развивающие игрушки стимулируют
                        самостоятельность и любознательность. Это отличный способ играть с пользой, закладывая прочную
                        основу для обучения и уверенности в себе.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>