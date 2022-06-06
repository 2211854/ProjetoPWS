<?php
require_once './controllers/BaseController.php';
require_once './models/Produto.php';

class ProdutoController extends BaseController
{
    function index()
    {
        $produtos = Produto::all();
        $this->renderView('produto/index',['produtos'=>$produtos]);
    }

    function create(){
        $ivas = Iva::all();
        $this->renderView('produto/create',['ivas'=>$ivas]);
    }

    function edit($id){
        $produto = Produto::find([$id]);
        $ivas = Iva::all();
        if(is_null($produto)){

        }else{
            $this->renderView('produto/edit',['ivas'=>$ivas,'produto'=>$produto]);
        }
    }

    function update($id)
    {

        $ivas = Iva::all();
        if(($_POST['referencia'] != " " ))
        {
            //find resource (activerecord/model) instance where PK = $id
            //your form name fields must match the ones of the table fields
            $produto = Produto::find([$id]);
            $produto->update_attributes($_POST);
            if($produto->is_valid()){
                $produto->save();
                $this->redirectToRoute('produto', 'index');
            } else {
                $this->renderView('produto/edit', ['ivas'=>$ivas,'produto'=>$produto]);
            }
        }
        else
        {
            $produto = Produto::find([$id]);
            $this->renderView('produto/edit', ['ivas'=>$ivas,'produto'=>$produto]);
        }
    }

    function delete($id)
    {
        $produto = Produto::find([$id]);
        $produto->delete();
        $this->redirectToRoute('produto', 'index');
    }

    function store()
    {
        $ivas = Iva::all();
        if(($_POST['referencia'] != " "))
        {
            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
            $produto = new Produto($_POST);
            if($produto->is_valid()){
                $produto->save();
                $this->redirectToRoute('produto', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('produto/create', ['produto' =>$produto,'ivas' =>$ivas]);
            }
        }
        else
        {
            $this->renderView('produto/create', ['ivas' =>$ivas]);
        }

    }

}