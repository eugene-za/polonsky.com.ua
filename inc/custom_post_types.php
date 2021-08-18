<?php

add_action('init', function () {

    /* Добавить поддержку контакты */
    register_post_type('section_headers', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Заголовки разделов',
            'singular_name'      => 'Контакт',
            'add_new'            => 'Добавить',
            'add_new_item'       => 'Добавление',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новый',
            'view_item'          => 'Смотреть заголовок',
            'search_items'       => 'Искать заголовок',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Заголовки разделов',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-editor-textcolor',
        'hierarchical'  => false,
        'supports'      => ['title', 'editor'],
    ]);

    /* Добавить поддержку контакты */
    register_post_type('contacts', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Контакты',
            'singular_name'      => 'Контакт',
            'add_new'            => 'Добавить контакт',
            'add_new_item'       => 'Добавление',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новый контакт',
            'view_item'          => 'Смотреть контакты',
            'search_items'       => 'Искать контакт',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Контакты',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-phone',
        'hierarchical'  => false,
        'supports'      => ['title'],
    ]);

    /* Добавить поддержку услуги и цены */
    register_post_type('services_prices', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Услуги и цены',
            'singular_name'      => 'Услуги и цены',
            'add_new'            => 'Добавить услугу',
            'add_new_item'       => 'Добавление',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новая услуга',
            'view_item'          => 'Смотреть услуги и цены',
            'search_items'       => 'Искать услугу',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Услуги и Цены',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-money-alt',
        'hierarchical'  => false,
        'supports'      => ['title'],
    ]);

    /* Добавить поддержку разделы услуг */
    register_taxonomy('service_categories',
        array('services_prices'),
        array(
            'hierarchical'       => true,
            'public'             => true,
            'show_tagcloud'      => false,
            'show_in_nav_menus'  => false,
            'labels'             => array(
                'name'          => 'Разделы услуг',
                'singular_name' => 'Раздел услуг',
                'search_items'  => 'Искать раздел услуг',
                'all_items'     => 'Смотреть все',
                'edit_item'     => 'Редактирование',
                'update_item'   => 'Обновить',
                'add_new_item'  => 'Добавление',
                'new_item_name' => 'Название нового раздела услуг',
                'menu_name'     => 'Разделы услуг',
            ),
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_admin_column'  => true,
            'query_var'          => false
        ));

    /* Добавить поддержку акции */
    register_post_type('promotions', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Акции',
            'singular_name'      => 'Акция',
            'add_new'            => 'Добавить акцию',
            'add_new_item'       => 'Добавление',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новая акция',
            'view_item'          => 'Смотреть акцию',
            'search_items'       => 'Искать акцию',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Акции',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-star-empty',
        'hierarchical'  => false,
        'supports'      => ['title', 'editor', 'thumbnail'],
    ]);

    /* Добавить поддержку отзывы */
    register_post_type('reviews', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Отзывы',
            'singular_name'      => 'Отзыв',
            'add_new'            => 'Добавить отзыв',
            'add_new_item'       => 'Добавление',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Смотреть отзыв',
            'search_items'       => 'Искать отзыв',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Отзывы',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-format-status',
        'hierarchical'  => false,
        'supports'      => ['title'],
    ]);

    /* Добавить поддержку отзывы */
    register_post_type('personnel', [
        'label'         => null,
        'labels'        => [
            'name'               => 'Персонал',
            'singular_name'      => 'Работник',
            'add_new'            => 'Добавить работника',
            'add_new_item'       => 'Добавление работника',
            'edit_item'          => 'Редактирование',
            'new_item'           => 'Новый работник',
            'view_item'          => 'Смотреть работника',
            'search_items'       => 'Искать работника',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Персонал',
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-groups',
        'hierarchical'  => false,
        'supports'      => ['title', 'thumbnail'],
    ]);

});

/* Получить заголовок и опиание секции */
function get_section_headers(){
    $result = [];

    $posts = get_posts([
        'numberposts' => -1,
        'post_type'   => 'section_headers'
    ]);

    foreach ($posts as $post) {
        $result[$post->ID] = [
            'title' => $post->post_title,
            'description' => $post->post_content
        ];
    }

    return $result;
}

/* Получить контакты */
function get_contacts()
{
    $result = [];

    $posts = get_posts([
        'numberposts' => -1,
        'post_type'   => 'contacts'
    ]);

    foreach ($posts as $post) {
        $acf = get_fields($post);
        $result[$acf['type']] = [
            'name' => $post->post_title
        ];
        $result[$acf['type']] = array_merge($result[$acf['type']], $acf);
    }

    return $result;
}

/* Получить акции */
function get_personnel()
{
    $result = [];

    $posts = get_posts([
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'personnel'
    ]);

    foreach ($posts as $post) {
        $result[$post->ID] = [
            'name'  => $post->post_title,
            'photo' => get_the_post_thumbnail_url($post->ID, 'personnel_thumbnail_size')
        ];
        $result[$post->ID] = array_merge($result[$post->ID], get_fields($post));
    }

    return $result;
}

/* Получить акции */
function get_reviews()
{
    $result = [];

    $posts = get_posts([
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'reviews'
    ]);

    foreach ($posts as $post) {
        $result[$post->ID] = [
            'name' => $post->post_title,
            'text' => get_field('review', $post->ID),
        ];
    }

    return $result;
}

/* Получить акции */
function get_promotions()
{
    $result = [];

    $posts = get_posts([
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'promotions'
    ]);

    foreach ($posts as $post) {
        $result[$post->ID] = [
            'name'        => $post->post_title,
            'description' => $post->post_content,
            'thumbnail'   => get_the_post_thumbnail_url($post->ID, 'promotions_thumbnail_size')
        ];
    }

    return $result;
}

/* Получить разделы услуг */
function get_service_categories(): array
{
    $result = [];

    $service_categories = get_terms('service_categories', [
        'orderby'    => 'id',
        'order'      => 'ASC',
        'hide_empty' => false
    ]);

    if (!empty($service_categories) && !is_wp_error($service_categories)) {
        foreach ($service_categories as $term) {
            $result[$term->term_id] = [
                'name' => $term->name
            ];
            $result[$term->term_id] = array_merge($result[$term->term_id], get_fields($term));
        }
    }

    return $result;
}

/* Получить услуги и цены */
function get_services_prices(): array
{
    $result = [];

    $terms = get_terms('service_categories', [
        'orderby'    => 'id',
        'order'      => 'ASC',
        'hide_empty' => false
    ]);

    foreach ($terms as $term) {
        $result[$term->term_id] = [
            'term'  => $term->name,
            'posts' => []
        ];
        $posts = get_posts([
            'post_type' => 'services_prices',
            'tax_query' => [
                [
                    'taxonomy' => 'service_categories',
                    'terms'    => $term->term_id,
                    'field'    => 'term_id'
                ]
            ]
        ]);
        foreach ($posts as $post) {
            $result[$term->term_id]['posts'][$post->ID] = [
                'title' => $post->post_title,
                'price' => get_field('price', $post->ID)
            ];
        }
    }

    return $result;
}

/* Убрать лишние поля в админке при добавлении/изменении категорий услуг */
function hide_cat_fields()
{
    global $current_screen;
    if ($current_screen->post_type === 'services_prices'): ?>
        <style type="text/css">
            .term-description-wrap,
            .term-parent-wrap,
            .term-slug-wrap {
                display: none;
            }
        </style>
    <?php endif;
}

add_action('admin_head-term.php', 'hide_cat_fields');
add_action('admin_head-edit-tags.php', 'hide_cat_fields');
