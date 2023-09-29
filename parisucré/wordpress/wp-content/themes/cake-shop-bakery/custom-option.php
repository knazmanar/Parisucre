<?php

    $cake_shop_bakery_theme_css= "";

    $cake_shop_bakery_scroll_position = get_theme_mod( 'cake_shop_bakery_scroll_top_position','Right');
    if($cake_shop_bakery_scroll_position == 'Right'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='right: 20px;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_scroll_position == 'Left'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='left: 20px;';
        $cake_shop_bakery_theme_css .='}';
    }else if($cake_shop_bakery_scroll_position == 'Center'){
        $cake_shop_bakery_theme_css .='#button{';
            $cake_shop_bakery_theme_css .='right: 50%;left: 50%;';
        $cake_shop_bakery_theme_css .='}';
    }