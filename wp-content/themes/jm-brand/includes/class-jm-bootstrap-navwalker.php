<?php
class JM_Bootstrap_Navwalker extends WP_Bootstrap_Navwalker {
    /**
     * Starts the element output.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   wp_nav_menu() arguments.
     * @param int    $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Check if the current item is the active page
        $is_active = in_array('current-menu-item', $item->classes) || in_array('current-page-ancestor', $item->classes);
        
        // Add 'active' class if the current item is the active page
        $classes = $is_active ? array('nav-link', 'active') : array('nav-link');

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $output .= '<li class="nav-item">';
        $output .= '<a class="' . implode(' ', $classes) . '"'. $attributes .'>';
        $output .= $item->title;
        $output .= '</a>';
    }
}

?>