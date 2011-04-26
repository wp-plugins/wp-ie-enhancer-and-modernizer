<?php
/*
Plugin Name: IE Enhancer and Modernizer
Plugin URI: http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/
Description: IE <code>Enhancer and Modernizer</code> WordPress Surfing Expirience for old Microsoft Browsers | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Memory Load Usage on Footer">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Schedule Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend and User Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a>
Version: 2011.0427.0156
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/sla/
Requires at least: 2.1
Tested up to: 3.2
License: GPLv2 or later
License URI: http://plugins.svn.wordpress.org/wp-ie-enhancer-and-modernizer/trunk/gfpl-2.0.txt
Tags: Make old Microsoft Internet Explorer behave like a standards-compliant browser: fixes many HTML and CSS issues, makes transparent PNG work correctly under IE5 and IE6, shiv to recognise and style the HTML5 elements, forces to render the page as the latest version available 8,9,10.
 *
 *  WP IE Enhancer and Modernizer - WordPress PlugIn
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 *  as published by the Free Software Foundation; either [version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Part of Copyright © 2011 belongs to sLaT ™ [LavaTeam] NGjI ™ [NewGenerationInterfaces] (slangji [at] gmail [dot] com)
 * and a portion to their respective owners. Not For Resale or Business Purpose.
 */
/**
 * @package WP IE Enhancer and Modernizer
 * @subpackage WordPress PlugIn
 * @since 2.1.0
 * @version 2011.0427.0156
 *
 * WordPress old Microsof IE Enhancer and Modernizer Surfing Expirience.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}?><?php
function wpieeam_log(){echo"<!--Plugin WP IE Enhancer and Modernizer 2011.0427.0156 Active-->";}add_action('wp_head','wpieeam_log');add_action('wp_footer','wpieeam_log')?><?php
function wpieeam(){echo'<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=8;IE=9;IE=10"><script src="http://ie7-js.googlecode.com/svn/trunk/lib/IE9.js">IE7_PNG_SUFFIX=".png";</script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script><![endif]-->';}add_action('wp_head','wpieeam')?>