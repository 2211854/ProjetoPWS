<?php
require_once './controllers/BaseController.php';

class LinhaFaturaController extends BaseController
{
    function index()
    {
        $this->renderView('linhaFatura/index');
    }

    function create($idFatura,$idProduto)
    {
        $fatura = Fatura::find($idFatura);
        $empresa = Empresa::find([1]);
        $this->renderView('create/index',['fatura'=>$fatura,'empresa'=>$empresa]);
    }
}
