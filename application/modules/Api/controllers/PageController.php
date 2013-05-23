<?php

class Api_PageController extends Zend_Rest_Controller
//Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();
    }

    public function headAction() 
    {
        //Deze functie is nodig als je overerft van Zend_Rest_Controller
    }
    
    public function indexAction()
    {
        $this->getResponse()
                ->appendBody('indexAction() return');
    }
    
    public function getAction()
    {
        $this->getResponse()
                ->appendBody('getAction() return');
        
    }
    
    public function postAction()
    {
        var_dump($this->_getParam('field'));
        //$this->getResponse()
        //        ->appendBody('postAction() return');
        
    }
    
    public function putAction()
    {
        $this->getResponse()
                ->appendBody('putAction() return');
        
    }
    
    public function deleteAction()
    {
        $this->getResponse()
                ->appendBody('deleteAction() return');
        
    }


}

