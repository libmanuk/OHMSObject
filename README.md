<b>A plugin for Omeka that embeds an OHMS Object via URL paths in the OHMS Object field.</b>

Usage Note:

Before successfully using this plugin, a new Item Type Metadata field called 'OHMS Object' must be created.  For a particular record, the full URL path to the OHMS object should be placed into this field.  

This plugin configures alternate display for the admin vs public themes utilized within Omeka.  In the public theme, an iframe holding the embedded OHMS Viewer (https://github.com/uklibraries/ohms-viewer) is displayed within the item view.  In the admin theme, a simple hyperlink to the OHMS Viewer is displayed.  
