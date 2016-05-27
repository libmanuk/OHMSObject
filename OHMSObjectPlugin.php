<?php

/**
 * OHMS Object plugin.
 */
class OHMSObjectPlugin extends Omeka_Plugin_AbstractPlugin
{

    protected $_filters = array('insertOHMSObject' => array('Display', 'Item', 'Item Type Metadata', 'OHMS Object'));


    public function insertOHMSObject($text, $args)
    {
     return "<div class=\"item-relation\"><p><iframe src=\"" . $text . "\" width=\"100%\" height=\"1110px\" frameborder=\"0\" name=\"viewer\" scrolling=\"no\"></iframe></p></div>";
    }

}
