<?php

namespace Io\Bundle\RssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

use Io\Bundle\RssBundle\Interfaces\RssItemInterface;
use \DateTime;


/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 * 
 */
class RssItem implements RssItemInterface {
   
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
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $description;
    
    protected $author;
        
    protected $category;
    protected $comments;
    protected $enclosure;
    protected $guid;
    protected $pubdate;
    protected $source;

    
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

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function getEnclosure() {
        return $this->enclosure;
    }

    public function setEnclosure($enclosure) {
        $this->enclosure = $enclosure;
    }

    public function getGuid() {
        return $this->guid;
    }

    public function setGuid($guid) {
        $this->guid = $guid;
    }

    public function getPubdate() {
        return $this->pubdate;
    }

    public function setPubdate($pubdate) {
        $this->pubdate = $pubdate;
    }

    public function getSource() {
        return $this->source;
    }

    public function setSource($source) {
        $this->source = $source;
    }


       
}
?>
