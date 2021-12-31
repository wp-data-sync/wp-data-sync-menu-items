=== WP Data Sync - Menu Items ===
Contributors: kevin-brent
Tags: sync data, sync menu items, api feed, data feed, json feed, woocommerce, data transfer, csv import, data sync, sync products, google sheets, google forms, wp data sync
Requires at least: 5.0
Tested up to: 5.8.1
Requires PHP: 5.6
Stable tag: /trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sync menu items form a Wordpress website to another WordPress website.

## Description ##

Sync menu items form a Wordpress website to another WordPress website.

NOTE: For post type menu items, the post type object must already exist on the destination website, and the title must match the source website.

### Menu Name ###

The menu name on the source website must match the menu name on the remote website exactly.

### Source Item ID ###

The source Item ID is very critical. This ID allows the system to relate the menu item on the source website with the destination website.

### Creating new nav menus ###

WP Data Sync Menu Items will create a new nav menu and add the source item ID to each menu field automatically.

### Syncing existing nav menus ###

To prevent duplicate menu items, you must copy the source item ID from the source website to the destination website for each menu item. You can find the source item ID by visiting the menu edit screen. Expand the menu item to reveal the source item ID field. Once you have copied the source item IDs, you must save changes for this setting to take effect.

### Suggestion for best results ###

Allow the WP Data Sync API and the WP Data Sync Menu Items plugin to create a new nav menu on the remote website. Then replace the existing menu on the remote website with the new menu. This will allow the system to automatically sync the menus between website with maximum accuracy and minimal effort.

__What if I want to know more?__

Here are a variety of links that we’ve found helpful in explaining our plugin and how to get started:

[WP Data Sync](https://wpdatasync.com/?affid=admin "WP Data Sync")
[WP Data Sync Blog](https://wpdatasync.com/blog/?affid=admin "WP Data Sync Blog")
[Developer Documentation - Getting Started](https://wpdatasync.com/documentation-type/getting-started/?affid=admin "Developer Documentation - Getting Started")
[Developer Documentation - Actions](https://wpdatasync.com/documentation-type/actions/?affid=admin "Developer Documentation - Actions")
[Developer Documentation - Filters](https://wpdatasync.com/documentation-type/filters/?affid=admin "Developer Documentation - Filters")

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress Admin.
3. Navigate to WP Admin > Settings > WP Data Sync.
4. For WooCommerce Users - The WooCommerce plugin must be activated.

== Frequently Asked Questions ==

= How does WP Data Sync work? =

We process data in 3 steps:

1. WP Data Sync uses our API to process raw data from your data source.
2. WP Data Sync API syncs the data to your website.
3. WP Data Sync plugin manages updates of the data in the WordPress website.

= How many websites can I sync using the same data? =

WP Data Sync API can sync the same data into as many websites as you like.

= How many objects can I sync each month? =

WP Data Sync can sync as many objects as you need. Your account is auto-scaled depending on how many objects you sync.

= Is my data private or do other users have access to my data? =

Your data is private to you. No one else has access to the data, except for the WP Data Sync team. We do not sell the data.

= Is WP Data Sync developer friendly? =

Yes. We have WordPress hooks and filters throughout the plugin to allow for almost any situation. [Developer Documentation](https://wpdatasync.com/documentation/?affid=admin "Developer Documentation")

== Screenshots ==

1. WP Data Sync: Data Flow

== Change Log ==

[Change Log](https://wpdatasync.com/plugin/wp-data-sync-menu-items/?affid=admin "Change Log")

== Upgrade Notice ==
