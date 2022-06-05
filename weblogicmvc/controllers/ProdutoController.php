<?php
require_once './controllers/BaseController.php';

class ProdutoController extends BaseController
{
    function index()
    {
        $this->renderView('produto/index');
    }
}