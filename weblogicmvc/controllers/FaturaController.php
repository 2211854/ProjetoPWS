<?php
require_once './controllers/BaseController.php';

class FaturaController extends BaseController
{
    function index()
    {
        $this->renderView('fatura/index');
    }
}
