<?php

namespace Io\Bundle\RssBundle\Services;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

use Symfony\Component\Validator\ValidatorInterface;

use Io\Bundle\RssBundle\Models\Rss;
use Io\Bundle\RssBundle\Interfaces\RssInterface;


class RssService
{
    protected $rss;
    protected $engine;
    protected $validator;
    protected $response;
    
    public function __construct(EngineInterface $engine, ValidatorInterface $validator) {
        $this->setEngine($engine);
        $this->setValidator($validator);
        
        $this->setResponse(new Response);
    }
    
    public function renderView()
    {
        $view = "IoRssBundle::feed.rss.twig";
        $parameters = array(
            'rss' => $this->getRss()
        );
        return $this->getEngine()->render($view, $parameters);        
    }
    

    /**
     * @return boolean
     */
    public function validate() {
        
        $errors = $this->getValidator()->validate($this->getRss());
        if(count($errors) == 0)
            return true;
        else
        {
            foreach($errors as $e)
                throw new \Exception($e->getMessage());
            return false;
        }
    }
    
    public function render(Rss $rss){
        $this->setRss($rss);
        if($this->validate())
        {
            $this->getResponse()->setContent($this->renderView());
            
            $this->getResponse()->setStatusCode(200);
            $this->getResponse()->headers->set('Content-Type', 'text/xml');            
            return $this->getResponse();
        }
        else
            throw new \Exception("error");
    }
    
    /**
     * 
     * @return \Symfony\Component\Templating\EngineInterface
     */
    public function getEngine() {
        return $this->engine;
    }

    /**
     * 
     * @param \Symfony\Component\Templating\EngineInterface $engine
     */
    public function setEngine(EngineInterface $engine) {
        $this->engine = $engine;
    }

    /**
     * 
     * @return \Symfony\Component\HttpFoundation\Response 
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    public function setResponse(Response $response) {
        $this->response = $response;
    }

    /**
     * 
     * @return \Io\Bundle\RssBundle\Interfaces\RssInterface
     */
    public function getRss() {
        return $this->rss;
    }

    /**
     * 
     * @param \Io\Bundle\RssBundle\Interfaces\RssInterface $rss
     */
    public function setRss(RssInterface $rss) {
        $this->rss = $rss;
    }

    /**
     * 
     * @return \Symfony\Component\Validator\ValidatorInterface 
     */
    public function getValidator() {
        return $this->validator;
    }

    /**
     * 
     * @param \Symfony\Component\Validator\ValidatorInterface $validator
     */
    public function setValidator(ValidatorInterface $validator) {
        $this->validator = $validator;
    }


}
