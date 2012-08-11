<?php

namespace Io\Bundle\RssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

use Io\Bundle\RssBundle\Interfaces\RssInterface;
use Io\Bundle\RssBundle\Interfaces\RssChannelInterface;
/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 */
class Rss implements RssInterface {
   
    /**
     *
     * @var Io\Bundle\RssBundle\Interfaces\RssChannelInterface
     * @Assert\NotBlank
     * @Assert\Type("Io\Bundle\RssBundle\Interfaces\RssChannelInterface")
     * @Assert\Valid
     */
    protected $channel;
    
    /**
     * 
     * @return Io\Bundle\RssBundle\Interfaces\RssChannelInterface
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * 
     * @param \Io\Bundle\RssBundle\Interfaces\RssChannelInterface $channel
     */
    public function setChannel(RssChannelInterface $channel) {
        $this->channel = $channel;
    }


        
    
       
}
?>
