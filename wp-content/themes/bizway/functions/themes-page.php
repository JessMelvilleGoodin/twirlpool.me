<?php

// Add scripts and stylesheet

function bizway_enqueue_styles() {
    global $themename, $themeslug, $options;
    wp_register_style($themeslug . 'storecss', get_template_directory_uri() . '/functions/theme-page-style.css');
    wp_enqueue_style($themeslug . 'storecss');
}

// Add page to the menu
function bizway_add_menu() {
    $page = add_theme_page('InkThemes Themes Page', 'InkThemes Themes', 'administrator', 'themes', 'bizway_page_init');
    add_action('admin_print_styles-' . $page, 'bizway_enqueue_styles');
}

add_action('admin_menu', 'bizway_add_menu');

// Create the page
function bizway_page_init() {
    $root = get_template_directory_uri();
    ?>	
    <div id="contain" class="theme_page">
        <div id="themesheader">
            <a href="<?php echo esc_url("http://www.inkthemes.com/"); ?>" target="_blank"><img src="<?php echo $root; ?>/functions/images/inkthemes-logo.png" /></a>
            <br/>           
            <div style="clear: both;"></div>
        </div>
        <div id="container">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/colorway.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                        <?php _e('Colorway Theme', 'bizway'); ?>
                    </a>
                </div>
                <br />
                <?php _e('The best thing about Colorway Theme is the ease with the help of which you can convert your Website in various different Niches. &#8220;Your Clients Would Love Their Site & You Would smile in the back thinking about the Time That You Spend Building their Sites.&#8221;', 'bizway'); ?>
                <br /><br />
                <?php _e('Colorway   Theme is perfect for quick and easy blogging with a clean and modern interface and tons of features. The layout does not distract from your content, which is vital for a site devoted to business & blogging.', 'bizway'); ?> <br /><br />
                <div class="buy">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                        <?php _e('Buy Colorway Theme', 'bizway'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo esc_url("http://wordpress.org/extend/themes/colorway"); ?>" target="_blank">
                        <?php _e('Try Colorway Lite for FREE', 'bizway'); ?>
                    </a>
                </div>

            </div>

            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/dzonia-premium-wordpress-themes/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/dzonia.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/dzonia-premium-wordpress-themes/"); ?>" target="_blank">
                        <?php _e('Dzonia Theme', 'bizway'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Dzonia Theme is a WordPress Theme to get your website ready quickly and comes with a Professional and elegant looks overall. The Theme can be easily setup using the builtin Themes Options Panel, which is flexible and allows your website to have a great presentation.', 'bizway'); ?> 
                <br /><br />
                <?php _e('The Dzonia Theme comes with multiple color options and the site can be easily converted into a professional business website within few moments. Dzonia Theme comes with multiple Page Templates like the Blog Page, Fullwidth Page, Gallery Page, Contact Page and much much more.', 'bizway'); ?>
                <br /><br />
                <div class="buy">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/dzonia-premium-wordpress-themes/"); ?>" target="_blank">
                        <?php _e('Buy Dzonia Theme', 'bizway'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo esc_url("http://wordpress.org/extend/themes/dzonia-lite"); ?>" target="_blank">
                        <?php _e('Try Dzonia Lite for FREE', 'bizway'); ?>
                    </a>
                </div>
            </div>

            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/cloriato-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/cloriato.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/cloriato-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Cloriato Theme', 'bizway'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Cloriato WordPress Theme is available in 6 different colors schemes. Cloriato Theme can be used to built websites in various different Niches very easily. The Website built using Cloriato Theme is super easy to build, its really very simplistic in design and supports areas on the Home Page for including images and Videos.', 'bizway'); ?> 
                <br/>
                <br/>
                <?php _e('Your visitors would love to see the whole content clearly. Cloriato Theme had several useful theme options to allow changing and manipulating literally everything on your site, still keeping everything simple and easy.', 'bizway'); ?>                
                <div class="buy">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/cloriato-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy Cloriato Theme', 'bizway'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo esc_url("http://wordpress.org/extend/themes/cloriato-lite"); ?>" target="_blank">
                        <?php _e('Try Cloriato Lite for FREE', 'bizway'); ?>
                    </a>
                </div>
            </div>
            <br />
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/andrina-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/andrina.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/andrina-theme/"); ?>" target="_blank">
                        <?php _e('Andrina Theme', 'bizway'); ?>
                    </a>
                </div>
                <br />
                <?php _e('The Andrina Theme allows the user to show his blogposts on the frontpage. Hence the main Home Page is always updated on the release of new blogposts. Hence the site is more Search Engine friendly.', 'bizway'); ?>
                <br/>
                <br/>
                <?php _e('The Theme had a simple layout which attracts the Client to the Website. Also, the professional and Clean design always suites the requirements of almost any kind of business Website. Andrina Theme is very simple to built and you don&#39;t even need to be a code junkie to start using the Andrina Theme and get your website ready.', 'bizway'); ?>
                <br /> <br />
                <div class="buy">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/andrina-theme/"); ?>" target="_blank">
                        <?php _e('Buy Andrina Theme', 'bizway'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo esc_url("http://wordpress.org/extend/themes/andrina-lite"); ?>" target="_blank">
                        <?php _e('Try Andrina Lite for FREE', 'bizway'); ?>
                    </a>
                </div>
            </div>

            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/themia-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/themia.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/themia-theme/"); ?>" target="_blank">
                        <?php _e('Themia Theme', 'bizway'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Themia Theme is one of the easiest theme to built your website. It comes with a Themes Options Panel through which you can control almost everything in your website. Themia WordPress Theme is well designed, unique theme which can work awesome for various different Niches.', 'bizway'); ?> 
                <br/><br/>
                <?php _e('Themia Combines pure elegance with timeless design and superb technical qualities. Themia WordPress Theme topic offers an excellent system for administration menu and its really very easy to customize and built your website.', 'bizway'); ?>
                <br /> <br />
                <div class="buy">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/themia-theme/"); ?>" target="_blank">
                        <?php _e('Buy Themia Theme', 'bizway'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="<?php echo esc_url("http://wordpress.org/extend/themes/themia-lite"); ?>">
                        <?php _e('Try Themia Lite for FREE', 'bizway'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
