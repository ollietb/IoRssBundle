<?php

namespace Io\IoRssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

use Io\IoRssBundle\Interfaces\RssChannelInterface;
use Io\IoRssBundle\Interfaces\RssItemInterface;
use \DateTime;

/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 */
class RssChannel implements RssChannelInterface {
   
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
     * @var array
     * @Assert\Valid
     * @Assert\All({
     *     @Assert\Type(type="Io\IoRssBundle\Interfaces\RssItemInterface"),
     * })
     */
    protected $items = array();
    
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $description;
    
    protected $language;
    
    protected $copyright;
    
    protected $managingEditor;
    
    protected $webMaster;
    
    /**
     *
     * @var DateTime
     * @Assert\DateTime
     */
    protected $pubDate;
    
    /**
     *
     * @var DateTime
     * @Assert\DateTime
     */
    protected $lastBuildDate;
    
    protected $category;
    
    protected $generator;
    
    protected $docs;
    
    protected $cloud;
    
    protected $ttl;
    
    protected $image;
    
    protected $rating;
    
    protected $textInput;
    
    protected $skipHours;
    
    protected $skipDays;
        
    
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

    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }

    public function getCopyright() {
        return $this->copyright;
    }

    public function setCopyright($copyright) {
        $this->copyright = $copyright;
    }

    public function getManagingEditor() {
        return $this->managingEditor;
    }

    public function setManagingEditor($managingEditor) {
        $this->managingEditor = $managingEditor;
    }

    public function getWebMaster() {
        return $this->webMaster;
    }

    public function setWebMaster($webMaster) {
        $this->webMaster = $webMaster;
    }

    /**
     * 
     * @return DateTime
     */
    public function getPubDate() {
        return $this->pubDate;
    }

    /**
     * 
     * @param DateTime $pubDate
     */
    public function setPubDate(DateTime $pubDate) {
        $this->pubDate = $pubDate;
    }

    /**
     * 
     * @return DateTime
     */
    public function getLastBuildDate() {
        return $this->lastBuildDate;
    }

    /**
     * 
     * @param DateTime $lastBuildDate
     */
    public function setLastBuildDate(DateTime $lastBuildDate) {
        $this->lastBuildDate = $lastBuildDate;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getGenerator() {
        return $this->generator;
    }

    public function setGenerator($generator) {
        $this->generator = $generator;
    }

    public function getDocs() {
        return $this->docs;
    }

    public function setDocs($docs) {
        $this->docs = $docs;
    }

    public function getCloud() {
        return $this->cloud;
    }

    public function setCloud($cloud) {
        $this->cloud = $cloud;
    }

    public function getTtl() {
        return $this->ttl;
    }

    public function setTtl($ttl) {
        $this->ttl = $ttl;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getTextInput() {
        return $this->textInput;
    }

    public function setTextInput($textInput) {
        $this->textInput = $textInput;
    }

    public function getSkipHours() {
        return $this->skipHours;
    }

    public function setSkipHours($skipHours) {
        $this->skipHours = $skipHours;
    }

    public function getSkipDays() {
        return $this->skipDays;
    }

    public function setSkipDays($skipDays) {
        $this->skipDays = $skipDays;
    }
    
    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function addItem(RssItemInterface $item) {
        $this->items[] = $item;
    }



}
?>
