<?php

class Fatura extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('cliente_id'),
        array('user_id')
    );

    static $belongs_to = array(
        array('user'),
        array('cliente', 'class_name'=>'User','foreign_key'=>'cliente_id')

    );


    static $has_many = array(
        array('linha_fatura')
    );
}