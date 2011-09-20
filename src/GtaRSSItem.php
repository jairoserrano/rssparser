<?php
/**
 * @name GtaRSSItem
 * @license AGPL3
 * Elemento RSS
 */
class GtaRSSItem {

    public $title = "";
    public $link = "";
    public $description = "";
    public $category = "";
    public $pubDate = "";
    public $guid = "";

    /**
     *
     * @param String $feed Contructor, solo debes pasarle la URL del feed RSS
     */
    public function __construct($rssItem) {
        $this->title = $rssItem->title;
        $this->link = $rssItem->link;
        $this->description = $rssItem->description;
        $this->category = $rssItem->category;
        $this->pubDate = $rssItem->pubDate;
    }

}
?>
