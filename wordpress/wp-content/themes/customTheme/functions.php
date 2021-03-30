<?php


function project_post_type(){
    $args = array(
        'label'=> 'Project',
        'public'=> true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title','thumbnail','editor','author')
    );
    register_post_type('project',$args);

    $taxArgs = array(
        'label'=> 'Project Type',
        'hierarchical' => true,
        'name'=>'project_type',
        'object_type'=>'project'
    );
    register_taxonomy('project-type','project',$taxArgs);


    $taxArgs1 = array(
        'label'=> 'Project Skill',
        'hierarchical' => false,
        'name'=>'project_skill',
        'object_type'=>'project'
    );
    register_taxonomy('project-skill','project',$taxArgs1);

}

add_action('init','project_post_type');




?>