<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $data = $this->getAllParams();
        var_dump($data);
    }
    
    public function noaccessAction()
    {
        $this->_helper->layout->disableLayout();
    }

    public function restAction() 
    {
        //$client = new Zend_Http_Client('http://localhost:8010/api/');
        //$response = $client->request('POST');
        //var_dump($response);
die('test');        
//        $client = new Zend_Http_Client('http://localhost:8010/api/', array(
//        'maxredirects' => 0,
//        'timeout'      => 30));
    }

}

