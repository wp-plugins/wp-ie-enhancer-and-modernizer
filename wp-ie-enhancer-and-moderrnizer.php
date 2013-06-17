<?php
/*
Plugin Name: √ WP IE Enhancer and Modernizer
Plugin URI: http://slangji.wordpress.com/wp-ie-enhancer-and-modernizer/
Description: Make IE standards-compliant browser. Fixes HTML/CSS issues, fixes transparent PNG under IE5/IE6, shiv (X)HTML5 elements and render to latest version. This Free Software Want You: please Contribute on it and Make your own Fantasy and Competence! (Code in Becoming) Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title"GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title"GNU style indentation coding standard compatible">GNU style</a> indentation coding standard compatible. | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestions">Contact</a> | <a href="http://profiles.wordpress.org/slangji" title="sLaNGjI's Profile @ WordPress.org">My Profile</a> | <a href="http://webscripts.softpedia.com/author/sLa-1869786722.html" title="sLa Developer Page @ SoftPedia.com">My SoftPedia</a> | <a href="http://slangji.wordpress.com/themes/" title="sLaNGjI's Custom Themes">My Themes</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/extend/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a>
Version: 2013.0202.1848
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 2.1
Tested up to: 3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * [IE Enhancer and Modernizer](http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/)
 *
 * √ CONTACT
 *
 * [Contact](http://slangji.wordpress.com/contact/)
 *
 * √ DONATIONS
 *
 * [Donate](http://slangji.wordpress.com/donate/)
 *
 * √ PROJECTS
 *
 * [My Plugins](http://slangji.wordpress.com/plugins/)
 * [My Themes](http://slangji.wordpress.com/themes/)
 *
 * √ DEVELOPER
 *
 * [phpBB.com](http://phpbb.com/)
 * [SoftPedia.com](http://webscripts.softpedia.com/author/sLa-1869786722.html)
 * [WordPress.org](http://profiles.wordpress.org/slangji)
 *
 * √ REPOSITORIES
 *
 * [GitHub.com](https://github.com/slangji)
 *
 * √ WEBSITE
 *
 * [WordPress.com](http://slangji.wordpress.com/)
 *
 * √ PROFILES
 *
 * [bbPress.org](http://bbpress.org/forums/profile/slangji/)
 * [BuddyPress.org](http://buddypress.org/community/members/slangji/profile/public/)
 * [Gravatar.com](http://en.gravatar.com/slangji)
 *
 * Author URL [sLa](http://wordpress.org/extend/plugins/profile/sla) moved to [sLaNGjI](http://wordpress.org/extend/plugins/profile/slangji) update bookmark!
 *
 * √ POLLS
 *
 * [PollDaddy.com](http://slangji.polldaddy.com/)
 *
 * √ SUPPORT
 *
 * [WordPress.org](http://wordpress.org/support/profile/slangji)
 *
 * √ FOLLOW
 *
 * [LinkedIn](http://www.linkedin.com/in/slangjis)
 * [Twitter](https://twitter.com/sLanGjIs)
 * [FaceBook](https://www.facebook.com/sLaNGjI)
 * [Google+](https://plus.google.com/104369105810975562211)
 * [FeedBurner](http://feeds.feedburner.com/slangji)
 * [FriendFeed](http://friendfeed.com/slangjis)
 *
 * √ LICENSE
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
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ DISCLAIMER
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
 * √ GUIDELINES
 *
 * This software meet detailed [Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 *
 * √ COPYRIGHT
 *
 * Part of Copyright © 2010-2013 belongs to [sLaNGjI's](http://en.gravatar.com/slangjis) (slangji[at]gmail[dot]com) and a portion to their respective owners.
 */
/**
 * @package IE Enhancer and Modernizer
 * @subpackage WordPress PlugIn
 * @description Enhancer and Modernizer IE WordPress Surfing Expirience.
 * @since 2.1.0
 * @version 2013.0202.1848
 * @status DEVELOPMENT Code in Becoming
 * @author sLa
 * @license GPLv2 or later
 * @indentation GNU style coding standard
 * @keytag s2gJ4RrV9t4i5GfQu4e0u82365E77P91XR7yyCSt18V4Fvf20eFm331938S5Ip16V
 * @checksum 9B93C1BD65FFFA993D9E03F5FAD58761
 */
	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			exit();
		} //!function_exists( 'add_action' )

	function wpieeam_log()
		{
			echo "\n<!--Plugin IE Enhancer and Modernizer 2012.0322.2238 Active - Key Tag: s2gJ4RrV9t4i5GfQu4e0u82365E77P91XR7yyCSt18V4Fvf20eFm331938S5Ip16V-->\n\n";
		}
	add_action( 'wp_head', 'wpieeam_log' );
	add_action( 'wp_footer', 'wpieeam_log' );

	function wpieeam()
		{
			echo '
	<!--Plugin IE Enhancer and Modernizer Begin Code-->
	<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<!--/Plugin IE Enhancer and Modernizer End Code-->
	';
		}
	add_action( 'wp_head', 'wpieeam' );
?>