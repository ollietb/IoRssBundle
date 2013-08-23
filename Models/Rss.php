<?php

namespace Io\IoRssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

use Io\IoRssBundle\Interfaces\RssInterface;
use Io\IoRssBundle\Interfaces\RssChannelInterface;
/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 */
class Rss implements RssInterface {
   
    /**
     *
     * @var Io\IoRssBundle\Interfaces\RssChannelInterface
     * @Assert\NotBlank
     * @Assert\Type("Io\IoRssBundle\Interfaces\RssChannelInterface")
     * @Assert\Valid
     */
    protected $channel;
    
    /**
     * 
     * @return Io\IoRssBundle\Interfaces\RssChannelInterface
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * 
     * @param \Io\IoRssBundle\Interfaces\RssChannelInterface $channel
     */
    public function setChannel(RssChannelInterface $channel) {
        $this->channel = $channel;
    }


        
    
       
}
?>
