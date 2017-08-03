<?php

/**
 * Provide a admin area view for the plugin
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

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wpbody-content" aria-label="Main Content">
    <header id="masthead" class="site-header" role="banner">
        <div class="wrapper">
            <div id="site-branding">
                <h1 class="site-title"><a href="#">CATCH <span class="site-title-additional">WEB TOOLS</span></a></h1>
            </div>

            <nav id="main-nav" class="ect-main-navigation" aria-label="Priamry Menu" role="navigation">
                <ul>
                    <li id="list-item-1"><a href="#" id="display-none" class="active">dashboard</a>
                    <span class="setting"><i class="dashicons dashicons-menu" aria-hidden="true"></i></span>
                        <ul class="drop-menu" >
                            <li><a href="#" class="active">dashboard</a></li>
                            <li><a href="">webmaster tools</a></li>
                            <li><a href="">custom CSS</a></li>
                            <li><a href="">social icons</a></li>
                            <li><a href="">open graph</a></li>
                            <li><a href="">SEO</a></li>
                            <li><a href="">to top</a></li>  
                        </ul>       
                    </li>       
                </ul>   
            </nav>
        </div><!-- wrapper-->   
    </header> <!-- masthead -->

    <div id="dashboard">
        <div class="container">
            <div id="plugin-description">
                <p>Catch Web Tools is a simple and lightweight WordPress plugin to Help you manage your WordPress site. Power up your WordPress site with powerful features that were till now only available to Catch Themes users. We currently offer Webmaster Tools, Open Graph, Custom CSS, Social Icons, Catch IDs and basic SEO Optimization. </p>
                </div>

            <div id="module-container" class="wrapper">         
                <div id="module-webmaster-tools" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">WebMaster tools</h3>
                        <div class="switch">
                            <input type="checkbox" id="checkbox1" class="input-switch">
                            <label for="checkbox1"></label>
                        </div>
                    </div>

                    <div class="module-content">
                        <p>Webmaster Tools gives you an option to add in the Site Verfication Code and Header and Footer Script required to manage your site.
                        </p>    
                    </div>          
                </div>

                <div id="module-customcss" class="catch-modules">
                    <div class="module-header">
                        <h3 class="module-title">Custom CSS</h3>                    
                    </div>
                        
                    <div class="module-content">
                        <p>Custom CSS gives you an option to add in your CSS to your WordPress site without building Child Theme. You can just add your Custom CSS and save, it will show up in the frontend head section. Leave it blank if it is not needed.</p>
                    </div>
                </div>

                <div id="module-catchids" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">Catch IDs</h3> 
                        <div class="switch">
                            <input type="checkbox" id="checkbox2" class="input-switch">
                            <label for="checkbox2"></label>
                        </div>
                    </div>

                    <div class="module-content">
                        <p>Catch IDs will show Post ID, Page ID, Media ID, Links ID, Category ID, ag ID and UserID in the respective admin section tables.</p>
                    </div>
                </div>

                <div id="module-socialicons" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">Social Icons</h3>
                        <div class="switch">
                            <input type="checkbox" id="checkbox3" class="input-switch">
                            <label for="checkbox3"></label>
                        </div>
                    </div>

                    <div class="module-content">
                        <p>You can add Social Icons by adding in Widgets in your Sidebar or by adding in Shortcode in your Page/Post Content or by adding the function in your template files.</p>
                    </div>
                </div>

                <div id="module-opengraph" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">Open Graph</h3>
                        <div class="switch">
                            <input type="checkbox" id="checkbox4" class="input-switch">
                            <label for="checkbox4"></label>
                        </div>
                    </div>  
                        
                    <div class="module-content">
                        <p>The Open Graph protocol enables your site to become a rich object in a social graph. For instance, this is used on Facebook to allow any web page to have the same functionality as any other object on Facebook. </p>       
                    </div>
                </div>

                <div id="module-seo" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">SEO (BETA version) </h3>   
                        <div class="switch">
                            <input type="checkbox" id="checkbox5" class="input-switch">
                            <label for="checkbox5"></label>
                        </div>      
                    </div>  

                    <div class="module-content">
                        <p>SEO is in beta version. SEO can be used to add SEO meta tags to Homepage, specific Pages or Posts and Categories page. This section adds SEO meta data to site's section.</p>
                    </div>
                </div>

                <div id="module-catchupdater" class="catch-modules">
                    <div class="module-header">
                        <h3 class="module-title">Catch Updater</h3>
                    </div>

                    <div class="module-content">
                        <p>Catch Updater is a simple and lightweight WordPress Theme Updater Module, which enables you to update your themes easily using WordPress Admin Panel.</p>
                    </div>  
                </div>

                <div id="module-to-top" class="catch-modules">
                    <div class="module-header inactive">
                        <h3 class="module-title">To Top</h3>
                        <div class="switch">
                            <input type="checkbox" id="checkbox6" class="input-switch">
                            <label for="checkbox6"></label>
                        </div>
                    </div>

                    <div class="module-content">
                        <p>To Top plugin allows the visitor as well as admin to easily scroll back to the top of the page, with fully customizable options and ability to use image.</p>
                    </div>  
                </div>

                <div id="module-security-tips" class="catch-module-long">
                    <div class="module-header">
                        <h3 class="module-title">Security Tips</h3>
                    </div>
                    
                    <div class="module-content">
                        <p>Caution!!! A user with username: admin exists, need to rename this username or remove it</p>
                        <p>Caution!!! WordPress Table Prefix is "wp_", need to change this prefix</p>
                        <p>Congratulations!!! Your WordPress version is the latest.</p>
                    </div>
                </div>                      
            </div> <!-- Module Container -->
        </div> <!-- Container-->
    </div> <!-- Dashboard -->


    <footer id="colophon" class="site-footer" role="content-info">
        <div class="footer-container">
            <nav class="footer-navigation" role="navigation" aria-label="Footer Menu">
                <div class="menu-footer-container">
                    <ul class="menu-footer">
                        <li><a href="#">support Forum</a></li>
                        <li><a href="#">Plugin Details</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">5 Star Rating</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>
</div> <!-- Main Content-->