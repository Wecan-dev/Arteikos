<?php
$params = array(
    
    /* Icon type
    ------------------------ */
    array(
        'type' => 'dropdown',
        'heading' => 'Iconbox layout',
        'param_name' => 'layout',
        'value' => array(
            'Icon Top' => 'top',
            'Icon Left' => 'left',
            'Icon Right' => 'right',
        ),
        'std' => 'top',
        'description' => 'Select iconbox layout',
    ),
    
    array(
        'type' => 'dropdown',
        'heading' => 'Icon type',
        'param_name' => 'icon_type',
        'value' => array(
            'Icon' => 'icon',
            'Thin Icon' => 'thin_icon',
            'Image' => 'image',
        ),
        'std' => 'icon',
        'description' => 'Select icon type',
    ),
    
    array(
        'type' => 'iconpicker',
        'heading' => 'Select icon',
        'param_name' => 'icon',
        'description' => 'Select icon',
        'value' => 'fa fa-flag', // default value to backend editor admin_label
        'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'type' => 'fontawesome',
        ),
        'dependency' => array(
            'element'   => 'icon_type',
            'value'     => 'icon',
        ),
    ),
    
    array(
        'type' => 'iconpicker',
        'heading' => 'Select icon',
        'param_name' => 'icon_budicon',
        'description' => 'Select icon',
        'value' => 'bi_com-email', // default value to backend editor admin_label
        'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'type' => 'withemes_budicon',
            'source' => withemes_budicon(),
        ),
        'dependency' => array(
            'element'   => 'icon_type',
            'value'     => 'thin_icon',
        ),
    ),
    
    array(
        'type' => 'attach_image',
        'heading' => 'Upload your image',
        'param_name' => 'image',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => 'image',
        )
    ),
    
    array(
        'type' => 'vc_link',
        'heading' => 'Icon link',
        'param_name' => 'icon_link',
    ),
    
    /* Content
    ------------------------ */
    array(
        'type' => 'textfield',
        'heading' => 'Iconbox title',
        'param_name' => 'title',
        'value' => 'Iconbox title',
        "admin_label" => true,
    ),
    
    array(
        'type' => 'dropdown',
        'heading' => 'Title heading tag',
        'param_name' => 'title_tag',
        'value' => array(
            'h2' => 'h2',
            'h3' => 'h3',
            'h4' => 'h4',
        ),
        'std' => 'h4',
    ),

    array(
      "type" => "textarea_html",
      "admin_label" => true,
      "heading" => 'Desciption',
      "param_name" => "content",
      "description" => '',
    ),
    
    array(
        "type" => "checkbox",
        "heading" => 'Animation?',
        "param_name" => "animation",
        'value' => array(
            'Enable' => 'true',
        ),
        'std' => '',
    ),
    
    array(
        "type" => "textfield",
        "heading" => 'Animation Delay (ms)',
        "param_name" => "delay",
        'dependency' => array(
            'element' => 'animation',
            'value' => 'true',
        ),
        'description' => 'Enter number of milliseconds, eg. 300. Note that 1s = 1000ms.',
    ),
    
    array(
        'type' => 'textfield',
        'heading' => __( 'Extra class name', 'js_composer' ),
        'param_name' => 'el_class',
        'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
    ),
    
    /* Icon Design
    ------------------------ */
    array(
        'type' => 'textfield',
        'heading' => 'Icon Size',
        'param_name' => 'icon_size',
        'group' => 'Icon Design',
        'description' => 'Enter a number, eg. 60. Default is 80px',
        
        'previews' => array(
            array(
                'selector' => '.icon',
                'property' => 'width',
            ),
            array(
                'selector' => '.icon',
                'property' => 'height',
            ),
            array(
                'selector' => '.icon',
                'property' => 'line-height',
                'unit' => 'px',
            ),
        ),
    ),
    
    array(
        'type' => 'textfield',
        'heading' => 'Icon Font Size',
        'param_name' => 'icon_font_size',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => array( 'icon', 'thin_icon' ),
        ),
        'group' => 'Icon Design',
        'description' => 'Enter a number, eg. 32. Default is 28px',
        
        'preview' => array(
            'selector' => '.icon',
            'property' => 'font-size',
        ),
    ),
    
    array (
        'type' => 'colorpicker',
        'heading' => 'Icon color',
        'param_name' => 'icon_normal_color',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => array( 'icon', 'thin_icon' ),
        ),
        'group' => 'Icon Design',
        
        'preview' => array(
            'selector' => '.icon-inner',
            'property' => 'color',
        ),
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => 'Icon background',
        'param_name' => 'icon_normal_background',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => array( 'icon', 'thin_icon' ),
        ),
        'group' => 'Icon Design',
        
        'preview' => array(
            'selector' => '.icon-inner',
            'property' => 'background-color',
        ),
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => 'Icon hover color',
        'param_name' => 'icon_color',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => array( 'icon', 'thin_icon' ),
        ),
        'group' => 'Icon Design',
        
        'preview' => array(
            'selector' => '.wi-iconbox:hover .icon-inner',
            'property' => 'color',
        ),
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => 'Icon hover background',
        'param_name' => 'icon_background',
        'dependency' => array(
            'element' => 'icon_type',
            'value' => array( 'icon', 'thin_icon' ),
        ),
        'group' => 'Icon Design',
        
        'preview' => array(
            'selector' => '.wi-iconbox:hover .icon-inner',
            'property' => 'background-color',
        ),
    ),
    
    /* Title Design
    ------------------------ */
    array(
        'type' => 'colorpicker',
        'heading' => 'Title Color',
        'param_name' => 'title_color',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'color',
        ),
    ),
    
    array(
        'type' => 'textfield',
        'heading' => 'Title Font Size',
        'param_name' => 'title_font_size',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'font-size',
        ),
    ),
    
    array(
        'type' => 'dropdown',
        'heading' => 'Title Text Transform',
        'param_name' => 'title_text_transform',
        'value' => withemes_text_transform(),
        'std' => '',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'text-transform',
        ),
    ),
    
    array(
        'type' => 'textfield',
        'heading' => 'Title Letter Spacing',
        'param_name' => 'title_letter_spacing',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'letter-spacing',
        ),
    ),
    
    array(
        'type' => 'dropdown',
        'heading' => 'Title Font Weight',
        'param_name' => 'title_font_weight',
        'value' => withemes_font_weight(),
        'std' => '',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'font-weight',
        ),
    ),
    
    array(
        'type' => 'dropdown',
        'heading' => 'Title Font Style',
        'param_name' => 'title_font_style',
        'value' => withemes_font_style(),
        'std' => '',
        'group' => 'Iconbox Title',
        
        'preview' => array(
            'selector' => '.iconbox-title',
            'property' => 'font-style',
        ),
    ),
    
    /* Content Design
    ------------------------ */
    array(
        'type' => 'textfield',
        'heading' => 'Iconbox Content Font Size',
        'param_name' => 'content_font_size',
        'group' => 'Iconbox Content',
        
        'preview' => array(
            'selector' => '.iconbox-desc',
            'property' => 'font-size',
        ),
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => 'Iconbox Content Color',
        'param_name' => 'content_color',
        'group' => 'Iconbox Content',
        
        'preview' => array(
            'selector' => '.iconbox-desc',
            'property' => 'color',
        ),
    ),
    
);