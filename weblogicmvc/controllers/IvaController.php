<?php
require_once './controllers/BaseController.php';

class IvaController extends BaseController
{
    function index()
    {
        $this->renderView('iva/index');
    }
}