<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ZC\Entity;

/**
 * Description of Recruiter
 * @Table(name="recruiter")
 * @author Ewa
 * @Entity
 */
class Recruiter extends User{
    //put your code here
        /**
     * @Column(type="string", nullable=true)
     * @var string 
     */
    private $companyName;
}
