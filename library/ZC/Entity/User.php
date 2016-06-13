<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ZC\Entity;
/**
 * Description of User
 *
 * @author Ewa
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"user" = "User", "recruiter" = "Recruiter"})
 */

class User {
    //put your code here
    /**
     *
     * @var integer $id
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @Column(type="string", nullable=true)
     * @var string 
     */
    protected $firstname;
     /**
     * @Column(type="string", nullable=true)
     * @var string 
     */
    protected $lastname;
    
         /**
     * @Column(type="date", nullable=true)
     * @var date
     */
    protected $dateOfBirth;
    
        /**
     * @Column(type="string", nullable=true, length=120)
     * @var string
     */
    protected $email;
    
          /**
     * @Column(type="string", nullable=true, length=40)
     * @var string
     */
    protected $password;
    
              /**
     * @Column(type="smallint", nullable=true)
     * @var smallint
     */
    protected $isActive;
}
