<?php

namespace Io\IoRssBundle\Interfaces;

/**
 * This interface should be respect rss 2.0 specifics
 * http://cyber.law.harvard.edu/rss/rss.html
 */
interface RssImageInterface {
   
    public function getImage();
    public function getTitle();
    public function getLink();
    public function getUrl();
    
    
}
?>
