<?php
/*
Plugin Name: BNS Early Adopter
Plugin URI: http://buynowshop.com/plugins/bns-early-adopter
Description: Show off you are an early adopter of WordPress (alpha and/or beta versions)
Version: 0.1-alpha
TextDomain: bns-ea
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Early Adopter WordPress plugin
 *
 * Show off you are an early adopter of WordPress (alpha and/or beta versions)
 *
 * @package     BNS_Early_Adopter
 * @link        http://buynowshop.com/plugins/bns-early-adopter/
 * @link        https://github.com/Cais/bns-early-adopter/
 * @link        http://wordpress.org/extend/plugins/bns-early-adopter/
 * @version     0.1
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
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
 *
 * Last revised February 29, 2012
 * Initial Release
 */

/**
 * Check installed WordPress version for compatibility
 * @todo Verify and reference which WordPress version is required and due to what function call
 */
global $wp_version;
$exit_message = 'BNS Early Adopter requires WordPress version 1.0 or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please Update!</a>';
if ( version_compare( $wp_version, "1.0", "<" ) )
    exit ( $exit_message );

/**
 * BNS Early Adopter TextDomain
 * Make plugin text available for translation (i18n)
 *
 * @package:    BNS_Early_Adopter
 * @since:      0.1
 *
 * @internal translation files are expected to be found in the plugin root folder / directory.
 * @internal `bns-ea` is being used in place of `bns-early-adopter`
 */
load_plugin_textdomain( 'bns-ea' );
// End: BNS Early Adopter TextDomain
