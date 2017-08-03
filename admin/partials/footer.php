<?php

/**
 * Provide a admin area common footer view for the plugin
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

<footer id="colophon" class="site-footer" role="content-info">
    <div class="footer-container">
        <nav class="footer-navigation" role="navigation" aria-label="Footer Menu">
            <div class="menu-footer-container">
                <ul class="menu-footer">
                    <li>
                        <a href="https://catchthemes.com/donate" target="_blank"><?php esc_html_e( 'Donate', 'essential-content-types' ) ; ?></a>
                    </li>

                    <li>
                        <a href="https://catchthemes.com/support-forum" target="_blank"><?php esc_html_e( 'Support Forum', 'essential-content-types' ) ; ?></a>
                    </li>
                    
                    <li>
                        <a href="https://catchthemes.com/wp-plugins/essential-content-types" target="_blank"><?php esc_html_e( 'Plugin Details', 'essential-content-types' ) ; ?></a>
                    </li>
                    
                    <li>
                        <a href="https://facebook.com/catchthemes" target="_blank"><?php esc_html_e( 'Facebook', 'essential-content-types' ) ; ?></a>
                    </li>
                    
                    <li>
                        <a href="https://twitter.com/catchthemes" target="_blank"><?php esc_html_e( 'Twitter', 'essential-content-types' ) ; ?></a>
                    </li>
                    
                    <li>
                        <a href="https://wordpress.org/support/plugin/to-top/reviews/?rate=5#new-post" target="_blank"><?php esc_html_e( '5 Star Rating', 'essential-content-types' ) ; ?></a>
                    </li>
                </ul><!-- .menu-footer -->
            </div><!-- .menu-footer-container -->
        </nav><!-- .footer-navigation -->
    </div><!-- .footer-container -->
</footer><!-- #colophon -->