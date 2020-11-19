<?php

/**
* ACF Options page
*/

add_action('acf/init', 'weather_data_options');
    function weather_data_options()
    {
        acf_add_options_page('Weather Data');
    }

    if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'group_5fb62b2608efd',
            'title' => 'Weather Data',
            'fields' => array(
                array(
                    'key' => 'field_5fb62b2e5a7a7',
                    'label' => 'Where to show weather',
                    'name' => 'where_to_show_weather',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'is_cart' => 'In Cart',
                        'is_shop' => 'In Shop',
                        'is_checkout' => 'In Checkout',
                        'is_product' => 'In Products',
                        'is_account_page' => 'In Account page',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-weather-data',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;
