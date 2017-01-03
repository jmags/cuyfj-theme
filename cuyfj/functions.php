<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function come_up_you_fearful_sidebar() {
    register_sidebar(array(
        'name'          => 'sidebar',
        'id'            => 'cuyfj-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ));

}
add_action('widgets_init', 'come_up_you_fearful_sidebar');
?>