<?php

class LinhaFatura extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade'),
        array('valor_unitario'),
        array('valor_iva'),
        array('produto_id'),
        array('fatura_id'),
    );

    static $belongs_to = array(
        array('produto'),
        array('fatura'),
        array('cliente', 'class_name' => 'User', 'foreign_key' => 'cliente_id')

    );
}

    /*static $has_many = array(
        array('linha_faturas')
    );*/