<?php

class ApiController extends Zend_Controller_Action
{
    public function init()
    {
        //die('init');
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();
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
        $this->getResponse()
                ->appendBody('postAction() return');
        
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

