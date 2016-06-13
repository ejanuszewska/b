<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class App_Form_Profil extends Zend_Form {

    public function init() {
        $this->setMethod('post');
        $tytul = $this->createElement('text', 'tytul');
        $this->addElement($tytul);
        $skrot = $this->createElement('textarea', 'skrot');
        $this->addElement($skrot);
        $tresc = $this->createElement('textarea', 'tresc');
        $this->addElement($tresc);
        $this->addElement('hidden', 'id');
        $this->addElement('submit', 'Zapisz');
    }
}