# WP Data Sync - Menu Items

WP Data Sync plugin required to use this plugin.

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

### Helpful Links ###

* [WP Data Sync](https://wpdatasync.com "WP Data Sync")
* [WP Data Sync Blog](https://wpdatasync.com/blog/ "WP Data Sync Blog")
* [Developer Documentation](https://wpdatasync.com/documentation/ "Developer Documentation")

__[Change Log](https://wpdatasync.com/plugin/wp-data-sync-menu-items/ "Change Log")__