<?php
require_once './controllers/BaseController.php';
require_once './models/Iva.php';

class IvaController extends BaseController
{
    function index()
    {
        $ivas = Iva::all();
        $this->renderView('iva/index',['ivas' =>$ivas]);
    }

    function create(){
        $this->renderView('iva/create');
    }

    function edit($id){
        $iva = Iva::find([$id]);
        if(is_null($iva)){

        }else{
            $this->renderView('iva/edit',['iva'=>$iva]);
        }
    }

    function update($id)
    {
        if(($_POST['percentagem'] != " "))
        {
            //find resource (activerecord/model) instance where PK = $id
            //your form name fields must match the ones of the table fields
            $iva = Iva::find([$id]);
            $iva->update_attributes($_POST);
            if($iva->is_valid()){
                $iva->save();
                $this->redirectToRoute('iva', 'index');
            } else {
                $this->renderView('iva/edit', ['iva' =>$iva]);
            }
        }
        else
        {
            $iva = Iva::find([$id]);
            $this->renderView('iva/edit', ['iva' =>$iva]);
        }
    }

    function store()
    {
        if($_POST['percentagem'] != " " )
        {
            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
            $iva = new Iva($_POST);
            if($iva->is_valid()){
                $iva->save();
                $this->redirectToRoute('iva', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('iva/create', ['iva' => $iva]);
            }
        }
        else
        {
            $this->renderView('iva/create');
        }

    }

    function delete($id)
    {
        $iva = Iva::find([$id]);
        $iva->delete();
        $this->redirectToRoute('iva', 'index');
    }

}