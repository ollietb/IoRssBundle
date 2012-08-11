<?php

namespace Io\Bundle\RssBundle\Interfaces;

/**
 * This interface should be respect rss 2.0 specifics
 * http://cyber.law.harvard.edu/rss/rss.html
 */
interface RssChannelInterface {
   
    public function getTitle();
    public function getLink();
    public function getDescription();
    
    
}
?>
