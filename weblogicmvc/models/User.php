<?php

class User extends \ActiveRecord\Model
{
    static $validates_uniqueness_of = array(
        array('username', 'message' => 'Este username ja existe'),
    );

    static $validates_presence_of = array(
        array('username', 'uniqueness' => 'Este username ja exite'),
        array('password'),
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('codigo_postal'),
        array('localidade'),
        array('role')
    );
}