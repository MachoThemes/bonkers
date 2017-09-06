<?php
$bonkers_enable_section = bonkers_get_option( 'bonkers_addons_cta_enable', true );
if ( $bonkers_enable_section || is_customize_preview() ) :

    $bonkers_cta_image = wp_get_attachment_image_src( absint( get_option( 'bonkers_addons_cta_image' ) ), 'full' );
    $bonkers_cta_image = $bonkers_cta_image[0];
    if ( empty( $bonkers_cta_image ) ) {
        $bonkers_cta_image = esc_url( get_template_directory_uri() ) . '/images/jazmin-quaynor-99212.jpg';
    }
    $bonkers_cta_link_title = get_option( 'bonkers_addons_cta_link_title', esc_html__( 'Sign Up', 'bonkers' ) );
?>
    <div id="bonkers-cta-section" class="bonkers-cta-section" <?php if( false == $bonkers_enable_section ): echo 'style="display: none;"'; else: echo 'style="background-image: url(' . esc_url( $bonkers_cta_image ) . ')"'; endif ?>>
        <h2 class="bonkers-cta-title"><?php echo esc_html( get_option( 'bonkers_addons_cta_title', esc_html__( 'Start Creating Beautiful Sites Now!', 'bonkers' ) ) ); ?></h2>
        <a href="#" class="bonkers-cta-button ql_primary_btn"><?php echo esc_html( $bonkers_cta_link_title ); ?></a>
    </div><!-- bonkers-cta-section -->
<?php endif; ?>