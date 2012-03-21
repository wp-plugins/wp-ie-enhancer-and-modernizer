<?php
/*
Plugin Name: IE Enhancer and Modernizer
Plugin URI: http://slangji.wordpress.com/wp-ie-enhancer-and-modernizer/
Description: Make IE standards-compliant browser. Fixes HTML/CSS issues, fixes transparent PNG under IE5/IE6, shiv (X)HTML5 elements and render to latest version. Work under GPLv2 License. | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a>
Version: 2012.0321.1731
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 2.1
Tested up to: 3.4
License: GPLv2
 *
 * [IE Enhancer and Modernizer](http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/) WordPress PlugIn
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 *  The license for this software can be found @ http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright © 2010-2011 [sLa](http://wordpress.org/extend/plugins/profile/slangji) (slangji[at]gmail[dot]com)
 */
/**
 * @package IE Enhancer and Modernizer
 * @subpackage WordPress PlugIn
 * @since 2.1.0
 * @version 2012.0321.1731
 * @author sLa
 * @license GPLv2
 *
 * Enhancer and Modernizer IE WordPress Surfing Expirience.
 */
if ( !function_exists( 'add_action' ) ) {
	header(	'Status 403 Forbidden' );
	header( 'HTTP/1.0 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
	}
?>
<?php
function wpieeam() {
	echo '
	<meta http-equiv="Imagetoolbar" content="no">
	<meta http-equiv="X-Content-Type-Options" content="nosniff">
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="X-XSS-Protection" content="1;mode=block">
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/trunk/lib/IE9.js">IE7_PNG_SUFFIX=".png";</script>
	<script src="http://ie7-js.googlecode.com/svn/trunk/lib/ie7-squish.js</script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	' ;
	}
	add_action( 'wp_head', 'wpieeam' )
?>
<?php
function wpieeam_log() {
	echo"\n<!--Plugin IE Enhancer and Modernizer 2012.0321.1731 Active-->";
	}
	add_action( 'wp_head', 'wpieeam_log' );
	add_action( 'wp_footer', 'wpieeam_log' )
?>