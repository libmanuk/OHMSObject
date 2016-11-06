<h2>omeka-plugin-OHMSObjectPlugin</h2> 

A plugin for Omeka that embeds an OHMS Object via URL paths in the OHMS Object field.

Usage Note:

Before successfully using this plugin, two Item Type Metadata fields must be created.  The first field is called 'OHMS Object'  For a particular record, the full URL path to the OHMS object should be placed into this field.  The second field is called 'Interview Format'.  This field should hold one of the following values; audio, video.

This plugin configures alternate display for the admin vs public themes utilized within Omeka.  In the public theme, an iframe holding the embedded OHMS Viewer (https://github.com/uklibraries/ohms-viewer) is displayed within the item view.  In the admin theme, a simple hyperlink to the OHMS Viewer is displayed. 

This plugin also dynamically adjusts the OHMS Viewer iframe based on the specified interview format.
