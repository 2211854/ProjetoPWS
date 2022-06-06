<?php
require_once './controllers/BaseController.php';
require_once './models/Iva.php';

class IvaController extends BaseController
{
    function index()
    {
        $ivas = Iva::all();
        $this->renderView('iva/index',['ivas' =>$ivas]);
    }

    function create(){
        $this->renderView();
    }

}