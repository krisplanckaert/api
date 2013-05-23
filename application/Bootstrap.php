<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initRegisterControllerPlugins() 
    {
        $this->bootstrap('frontcontroller');
        $front = $this->getResource('frontcontroller');
        //$front->registerPlugin(new Syntra_Controller_Plugin_Translate());
        //$front->registerPlugin(new Syntra_Controller_Plugin_Navigation());
        //$front->registerPlugin(new Syntra_Auth_Acl());
        //$front->registerPlugin(new Syntra_Auth_Auth());
    }
    
    public function _initDbAdapter() 
    {
        $this->bootstrap('db'); //komt uit application.ini wat begint met resource
        $db = $this->getResource('db');
        //Maak een soort van globale variabele
        Zend_Registry::set('db', $db);
    }
    
    /**
     * put after init _initView
     * Creates all custom routes
     * @param array $options
     * @return Zend_Controller_Router_Route
     */
    /*public function _initRouter(array $options=NULL)
    {
        $router = $this->getResource('frontcontroller')->getRouter();
        //add custom route
        // : before param = get variabele
        $router->addRoute('lang', 
            new Zend_Controller_Router_Route(':lang', array(
                'controller' => 'index',
                'action'     => 'index',
            )));

        //add custom route
        // : before param = get variabele
        $router->addRoute('login', 
            new Zend_Controller_Router_Route(':lang/login', array(
                'controller' => 'user',
                'action'     => 'login',
            )));

        //add custom route
        // : before param = get variabele
        $router->addRoute('logout', 
            new Zend_Controller_Router_Route(':lang/logout', array(
                'controller' => 'user',
                'action'     => 'logout',
            )));
        
        //add custom route
        // : before param = get variabele
        $router->addRoute('page', 
            new Zend_Controller_Router_Route(':lang/:slug/pagina', array(
                'controller' => 'page',
                'action'     => 'index',
            )));

        //add custom route
        // : before param = get variabele
        $router->addRoute('admin', 
            new Zend_Controller_Router_Route('admin/:controller/:action', array(
                'module'     => 'admin',
                'controller' => 'index',
                'action'     => 'index',
            )));
        //add custom route
        // : before param = get variabele
        $router->addRoute('noaccess', 
            new Zend_Controller_Router_Route('noaccess', array(
                'controller' => 'noaccess',
                'action'     => 'index',
            )));
                //add custom route
        // : before param = get variabele
        $router->addRoute('api', 
            new Zend_Controller_Router_Route('api/:controller/:action', array(
                'module'     => 'Api',
                'controller' => 'Page',
                'action'     => 'index',
            )));
        
    }*/
    
    public function _initRestRoute() 
    {
        //Alle controllers binnen de api module worden hierdoor rest API controllers
        //Nodig Get / Post / Put / Delete action om dit te laten werken.
        $this->bootstrap('frontcontroller');
        $frontController = Zend_Controller_Front::getInstance();
        $restRoute = new Zend_Rest_Route($frontController, array(), array('Api'));
        $frontController->getRouter()->addRoute('rest', $restRoute);
    }

}

