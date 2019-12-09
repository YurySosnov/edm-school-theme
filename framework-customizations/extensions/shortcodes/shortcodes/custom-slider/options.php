<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'slides' => array(
        'type'         => 'addable-popup',
        'label'        => __('Slides', 'fw'),
        'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
        'template'      => '{{=title}}',
        'popup_size'  => 'large',
        'popup-options' => array(
            'title'   => array(
                'type'  => 'text',
                'label' => __('Title', 'fw')
            ),
            'name' => array(
                'type'  => 'text',
                'label' => __('Name', 'fw')
            ),
            'text' => array(
                'type'  => 'textarea',
                'label' => __('Content', 'fw')
            ),
            'age'  => array(
                'type'  => 'text',
                'label' => __('Age', 'fw')
            ),
            'img'   => array(
                'type'  => 'upload',
                'label' => __('Image', 'fw')
            ),
            'img_alt'   => array(
                'type'  => 'upload',
                'label' => __('Alternative Image', 'fw')
            ),
            'img_hover'   => array(
                'type'  => 'upload',
                'label' => __('Hover Image', 'fw')
            ),
            'video'   => array(
                'type'  => 'text',
                'label' => __('Video', 'fw')
            ),
            'audio'   => array(
                'type'  => 'text',
                'label' => __('Audio', 'fw')
            ),
        )
    ),
    'slider_class'  => array(
        'label'        => __('Slider Additional Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'slider_type' => array(
        'label'        => __('Slider Type', 'fw'),
        'type'         => 'select',
        'choices' => array(
            'default'  => __('Default', 'fw'),
            'video'    => __('Video', 'fw'),
            'audio'    => __('Audio', 'fw'),
            'dj'       => __('DJ List Top', 'fw'),
            'dj_alt'   => __('DJ List Bottom', 'fw'),
            'reviews'  => __('Reviews', 'fw'),
        )
    ),
    'loop' => array(
        'label'        => __('Loop', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'load_embeded_by_click' => array(
        'label'        => __('Load Embeded by Click', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'dots' => array(
        'label'        => __('Dots', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'items' => array(
        'label'        => __('Items', 'fw'),
        'type'         => 'text',
        'value'        => '1'
    ),
    'margin' => array(
        'label'        => __('Margin', 'fw'),
        'type'         => 'text',
        'value'        => '0'
    ),
    'responsiveClass' => array(
        'label'        => __('Responsive Class', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'URLhashListener' => array(
        'label'        => __('URLhashListener', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'autoplayHoverPause' => array(
        'label'        => __('Autoplay Hover Pause', 'fw'),
        'type'         => 'switch',
        'value'        => false
    ),
    'startPosition'  => array(
        'label'        => __('Start Position', 'fw'),
        'desc'         => __('Start Position ("URLHash" for URLhashListener)', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'prev_button_class' => array(
        'type' => 'text',
        'label' => __('Prev button Class','fw'),
        'value' => ''
    ),
    'next_button_class' => array(
        'type' => 'text',
        'label' => __('Next button Class','fw'),
        'value' => ''
    ),
    'responsive' => array(
        'type'         => 'addable-popup',
        'label'        => __('Resolutions', 'fw'),
        'popup-title'   => __( 'Add/Edit Tabs', 'fw' ),
        'template'      => '{{=resolution}}',
        'popup_size'  => 'large',
        'popup-options' => array(
            'resolution'   => array(
                'type'  => 'text',
                'label' => __('Resolution', 'fw'),
                'value' => '0'
            ),
            'items' => array(
                'type'  => 'text',
                'label' => __('Items', 'fw'),
                'value' => '0'
            ),
            'nav' => array(
                'label'        => __('Show nav', 'fw'),
                'type'         => 'switch',
                'value'        => false
            ),
        )
    ),

    'container_class'  => array(
        'label'        => __('Container Class', 'fw'),
        'type'         => 'text',
        'value'        => ''
    ),
    'buttons_align' => array(
        'type' => 'select',
        'label' => __('Buttons align','fw'),
        'choices' => array(
            'center'  => __('Center', 'fw'),
            'left'    => __('Left', 'fw'),
            'right'   => __('Right', 'fw'),
        )
    ),
    'buttons_margin'=> array(
        'type' => 'text',
        'label' => __('Buttons margin','fw'),
        'value' => '0'
    ),
    'design' => array(
        'type' => 'select',
        'label' => __('Design','fw'),
        'choices' => array(
            'default' => __('Default','fw'),
            'logos' => __('Logos','fw')
        )
    )

);
