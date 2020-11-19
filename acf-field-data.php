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
            'key' => 'field_5fb62d9c0ad71',
            'label' => 'City',
            'name' => 'city',
            'type' => 'text',
            'instructions' => 'This plugin only works on major cities in Sweden. 
      Enter City name in english.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5fb62b2e5a7a7',
            'label' => 'Add to product page',
            'name' => 'add_to_product_page',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'true' => 'Add to product page',
            ),
            'allow_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
            'save_custom' => 0,
          ),
          array(
            'key' => 'field_5fb62ba75a7a8',
            'label' => 'Add to shop page',
            'name' => 'add_to_shop_page',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'true' => 'Add to shop page',
            ),
            'allow_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
            'save_custom' => 0,
          ),
          array(
            'key' => 'field_5fb62bd65a7a9',
            'label' => 'Add to cart page',
            'name' => 'add_to_cart_page',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'true' => 'Add to cart page',
            ),
            'allow_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
            'save_custom' => 0,
          ),
          array(
            'key' => 'field_5fb62bf55a7aa',
            'label' => 'Add to checkout page',
            'name' => 'add_to_checkout_page',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'true' => 'Add to checkout page',
            ),
            'allow_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
            'save_custom' => 0,
          ),
          array(
            'key' => 'field_5fb62c0e5a7ab',
            'label' => 'Add to specific product',
            'name' => 'add_to_specific_product',
            'type' => 'number',
            'instructions' => 'Add product id number to add Weather Data to your specific product',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
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
