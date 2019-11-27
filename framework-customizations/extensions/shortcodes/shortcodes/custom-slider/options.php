<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'slides' => array(
        'type'         => 'addable-popup',
        'label'        => __('Slides', 'fw'),
        'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
        'template'      => '{{=s1_title}}',
        'popup-options' => array(
            's1_title'   => array(
                'type'  => 'text',
                'label' => __('S1 Title', 'fw')
            ),
            's1_name' => array(
                'type'  => 'text',
                'label' => __('S1 Name', 'fw')
            ),
            's1_text' => array(
                'type'  => 'wp-editor',
                'label' => __('S1 Content', 'fw')
            ),
            's1_img'   => array(
                'type'  => 'upload',
                'label' => __('S1 Image', 'fw')
            ),
            's2_title'   => array(
                'type'  => 'text',
                'label' => __('S2 Title', 'fw')
            ),
            's2_name' => array(
                'type'  => 'text',
                'label' => __('S2 Name', 'fw')
            ),
            's2_text' => array(
                'type'  => 'wp-editor',
                'label' => __('S2 Content', 'fw')
            ),
            's2_img'   => array(
                'type'  => 'upload',
                'label' => __('S2 Image', 'fw')
            ),
        )
    ),
    'l1_container_class'  => array(
        'label'        => __('Level 1 Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),

    'alternative' => array(
        'label'        => __('Alternative slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'alt_container_class' => array(
        'label'        => __('Alt Slider Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'two_levels' => array(
        'label'        => __('2 levels', 'fw'),
        'desc'         => __('Sync and show 2 different sliders', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'l2_container_class' => array(
        'label'        => __('Level 2 Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'dj_list_slider' => array(
        'label'        => __('DJ Slider', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
);
