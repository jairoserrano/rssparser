<?php

include 'GtaRSSItem.php';

/**
 * @name GtaRSSParser
 * @license AGPL3
 * Parser RSS
 */
class GtaRSSParser {

    private $_feedUrl = "";
    private $_rawRSS = "";
    private $_xmlRss = "";
    private $_rssItems = 0;
    private $_currentItem = 0;
    private $_cachedDate = "";

    /**
     *
     * @param String $feed Contructor, solo debes pasarle la URL del feed RSS
     */
    public function __construct($feed) {
        $this->_feedUrl = $feed;

        $this->_cachedDate = filemtime("cache.rss");

        if (time() - $this->_cachedDate >= 360) {
            $this->_rawRSS = file_get_contents($this->_feedUrl);
            file_put_contents("cache.rss", $this->_rawRSS);
        } else {
            $this->_rawRSS = file_get_contents("cache.rss");
        }


        $this->_xmlRss = new SimpleXMLElement($this->_rawRSS);
        $this->CountItems();
    }

    private function CountItems() {
        $this->_rssItems = count($this->_xmlRss->channel->item);
    }

    public function getItemsCount() {
        return $this->_rssItems;
    }

    public function getItem() {
        $item = @$this->_xmlRss->channel->item[$this->_currentItem];
        if (isset($item)) {
            $this->_currentItem++;
            return new GtaRSSItem($item);
        } else {
            return FALSE;
        }
    }

    public function getCached() {
        return $this->_cachedDate;
    }

}

?>