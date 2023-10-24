<?php
/**
 * Plugin Name: Affiliate
 * Plugin URI: http://spottedbargains.com/
 * Description: Spotted Bargains Affiliate Plugin
 * Version: 1.1
 * Author: Spotted Bargains
 * Author URI: http://spottedbargains.com/
 */

/**
 * Release History:
 * - 1.0 Initial release
 * - 1.1 Modified: changing to Digidip
 */

// Check if YOURLS is being used.
if (defined('YOURLS_ABSPATH')) {
    yourls_add_filter('redirect_location', 'convert_link');

    function convert_link($url) {
        // Check if the link is an Amazon URL.
        if (strpos($url, 'amazon') !== false) {
            // Return the original link if it is an Amazon URL.
            return $url;
        }

        // Add the VigLink prefix to the link.
        $url = 'https://visit.digidip.net/visit?pid=1617&generated=shortener&url=' . $url;

        // Return the modified link.
        return $url;
    }
}
