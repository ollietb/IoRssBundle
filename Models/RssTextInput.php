<?php

namespace Io\Bundle\RssBundle\Models;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Full implementation of RSS 2.0 specifics
 * @see http://cyber.law.harvard.edu/rss/rss.html
 */
class RssTextInput implements RssTextInputInterface {
   
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
    protected $description;
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $name;
    
    /**
     *
     * @var string
     * @Assert\Type(type="string")
     * @Assert\NotBlank 
     */
    protected $link; 
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    
}
?>
