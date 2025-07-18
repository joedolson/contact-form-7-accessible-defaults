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
 * Version:     1.1.9
 */

/*
	Copyright 2015-2025  Joseph C Dolson  (email : plugins@joedolson.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Load textdomain.
 */
function acf7_load_textdomain() {
	load_plugin_textdomain( 'contact-form-7-accessible-defaults' );
}
add_action( 'plugins_loaded', 'acf7_load_textdomain' );

/**
 * Return template based on currently selected template.
 *
 * @param string $template Default template for Contact Form 7.
 * @param string $prop Current property producing a template.
 *
 * @return string New default template.
 */
function cf7adf_template( $template, $prop ) {
	$current = ( isset( $_GET['base_form'] ) ) ? sanitize_text_field( $_GET['base_form'] ) : 'basic';
	if ( 'form' === $prop ) {
		switch ( $current ) {
			case 'address':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-subject">' . __( 'Your Subject', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text your-subject id:your-subject] </p>' . "\n\n"
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'Your Address', 'contact-form-7-accessible-defaults' ) . '</legend>' . "\n\n"
					. '<p><label for="address">' . __( 'Address (line 1)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text address id:address]</p>' . "\n\n"
					. '<p><label for="address2">' . __( 'Address (line 2)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text address2 id:address2]</p>' . "\n\n"
					. '<p><label for="city">' . __( 'City', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text city id:city]</p>' . "\n\n"
					. '<p><label for="state">' . __( 'State', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text state id:state]</p>' . "\n\n"
					. '<p><label for="postal">' . __( 'Postal Code', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text postal id:postal]</p>' . "\n\n"
					. '<p><label for="country">' . __( 'Country', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text country id:country]</p>' . "\n\n"
					. '<p>[checkbox mailing use_label_element "Add me to your mailing list!"]</p>' . "\n\n"
					. '</fieldset>' . "\n\n"
					. '<p><label for="your-message">' . __( 'Your Message', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n";
				break;
			case 'reserve':
				$template =
					'<fieldset>' . "\n"
					. '<legend>' . __( 'Reserve a Room', 'contact-form-7-accessible-defaults' ) . '</legend>' . "\n\n"
					. '<p><label for="your-name">' . __( 'Your Name', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="room">' . __( 'Room Choice', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [select room id:room "Honeymoon Suite" "Gate Cottage" "Dungeon"] </p>' . "\n\n"
					. '<p><label for="date-in">' . __( 'Arrival Date', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [date* date-in id:date-in]</p>' . "\n\n"
					. '<p><label for="time-in">' . __( 'Approximate Arrival Time', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [select* time-in id:time-in "10:00" "11:00" "12:00" "13:00" "14:00" "15:00" "16:00" "17:00" "18:00" "19:00" "20:00" "21:00" "22:00"]</p>' . "\n\n"
					. '<p><label for="date-out">' . __( 'Departure Date', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [date* date-out id:date-out]</p>' . "\n\n"
					. '<p><label for="adults">' . __( 'Number of Adults', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [number* adults id:adults min:1]</p>' . "\n\n"
					. '<p><label for="children">' . __( 'Number of Children', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [number* children id:children min:0]</p>' . "\n\n"
					. '<p><label for="your-message">' . __( 'Special Notes', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n"
					. '</fieldset>';
				break;
			case 'subscribe':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'Format', 'contact-form-7-accessible-defaults' ) . '</legend>' . "\n"
					. '[radio format id:format use_label_element "HTML" "Plain Text"]' . "\n"
					. '</fieldset>';
				break;
			case 'upload':
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-upload">' . __( 'Upload', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [file* your-upload id:your-upload] </p>' . "\n\n"
					. '<fieldset>' . "\n"
					. '<legend>' . __( 'File includes:', 'contact-form-7-accessible-defaults' ) . '</legend>' . "\n"
					. '[checkbox format id:format use_label_element "References" "Cover Letter" "Resume" "Curriculum Vitae"]' . "\n"
					. '</fieldset>';
				break;
			case 'basic':
			default:
				$template =
					'<p><label for="your-name">' . __( 'Your Name', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text* your-name id:your-name] </p>' . "\n\n"
					. '<p><label for="your-email">' . __( 'Your Email', 'contact-form-7-accessible-defaults' ) . ' ' . __( '(required)', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [email* your-email id:your-email] </p>' . "\n\n"
					. '<p><label for="your-subject">' . __( 'Your Subject', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [text your-subject id:your-subject] </p>' . "\n\n"
					. '<p><label for="your-message">' . __( 'Your Message', 'contact-form-7-accessible-defaults' ) . '</label><br />' . "\n"
					. '    [textarea your-message id:your-message] </p>' . "\n\n";
		}

		$template = '[response]' . "\n\n" . $template . "\n\n" . '<p>[submit "' . __( 'Send', 'contact-form-7-accessible-defaults' ) . '"]</p>';
		/**
		 * Filter the HTML/Contact Form 7 template passed into the current view.
		 *
		 * @hook cf7adv_template
		 *
		 * @param {string} $template The HTML output for this template.
		 * @param {string} $current The base form string argument selected.
		 *
		 * @return {string}
		 */
		$template = apply_filters( 'cf7adv_template', $template, $current );
	} elseif ( 'mail' === $prop ) {
		// translators: Contact Form 7 placeholder for [your-name] <[your-email]>.
		$from = sprintf( __( 'From: %s', 'contact-form-7-accessible-defaults' ), '[your-name] <[your-email]>' );
		// translators: 1) site name, 2) site URL.
		$sent = sprintf( __( 'This e-mail was sent from a contact form on %1$s (%2$s)', 'contact-form-7-accessible-defaults' ), get_bloginfo( 'name' ), get_bloginfo( 'url' ) );
		// translators: Contact Form 7 placeholder [your-subject].
		$subject = sprintf( __( 'Subject: %s', 'contact-form-7-accessible-defaults' ), '[your-subject]' );
		switch ( $current ) {
			case 'address':
				$template['body'] = $from . "\n" . $subject . "\n\n" . __( 'Address:', 'contact-form-7-accessible-defaults' ) . "\n" . '[address]' . "\n" . '[address2]' . "\n" . '[city]' . "\n" . '[state]' . "\n" . '[postal]' . "\n" . '[country]' . "\n" . "\n" . '[mailing]' . "\n\n" . __( 'Message Body:', 'contact-form-7-accessible-defaults' ) . "\n" . '[your-message]' . "\n\n" . '--' . "\n" . $sent;
				break;
			case 'reserve':
				// translators: Contact Form 7 placeholder for [room].
				$template['subject'] = sprintf( __( 'Reservation request for %s', 'contact-form-7-accessible-defaults' ), '[room]' );
				$template['body']    = $from . "\n"
						// translators: Contact Form 7 placeholder [room].
						. sprintf( __( 'Room Choice: %s', 'contact-form-7-accessible-defaults' ), '[room]' ) . "\n\n"
						. __( 'Arrival Date:', 'contact-form-7-accessible-defaults' ) . "\n" . '[date-in]' . "\n\n"
						. __( 'Approximate Arrival Time:', 'contact-form-7-accessible-defaults' ) . "\n" . '[time-in]' . "\n\n"
						. __( 'Departure Date:', 'contact-form-7-accessible-defaults' ) . "\n" . '[date-out]' . "\n\n"
						. __( 'Number of Adults:', 'contact-form-7-accessible-defaults' ) . "\n" . '[adults]' . "\n\n"
						. __( 'Number of Children:', 'contact-form-7-accessible-defaults' ) . "\n" . '[children]' . "\n\n"
						. __( 'Special notes:', 'contact-form-7-accessible-defaults' ) . "\n" . '[your-message]' . "\n\n"
						. '--' . "\n"
						. $sent;
				break;
			case 'subscribe':
				$template['body'] = $from . "\n"
						. __( 'Subscription Format:', 'contact-form-7-accessible-defaults' ) . "\n" . '[format]' . "\n\n"
						. '--' . "\n"
						. $sent;
				// translators: Contact Form 7 placeholder for [your-name].
				$template['subject'] = sprintf( __( 'New subscription by %s', 'contact-form-7-accessible-defaults' ), '[your-name]' );
				break;
			case 'upload':
				$template['body'] = $from . "\n"
					. __( 'Upload Submitted', 'contact-form-7-accessible-defaults' ) . "\n" . '[your-upload]' . "\n\n"
					. '--' . "\n"
					. $sent;
				// translators: Contact Form 7 placeholder for [your-name].
				$template['subject']     = sprintf( __( 'New file submission from %s', 'contact-form-7-accessible-defaults' ), '[your-name]' );
				$template['attachments'] = '[your-upload]';
				break;
		}
	}

	return $template;
}
add_filter( 'wpcf7_default_template', 'cf7adf_template', 10, 2 );

/**
 * Produce the array of sample forms available
 *
 * @param array $post Current Contact Form 7 Form object.
 *
 * @return array
 */
function cf7adb_forms( $post ) {
	$forms = array(
		'basic'     => __( 'Basic', 'contact-form-7-accessible-defaults' ),
		'address'   => __( 'Contact with Address', 'contact-form-7-accessible-defaults' ),
		'reserve'   => __( 'Reservation', 'contact-form-7-accessible-defaults' ),
		'subscribe' => __( 'Subscription', 'contact-form-7-accessible-defaults' ),
		'upload'    => __( 'File Submission', 'contact-form-7-accessible-defaults' ),
	);
	/**
	 * Filters the array of sample forms. Insert an additional form from a plug-in or theme.
	 *
	 * @hook cf7adb_add_form_select
	 *
	 * @param {array}  $forms array of forms.
	 * @param {object} $post Current Contact Form 7 Form object.
	 *
	 * @return {array}
	 */
	return apply_filters( 'cf7adb_add_form_select', $forms, $post );
}

/**
 * Generate form selector panel.
 *
 * @param array $panels Current Contact Form 7 object.
 *
 * @return array Available contact form panels.
 */
function cf7adb_create_form( $panels ) {
	if ( isset( $_GET['page'] ) && 'wpcf7-new' === $_GET['page'] ) {
		$panels['accessible-contact-forms'] = array(
			'title'    => __( 'Templates', 'contact-form-7-accessible-defaults' ),
			'callback' => 'cf7adb_select_form',
		);
	}

	return $panels;
}
add_filter( 'wpcf7_editor_panels', 'cf7adb_create_form' );

/**
 * Generate list of forms to select for Contact Form 7.
 *
 * @param object $post Contact Form 7 post.
 *
 * @return void
 */
function cf7adb_select_form( $post ) {
	$links           = '';
	$available_forms = cf7adb_forms( $post );
	$locale          = ( isset( $_GET['locale'] ) ) ? $_GET['locale'] : false;
	$base_url        = admin_url( 'admin.php?page=wpcf7-new' );
	if ( $locale ) {
		$base_url = add_query_arg( 'locale', $_GET['locale'], $base_url );
	}
	foreach ( $available_forms as $key => $form ) {
		$url     = add_query_arg( 'base_form', $key, $base_url );
		$current = ( isset( $_GET['base_form'] ) ) ? sanitize_text_field( $_GET['base_form'] ) : 'basic';
		if ( $current === $key ) {
			$links .= "<li class='selected'><strong><span class='dashicons dashicons-yes' aria-hidden='true'></span> <a href='" . esc_url( $url ) . "' aria-current='true'>" . esc_html( $form ) . "</a></strong></li>";
		} else {
			$links .= "<li><a href='" . esc_url( $url ) . "'>" . esc_html( $form ) . "</a></li>";
		}
	}
	if ( $links ) {
		$links = '
			<h3>' . esc_html__( 'Accessible Form Templates', 'contact-form-7-accessible-defaults' ) . '</h3>
			<p>' . esc_html__( 'Templates provide a default selection of fields configured accessibly. You can modify and extend the forms once selected.', 'contact-form-7-accessible-defaults' ) . "</p>
			<div class='select-accessible-template'>
				<ul class='cf7adb'>
					$links
				</ul>
			</div>";

		echo $links;
	}
}

/**
 * Enqueue scripting & CSS in CF7.
 */
function cf7adb_enqueue_scripts() {
	wp_enqueue_style( 'cf7adb', plugins_url( 'css/cf7adb.css', __FILE__ ) );
	wp_enqueue_script( 'cf7adbJs', plugins_url( 'js/cf7adb.js', __FILE__ ) );
	wp_localize_script(
		'cf7adbJs',
		'cf7adb',
		array(
			'title' => esc_html__( 'Contact Form 7: Accessible Defaults', 'contact-form-7-accessible-defaults' ),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'cf7adb_enqueue_scripts' );
