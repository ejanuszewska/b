<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initResourceAutoloader()
    {
         $autoloader = new Zend_Loader_Autoloader_Resource(array(
            'basePath'  => APPLICATION_PATH,
            'namespace' => 'App',
         ));

         $autoloader->addResourceType('form', 'forms', 'Form');
         return $autoloader;
    }

}

