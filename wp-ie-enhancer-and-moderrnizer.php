<?php

/*
Plugin Name: WP IE Enhancer and Modernizer
Plugin URI: http://slangji.wordpress.com/wp-ie-enhancer-and-modernizer/
Description: Make IE standards-compliant browser. Fix HTML/CSS issues and transparent PNG under IE6/5, shiv (X)HTML5 elements, render latest version. Enhancer and Modernizer IE WordPress Surfing Expirience. The configuration of this Plugin is Automattic! Work under GPLv2 or later License. GNU style indentation coding standard compatible. Meet detailed guidelines quality requirements.
Version: 2013.0629.0138
Author: sLaNGjI
Author URI: http://slangji.wordpress.com/
Requires at least: 2.1
Tested up to: 3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * [IE Enhancer and Modernizer](http://wordpress.org/plugins/wp-ie-enhancer-and-modernizer/) Enhancer and Modernizer IE WordPress Surfing Expirience
 *
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangjis[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLaNGjI](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2008-2013 [sLaNGjI](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLaNGjI](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [sLaNGjI](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */

	/**
	 * @package WP IE Enhancer and Modernizer
	 * @subpackage WordPress PlugIn
	 * @description Enhancer and Modernizer IE WordPress Surfing Expirience
	 * @since 2.1.0
	 * @tested 3.8.0
	 * @version 2013.0629.0138
	 * @status STABLE (trunk) release
	 * @development Code in Becoming!
	 * @author sLaNGjI
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keytag 74be16979710d4c4e7c6647856088456
	 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	global $wp_version;

	if ( $wp_version < 2.1 )
		{
			wp_die( __( 'This Plugin Requires WordPress 2.1+ or Greater: Activation Stopped!' ) );
		}

	function wpieeam()
		{
			echo '
	<!--Start IE Enhancer and Modernizer Code-->
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<!--[if IE 6]>
	<meta http-equiv="Imagetoolbar" content="no">
	<![endif]-->
	<!--[if IE 8]>
	<meta http-equiv="X-Content-Type-Options" content="nosniff">
	<meta http-equiv="X-XSS-Protection" content="1;mode=block">
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/trunk/lib/IE9.js">IE7_PNG_SUFFIX=".png";</script>
	<script src="http://ie7-js.googlecode.com/svn/trunk/lib/ie7-squish.js</script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--End IE Enhancer and Modernizer Code-->
	';
		}
	add_action( 'wp_head', 'wpieeam' );

	function wpieeam_header_footer_log()
		{
			echo "\n<!--Plugin IE Enhancer and Modernizer 2012.0322.2238 Active - Tag: ".md5(md5("".""))."-->\n";
		}
	add_action( 'wp_head', 'wpieeam_header_footer_log' );
	add_action( 'wp_footer', 'wpieeam_header_footer_log' );

?>