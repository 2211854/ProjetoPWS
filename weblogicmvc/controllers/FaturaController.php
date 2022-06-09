<?php
require_once './controllers/BaseController.php';
require_once './models/Fatura.php';
require_once './models/Auth.php';

class FaturaController extends BaseController
{
    function index()
    {
        $faturas = Fatura::all();
        $this->renderView('fatura/index',['faturas'=>$faturas]);
    }

    function create()
    {
        $empresa = Empresa::find([1]);
        $this->renderView('fatura/create',['empresa'=>$empresa]);
    }

    function selectClient()
    {
        $clientes = User::find_all_by_role_and_estado('Cliente','ativado');
        $this->renderView('fatura/selectClient',['clientes'=>$clientes]);
    }

    function store($idCliente)
    {
        if(!is_null($idCliente))
        {
            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
            $auth = new Auth();
            $array = array('cliente_id' => intval($idCliente), 'user_id' => $auth->getId());
            $fatura = new Fatura($array);
            if($fatura->is_valid()){
                $fatura->save();
                $this->redirectToRoute('fatura', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->redirectToRoute('fatura','create');
            }
        }
        else
        {
            $this->redirectToRoute('fatura','create');
        }

    }

}
