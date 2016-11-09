<h2>omeka-plugin-OHMSObjectPlugin</h2> 

A plugin for Omeka that embeds an OHMS Object via a URL in the OHMS Object field.

<b>Usage Note</b>:

Before successfully using this plugin, two Item Type Metadata fields must be created.  The first field is called 'OHMS Object'  For a particular record, the full URL path to the OHMS object should be placed into this field.  The second field is called 'Interview Format'.  This field should hold one of the following values; audio, video.

<b>About the Plugin</b>:

This plugin configures alternate display for the admin vs public themes utilized within Omeka.  In the public theme, an iframe holding the embedded OHMS Viewer (https://github.com/uklibraries/ohms-viewer) is displayed within the item view.  In the admin theme, a simple hyperlink to the OHMS Viewer is displayed. 

This plugin also dynamically adjusts the OHMS Viewer iframe aspect ratio based on the specified interview format.

<b>Install Notes</b>:

1. Download the plugin .zip file from this GitHub page.
2. Unzip the .zip file.
3. Copy or move the contents of the .zip file to your Omeka plugins directory.
3. Rename the new plugin directory so that it is called 'OHMSObject' instead of 'OHMSObject-master'.

The new plugin should now be ready to install and activate from your Omeka administration panel.
