<?php

/**
* Provide a admin area common other products view for the plugin
*
* This file is used to markup the admin-facing aspects of the plugin.
*
* @link       https://catchthemes.com
* @since      1.0.0
*
* @package    Essential_Content_Types
* @subpackage Essential_Content_Types/admin/partials
*/
?>

<div class="other-catchthemes-products">
    <div class="container">
        <div class="module-container"> 
            <div id="module-premium-themes" class="catch-modules">
                <div class="module-content">
                    <a class="modules-thumbnail" href="https://catchthemes.com/themes/category/premium/" target="_blank" title="<?php esc_attr_e( 'View Premium Themes', 'essential-content-types' ); ?>">
                            <img src="<?php echo esc_url( plugins_url( 'images/premium-themes.jpg', dirname(__FILE__) ) ) ; ?>" alt="<?php esc_attr_e( 'Premium Themes', 'essential-content-types' ); ?>" title ="<?php esc_attr_e( 'Premium Themes', 'essential-content-types' ); ?>">
                    </a>

                    <a class="modules-link" href="https://catchthemes.com/themes/category/premium/" target="_blank" title="<?php esc_attr_e( 'View Premium Themes', 'essential-content-types' ); ?>"><?php esc_html_e( 'Premium Themes', 'essential-content-types' ); ?></a>

                    <a class="more-details" href="https://catchthemes.com/themes/category/premium/" target="_blank"><?php esc_html_e( 'View Themes', 'essential-content-types' ); ?></a>
                </div>          
            </div><!-- #module-premium-themes -->

            <div id="module-premium-plugins" class="catch-modules">
                <div class="module-content">
                    <a class="modules-thumbnail" href="https://catchthemes.com/wp-plugins/" target="_blank" title="<?php esc_attr_e( 'View Plugins', 'essential-content-types' ); ?>">
                        <img src="<?php echo esc_url( plugins_url( 'images/free-plugins.jpg', dirname(__FILE__) ) ) ; ?>" alt="<?php esc_attr_e( 'Free Plugins', 'essential-content-types' ); ?>" title ="<?php esc_attr_e( 'Free Plugins', 'essential-content-types' ); ?>">
                    </a>

                    <a class="modules-link" href="https://catchthemes.com/wp-plugins/" target="_blank" title="<?php esc_attr_e( 'View Free Plugins', 'essential-content-types' ); ?>"><?php esc_html_e( 'Free Plugins', 'essential-content-types' ); ?></a>

                    <a class="more-details" href="https://catchthemes.com/wp-plugins/" target="_blank"><?php esc_html_e( 'View Plugins', 'essential-content-types' ); ?></a>
                </div>          
            </div><!-- #module-free-plugins -->

            <div id="module-free-themes" class="catch-modules">
                <div class="module-content">
                    <a class="modules-thumbnail" href="https://catchthemes.com/themes/category/free/" target="_blank" title="<?php esc_attr_e( 'View Free Themes', 'essential-content-types' ); ?>">
                        <img src="<?php echo esc_url( plugins_url( 'images/free-themes.jpg', dirname(__FILE__) ) ) ; ?>" alt="<?php esc_attr_e( 'Free Themes', 'essential-content-types' ); ?>" title ="<?php esc_attr_e( 'Free Themes', 'essential-content-types' ); ?>">
                    </a>

                    <a class="modules-link" href="https://catchthemes.com/themes/category/free/" target="_blank" title="<?php esc_attr_e( 'View Free Themes', 'essential-content-types' ); ?>"><?php esc_html_e( 'Free Themes', 'essential-content-types' ); ?></a>

                    <a class="more-details" href="https://catchthemes.com/themes/category/free/" target="_blank"><?php esc_html_e( 'View Themes', 'essential-content-types' ); ?></a>
                </div>          
            </div><!-- #module-free-themes -->
        </div><!-- #module-featured-content -->
    </div><!-- .container -->
</div><!-- .other-catchthemes-products -->