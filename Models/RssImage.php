<?php

namespace Io\IoRssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 */
class RssImage implements RssImageInterface {
   
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */    
    protected $image;
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $url;
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $title;
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $link;
    
    /**
     *
     * @var integer
     * @Assert\Type(type="integer")
     */
    protected $witdth;
    
    /**
     *
     * @var integer
     * @Assert\Type(type="integer")
     */
    protected $height;
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getWitdth() {
        return $this->witdth;
    }

    public function setWitdth($witdth) {
        $this->witdth = $witdth;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }


       
}
?>
