<?php

class ApiController extends Zend_Controller_Action
//Zend_Controller_Action
{
    public function init()
    {
        //die('init');
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();
    }

    public function clientAction()
    {
/*        $client = new Zend_Http_Client();
        $client->setUri('http://localhost:8010/Api/Page');
        //$client->setEncType(Zend_Http_Client::ENC_URLENCODED);
        
        $client->setParameterPost(array('key'=>'value'));
        
        //$response is van het type GZIP
        $response = $client->request('POST');
        
        //$response->getStatus()
        // 200 => Pagina gevonden, Get gelukt
        // 201 => PAgina gevonden, Put gelukt
        // 401 => Pagina niet gevonden
        // 703 => Bestaat niet...
        echo $response->getBody();
        
        //Uitvoeren via :  http://localhost:8010/default/api/client*/
        
        $client = new Zend_Http_Client();
        $post = array('field' => 'value');
        $client->setUri('http://localhost:8010/Api/Page/');
        $client->setParameterPost($post);
        $response = $client->request('POST');
        var_dump($response);
        //echo $response->getBody();
        
        //Uitvoeren via :  http://localhost:8010/default/api/client
        
        
    }


}

