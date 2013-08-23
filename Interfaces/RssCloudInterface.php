<?php

namespace Io\IoRssBundle\Interfaces;

/**
 * This interface should be respect rss 2.0 specifics
 * http://cyber.law.harvard.edu/rss/rss.html
 */
interface RssCloudInterface {
   
    public function getDomain();
    public function getPort();
    public function getPath();    
    public function getRegisterProcedure();
    public function getProtocol();
}
?>
