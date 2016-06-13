<?php

// include_once 'C:\\xampp\\htdocs\\PhpProject7\\application\\forms\\Profil.php';

class FormController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $form = new App_Form_Profil(); 

        $url = $this->getRequest()->getBaseUrl();
        $form->setAction($url . '/form/index');
        $this->view->form = $form;
    }


}

