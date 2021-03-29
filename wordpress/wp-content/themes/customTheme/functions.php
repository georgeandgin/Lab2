<?php

function book_post_type(){
    $args = array(
        'label'=> 'Books',
        'public'=> true
    );
    register_post_type('book',$args);

    $taxArgs = array(
        'public'=> true,
        'label'=> 'Genre',
        'hierarchical' => false
    );
    register_taxonomy('genre','book',$taxArgs);
}

add_action('init','book_post_type');


?>