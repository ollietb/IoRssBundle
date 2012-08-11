<?php

namespace Io\Bundle\RssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Io\Bundle\RssBundle\Models\Rss;
use Io\Bundle\RssBundle\Models\RssChannel;
use Io\Bundle\RssBundle\Models\RssItem;

class RssController extends Controller
{
    /**
     * @Route("/example.rss")
     */
    public function indexAction()
    {
        $channel = new RssChannel();
        $channel->setTitle("test rss");
        $channel->setLink("http://www.google.com");
        $channel->setDescription("put here rss description");
        
        $item = new RssItem();
        $item->setDescription("item description ");
        $item->setTitle("item title");
        $item->setLink("http://www.github.com");
        
        $channel->addItem($item);
        
        $rss = new Rss;
        $rss->setChannel($channel);
        
        $rssService = $this->get('io_rss.rss_service');
        return $rssService->render($rss);

    }
}
