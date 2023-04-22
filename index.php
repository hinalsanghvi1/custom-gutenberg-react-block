<?php
/*
Plugin Name: Custom Gutenberg React Block
Description: Custom Gutenberg React Block, easy to use and make.
Version: 1.0
Author: Hinal Sanghvi
Author URI: https://github.com/hinalsanghvi1/
Text Domain: gutenberg_block
*/

if( ! defined ('ABSPATH')) exit; // Exit if Accessed Directly

Class gutenbergBlock{
    function __construct(){
        add_action('init',array($this,'adminAssets'));
    }

    function adminAssets(){
        wp_enqueue_script('customblock',plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks','wp-element'));
        register_block_type('gutenbergreactblock/gutenbergblock',array(
            'editor_script'=>'customblock',
            'render_callback'=>array($this,'theHtml')
        ));
    }
        function theHtml($attributes) {
            ob_start();
            ?>
                <h2>Author First Name is <?php echo esc_html($attributes['fName']); ?> and Last name is <?php echo esc_html($attributes['lName']); ?> !!!!</h2>
    <?php return ob_get_clean();
        }
   
}
$gutenbergblock = new gutenbergBlock();
