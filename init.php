<?php
/**
 * Contact Form 7: Accessible Defaults
 *
 * @package     Contact Form 7: Accessible Defaults
 * @author      Joseph Dolson
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Contact Form 7: Accessible Defaults
 * Plugin URI:  https://github.com/joedolson/contact-form-7-accessible-defaults/
 * Description: Sets up an accessible default form when using Contact Form 7.
 * Author:      Joseph Dolson
 * Author URI:  https://www.joedolson.com/
 * Text Domain: accessible-contact-form-7
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/license/gpl-2.0.txt
 * Domain Path: lang
 * Version:     1.1.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include( dirname( __FILE__ ) . '/src/contact-form-7-accessible-form.php' );
