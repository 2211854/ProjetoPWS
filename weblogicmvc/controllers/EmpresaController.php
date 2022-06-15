<?php
require_once './models/Empresa.php';

class EmpresaController extends BaseAuthController
{
    function index(){
        $empresa = Empresa::find([1]);
        $this->renderView('empresa/index', ['empresa' => $empresa]);
    }
}