<?php

function tc_themes_thumbnails(){

add_theme_support("post-thumbnails");

}

add_action("init","tc_themes_thumbnails");

function tc_sidebars_menu(){

    register_sidebar([
        "id"=>"left-sidebar",
        "name"=>"left-sidebar",
        'before-widget'=>'<div class="widget">',
        'after-widget'=>'</div>'


    ]);

    register_nav_menus([
        "top-menu" => "Top Menu"
    ]);

}

add_action ("init", "tc_sidebars_menu" );
