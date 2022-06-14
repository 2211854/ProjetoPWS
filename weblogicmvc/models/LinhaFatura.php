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

    );
}

    /*static $has_many = array(
        array('linha_faturas')
    );*/