<?php

namespace Io\Bundle\RssBundle\Interfaces;

/**
 * This interface should be respect rss 2.0 specifics
 * http://cyber.law.harvard.edu/rss/rss.html
 */
interface RssInterface {
   
    public function getChannel();
    
}
?>
