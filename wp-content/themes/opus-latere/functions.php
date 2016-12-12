<?php
/**
 * Functions
 * Where the magic happens ...
 *
 * @package     OpusLatere
 * @since       0.1
 *
 * @author      Opus Primus <in.opus.primus@gmail.com>
 * @copyright   Copyright (c) 2015, Opus Primus
 *
 * This file is part of Opus Latere.
 *
 * Opus Primus is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/** Add wrapper for content to include breadcrumbs */
function opus_latere_breadcrumbs_wrapper_open() {
	echo '<div id="opus_latere_content_wrapper">';
}

add_action( 'opus_show_the_trail_before', 'opus_latere_breadcrumbs_wrapper_open' );

function opus_latere_breadcrumbs_wrapper_close() {
	echo '</div><!-- #opus_latere_content_wrapper -->';
}

add_action( 'opus_show_the_trail_after', 'opus_latere_breadcrumbs_wrapper_close' );

/** Add header wrapper to over-ride menu styles */
function opus_latere_header_container_open() {
	echo '<div class="header-left-side">';
}

add_action( 'opus_header_before', 'opus_latere_header_container_open' );

function opus_latere_header_container_close() {
	echo '</div><!-- .header-left-side -->';
}

add_action( 'opus_header_after', 'opus_latere_header_container_close' );

/** Add navigation wrappers for more menu style over-rides */
function opus_latere_nav_before() {
	echo '<div id="vertical-menu">';
}

add_action( 'opus_nav_before', 'opus_latere_nav_before' );

function opus_latere_nav_after() {
	echo '</div><!-- #vertical-menu -->';
}

add_action( 'opus_nav_after', 'opus_latere_nav_after' );

/**
 * Enqueue Scripts and Styles
 *
 * @package OpusLatere
 * @since   0.1
 *
 * @uses    get_stylesheet_directory_uri
 * @uses    get_template_directory_uri
 * @uses    wp_enqueue_script
 * @uses    wp_enqueue_style
 * @uses    wp_get_theme
 */
function opus_latere_enqueue_scripts_and_styles() {

	/** @var object $opus_latere_theme_data - retrieve theme data */
	$opus_latere_theme_data = wp_get_theme();

	/** @var object $opus_primus_parent_theme_data - retrieve parent theme data */
	$opus_primus_parent_theme_data = $opus_latere_theme_data->parent();

	/** Enqueue Theme Scripts */
	/** Enqueue Opus Latere JavaScripts which will enqueue jQuery as a dependency */
	wp_enqueue_script( 'opus-latere-js', get_stylesheet_directory_uri() . '/js/opus-latere.js', array( 'jquery' ), $opus_latere_theme_data['Version'], true );

	/** Enqueue Theme Styles */
	/** Parent-Theme stylesheets - base stylesheet */
	wp_enqueue_style( 'Opus-Primus-Parent-Theme', get_template_directory_uri() . '/style.css', array(), $opus_primus_parent_theme_data['Version'], 'screen' );
	/** Main Theme Elements with dashicons dependency */
	wp_enqueue_style( 'Opus-Latere', get_stylesheet_directory_uri() . '/css/opus-latere.css', array( 'dashicons' ), $opus_latere_theme_data['Version'], 'screen' );
}

add_action( 'wp_enqueue_scripts', 'opus_latere_enqueue_scripts_and_styles' );