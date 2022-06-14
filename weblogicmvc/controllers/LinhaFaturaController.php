<?php
require_once './controllers/BaseController.php';
require_once './models/LinhaFatura.php';

class LinhaFaturaController extends BaseController
{
    function index()
    {
        $this->renderView('linhaFatura/index');
    }

    function create($idFatura,$idProduto)
    {
        $fatura = Fatura::find([$idFatura]);
        $empresa = Empresa::find([1]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($idFatura);
        if(is_null($idProduto)){
            $this->renderView('linhaFatura/create',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura]);
        }else{
            $produto = Produto::find([$idProduto]);
            $this->renderView('linhaFatura/create',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura,'produto'=>$produto]);
        }
    }

    function selectProduct($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $produtos = Produto::all();
        $this->renderView('linhaFatura/selectProduct',['fatura'=>$fatura,'produtos'=>$produtos]);
    }

    function store($idFatura)
    {
        $fatura = Fatura::find([$idFatura]);
        $produtos = Produto::all();
        $this->renderView('linhaFatura/selectProduct',['fatura'=>$fatura,'produtos'=>$produtos]);
    }

}
