<?php
require_once './models/Fatura.php';
require_once './models/Auth.php';

class FaturaController extends BaseAuthController
{
    function index()
    {
        $faturas = Fatura::all();
        $this->renderView('fatura/index',['faturas' => $faturas]);
    }

    function create()
    {
        $empresa = Empresa::find([1]);
        $this->renderView('fatura/create',['empresa'=>$empresa]);
    }

    function selectClient($procurarCliente)
    {
        if(!is_null($procurarCliente)){
            $clientes = User::find_by_sql('SELECT * FROM users WHERE role = "Cliente" and estado = "ativado" and username LIKE "%'.$procurarCliente.'%"');
        }else{
            $clientes = User::find_all_by_role_and_estado('Cliente','ativado');
        }
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
                $this->redirectToRoute('linhaFatura', 'create',['idFatura' => $fatura->id]);
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

    function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $fatura = Fatura::find([$id]);
        $array = array('estado' => 'emitida');
        $fatura->update_attributes($array);
        if($fatura->is_valid()){
            $fatura->save();
            $this->redirectToRoute('fatura', 'show',['idFatura' => $fatura->id]);
        } else {
            $this->redirectToRoute('linhaFatura', 'create',['idFatura' => $fatura->id]);
        }
    }

    function updateCancel($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $fatura = Fatura::find([$id]);
        $array = array('estado' => 'cancelada');
        $fatura->update_attributes($array);
        if($fatura->is_valid()){
            $fatura->save();
            $this->redirectToRoute('fatura', 'show',['idFatura' => $fatura->id]);
        } else {
            $this->redirectToRoute('linhaFatura', 'create',['idFatura' => $fatura->id]);
        }
    }

    function show($id){

        $fatura = Fatura::find([$id]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($id);
        $empresa = Empresa::find([1]);
        $this->renderView('fatura/show',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura]);
    }

    function print($id){

        $fatura = Fatura::find([$id]);
        $linhasFatura = LinhaFatura::find_all_by_fatura_id($id);
        $empresa = Empresa::find([1]);
        $this->renderView('fatura/print',['fatura'=>$fatura,'empresa'=>$empresa,'linhasFatura'=>$linhasFatura]);
    }

}
