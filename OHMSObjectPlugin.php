<?php

/**
 * OHMS Object Embed plugin.
 * @copyright Copyright 2016 Eric C. Weig 
 */

class OHMSObjectPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('public_head');
    protected $_filters = array('insertOHMSObject' => array('Display', 'Item', 'Item Type Metadata', 'OHMS Object'));

    public function hookPublicHead($args)
    {
        queue_css_file('ohmsobject'); 
    }

    public function insertOHMSObject($text, $args)
    {
        $theme = is_admin_theme() ? 'admin' : 'public';
        $format = metadata('item', array('Dublin Core', 'Format'));
        $plugin_path = realpath(__DIR__ . '/..');
        $plugin_subpath = strstr($plugin_path, 'plugins');
        $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
        $base_url=str_replace("/items/show/","","$base_url");
        
     if ($theme == 'admin') {
            return "<div class=\"ohms-item\"><p><a href=\"" . $text . "\" target=\"_blank\">" . $text . "</a></p></div>";
                } else {
            return "<span id=\"vfullscreen\" style=\"float: right;font-size:16px;padding-bottom:10px;padding-top:10px;\"><a href=\"" . $text . "\" target=\"_blank\">access interview in full screen</a>&nbsp;&nbsp;<a href=\"" . $text . "\"><img id=\"vfullscreenicon\" style=\"width: 17px;\" src=\"$base_url/$plugin_subpath/OHMSObject/views/public/images/fullscreenicon.png\"></a></span><div class=\"ohms-item-" . $format . "\"><iframe id=\"iframeid\" src=\"" . $text . "\" name=\"viewer\" height=\"100%\" width=\"100%\" scrolling=\"no\"></iframe></div>";
                }

    }

}
