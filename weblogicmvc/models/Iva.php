<?php

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem'),
        array('descricao'),
        array('em_vigor')
    );
}