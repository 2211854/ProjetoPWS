<?php
require_once './controllers/BaseController.php';
require_once './models/Empresa.php';

class EmpresaController extends BaseController
{
    function index(){
        $empresa = Empresa::find([1]);
        $this->renderView('empresa/index', ['empresa' => $empresa]);
    }
}