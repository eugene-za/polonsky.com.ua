<?php
add_action('after_setup_theme', function () {

    add_image_size('personnel_thumbnail_size', 124, 124, true);
    add_image_size('services_thumbnail_size', 690, 690);
    add_image_size('promotions_thumbnail_size', 690, 690);
    add_image_size('about_us_cover_thumbnail_size', 1000, 1000);
    add_image_size('home_header_background_thumbnail_size', 1600, 1200);

    add_filter('intermediate_image_sizes', function ($sizes) {

        if (isset($_REQUEST['post_id'])) {
            switch (get_post_type($_REQUEST['post_id'])) {
                case 'personnel' :
                    $sizes = ['personnel_thumbnail_size'];
                    break;
                case 'promotions' :
                    $sizes = ['promotions_thumbnail_size'];
                    break;
                default :
                    $sizes = array_filter($sizes, function ($size) {
                        return !in_array($size, [
                            'personnel_thumbnail_size',
                            'services_thumbnail_size',
                            'promotions_thumbnail_size',
                            'about_us_cover_thumbnail_size',
                            'home_header_background_thumbnail_size',
                        ]);
                    });
                    break;
            }
        }

        if (isset($_REQUEST['_acfuploader'])) {
            switch ($_REQUEST['_acfuploader']) {
                case 'field_60fa998af23a1':
                    $sizes = ['services_thumbnail_size'];
                    break;
                case 'field_60fc943234345':
                    $sizes = ['about_us_cover_thumbnail_size'];
                    break;
                case 'field_60fc99d9faf0f':
                    $sizes = ['home_header_background_thumbnail_size'];
                    break;
            }
        }

        return $sizes;
    });

});