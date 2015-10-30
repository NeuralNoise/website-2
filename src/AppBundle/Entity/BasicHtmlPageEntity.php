<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @author Austin "Paco" DeArmond <hello@paco.audio>
 * 
 * @ORM\Entity
 * @ORM\Table(name="page_basicHtml")
 */
class BasicHtmlPageEntity {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $location;
    
    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $title;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $html;
    
    public function setHtml($html) {
        $this->html = $html;
    }
    
    public function getHtml() {
        return $this->html;
    }
    
    public function getTitle() {
        return $this->title;
    }
}
