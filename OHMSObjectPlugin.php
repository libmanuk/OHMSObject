<?php

/**
 * OHMS Object Embed plugin.
 * @copyright Copyright 2016 Eric C. Weig 
 */

class OHMSObjectPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('public_head');
    protected $_filters = array('insertOHMSObject' => array('Display', 'Item', 'OHMS Element Set', 'OHMS Object'));

    public function hookPublicHead($args)
    {
        queue_css_file('ohmsobject'); 
    }

    public function insertOHMSObject($text, $args)
    {
        $theme = is_admin_theme() ? 'admin' : 'public';
        $format = metadata('item', array('OHMS Element Set', 'Interview Format'));
        
     if ($theme == 'admin') {
            return "<div class=\"ohms-item\"><p><a href=\"" . $text . "\" target=\"_blank\">" . $text . "</a></p></div>";
                } else {
            return "<span id=\"vfullscreen\" style=\"float: right;font-size:16px;padding-bottom:10px;padding-top:10px;\"><a href=\"" . $text . "\" target=\"_blank\">access interview in full screen</a>&nbsp;&nbsp;<a href=\"" . $text . "\"><img id=\"vfullscreenicon\" style=\"width: 17px;\" src=\"/spokedbo/plugins/OHMSObject/views/public/images/fullscreenicon.png\"></a></span><div class=\"ohms-item-" . $format . "\"><iframe id=\"iframeid\" src=\"" . $text . "\" name=\"viewer\" height=\"100%\" width=\"100%\" scrolling=\"no\"></iframe></div>";
                }

    }

}
