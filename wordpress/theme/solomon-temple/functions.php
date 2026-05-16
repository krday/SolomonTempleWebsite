<?php
function solomon_temple_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'solomon_temple_setup' );

function solomon_temple_scripts() {
    wp_enqueue_style(
        'solomon-temple-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Source+Sans+3:wght@300;400;600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'solomon-temple-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'solomon_temple_scripts' );

// ── Custom page routing (no WP admin pages needed) ──────────────────────
add_action( 'template_redirect', function () {
    $path = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    $routes = [
        'announcements-manager' => 'announcements-manager.php',
        'flyer-generator'       => 'flyer-generator.php',
        'staff-guide'           => 'staff-guide.php',
    ];

    if ( array_key_exists( $path, $routes ) ) {
        include get_template_directory() . '/' . $routes[ $path ];
        exit;
    }
} );

// ── Announcements REST API ───────────────────────────────────────────────
add_action( 'rest_api_init', function () {
    register_rest_route( 'st/v1', '/announcements', [
        [
            'methods'             => 'GET',
            'callback'            => function () {
                $raw = get_option( 'st_announcements', '[]' );
                $arr = json_decode( $raw, true );
                return rest_ensure_response( is_array( $arr ) ? $arr : [] );
            },
            'permission_callback' => '__return_true',
        ],
        [
            'methods'             => 'POST',
            'callback'            => function ( WP_REST_Request $req ) {
                $body = $req->get_json_params();
                if ( ! is_array( $body ) ) {
                    return new WP_Error( 'invalid_data', 'Expected JSON array', [ 'status' => 400 ] );
                }
                $clean = array_map( function ( $a ) {
                    return [
                        'id'    => isset( $a['id'] )    ? absint( $a['id'] )                    : 0,
                        'title' => isset( $a['title'] ) ? sanitize_text_field( $a['title'] )    : '',
                        'text'  => isset( $a['text'] )  ? sanitize_textarea_field( $a['text'] ) : '',
                        'start' => isset( $a['start'] ) ? sanitize_text_field( $a['start'] )    : '',
                        'end'   => isset( $a['end'] )   ? sanitize_text_field( $a['end'] )      : '',
                    ];
                }, $body );
                update_option( 'st_announcements', wp_json_encode( $clean ) );
                return rest_ensure_response( $clean );
            },
            'permission_callback' => function ( WP_REST_Request $req ) {
                $token  = $req->get_header( 'X-ST-Token' );
                $stored = get_transient( 'st_ann_token' );
                return $token && $stored && hash_equals( $stored, $token );
            },
        ],
    ] );
} );
