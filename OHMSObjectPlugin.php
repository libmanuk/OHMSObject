<?php

/**
 * OHMS Object Linker plugin.
 */
class OHMSObjectPlugin extends Omeka_Plugin_AbstractPlugin
{

    protected $_filters = array('insertOHMSObject' => array('Display', 'Item', 'Item Type Metadata', 'OHMS Object'));

    public function insertOHMSObject($text)
    {
        $key = is_admin_theme() ? 'admin' : 'public';

        if ($key == 'admin') {
            return "<div class=\"ohms-item\"><p><a href=\"" . $text . "\" target=\"_blank\">" . $text . "</a></p></div>";
                } else {
            return "<div class=\"ohms-item\"><p><iframe src=\"" . $text . "\" width=\"100%\" height=\"100%\" frameborder=\"0\" name=\"viewer\" scrolling=\"no\"></iframe></p></div>";
                }

    }

}
