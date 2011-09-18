<?php

include 'GtaRSSItem.php';

/**
 * @name GtaRSSParser
 * @license AGPL3
 * Parser RSS
 */
class GtaRSSParser {

    private $_feedUrl = "";
    private $_raw_RSS = "";
    private $_xml_rss = "";
    private $_rss_items = 0;
    private $_current_item = 0;

    /**
     *
     * @param String $feed Contructor, solo debes pasarle la URL del feed RSS
     */
    public function __construct($feed) {
        $this->_feedUrl = $feed;
        $this->_raw_RSS = file_get_contents($this->_feedUrl);
        $this->_xml_rss = new SimpleXMLElement($this->_raw_RSS);
        $this->CountItems();
    }

    private function CountItems() {
        $this->_rss_items = count($this->_xml_rss->channel->item);
    }

    public function getItemsCount() {
        return $this->_rss_items;
    }

    public function getItem() {
        $item = @$this->_xml_rss->channel->item[$this->_current_item];
        if (isset($item)) {
            $this->_current_item++;
            return new GtaRSSItem($item);
        } else {
            return FALSE;
        }
    }

}

?>