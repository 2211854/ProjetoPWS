<?php
require_once './controllers/BaseController.php';
require_once './models/User.php';
require_once './models/Fatura.php';
require_once './models/Produto.php';

class SiteController extends BaseController
{
    function index()
    {
        $this->renderView('site/index');
    }

    function show()
    {
        $users = User::all();
        $faturas = Fatura::all();
        $produtos = Produto::all();
        $total_users = 0;
        $total_clientes = 0;
        $total_faturas = 0;
        $total_produtos = 0;
        foreach ($users as $user) {
            if ($user->estado == "ativado" ){
                if($user->role == "Cliente"){
                    $total_clientes++;
                }
                $total_users++;
            }
        }
        foreach ($faturas as $fatura) {
            if ($fatura->estado == "emitida") {
                $total_faturas++;
            }
        }
        foreach ($produtos as $produto){
            if($produto->stock >0){
                $total_produtos++;
            }
        }

        $this->renderView('site/show',[
            'total_users'=> $total_users,
            'total_clientes'=>$total_clientes,
            'total_produtos' => $total_produtos,
            'total_faturas' => $total_faturas
            ]);
    }
}