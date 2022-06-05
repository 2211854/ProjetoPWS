<?php
require_once './controllers/BaseController.php';

class LinhaFaturaController extends BaseController
{
    function index()
    {
        $this->renderView('linhaFatura/index');
    }
}
