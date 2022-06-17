<?php
require_once './startup/boot.php';
require_once './controllers/BaseAuthController.php';
require_once './controllers/SiteController.php';
require_once './controllers/AuthController.php';
require_once './controllers/EmpresaController.php';
require_once './controllers/IvaController.php';
require_once './controllers/ProdutoController.php';
require_once './controllers/UserController.php';
require_once './controllers/FaturaController.php';
require_once './controllers/LinhaFaturaController.php';
require_once './controllers/BackofficeController.php';

if(!isset($_GET['c'], $_GET['a']))
{
    // omissão, enviar para site
    $controller = new SiteController();
    $controller->index();
}
else
{
    // existem parametros definidos
    $c = $_GET['c'];
    $a = $_GET['a'];
    switch ($c)
    {
        case "login":
            $controller = new AuthController();

            switch ($a)
            {
                case "index":
                    $controller->index();
                    break;

                case "login":

                    $controller->login();
                    break;

                case "logout":
                    $controller->logout();
            }
            break;

        case "site":
            $controller = new SiteController();
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
            }
            break;

        case "empresa":
            $controller = new EmpresaController();
            $controller->loginFilterByRole(['Admin','Funcionario']);
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
            }
            break;

        case "backoffice":
            $controller = new BackofficeController();
            $controller->loginFilterByRole(['Admin','Funcionario','Cliente']);
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
            }
            break;


        case "iva":
            $controller = new IvaController();
            $controller->loginFilterByRole(['Admin','Funcionario']);
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
                case "edit":
                    $controller->edit($_GET['id']);
                    break;
                case "update":
                    $controller->update($_GET['id']);
                    break;
                case "create":
                    $controller->create();
                    break;
                case "store":
                    $controller->store();
                    break;
                case "destroy":
                    $controller->delete($_GET['id']);
                    break;
            }
            break;

        case "produto":
            $controller = new ProdutoController();
            $controller->loginFilterByRole(['Admin','Funcionario']);
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
                case "edit":
                    $controller->edit($_GET['id']);
                    break;
                case "update":
                    $controller->update($_GET['id']);
                    break;
                case "create":
                    $controller->create();
                    break;
                case "store":
                    $controller->store();
                    break;
            }
            break;

        case "user":
            $controller = new UserController();
            switch ($a) {
                case "index":
                    if($_GET['tipo'] == 'Funcionario')
                    {
                        $controller->loginFilterByRole(['Admin']);
                    }
                    $controller->index($_GET['tipo']);
                    break;
                case "edit":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->edit($_GET['id']);
                    break;
                case "update":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->update($_GET['id']);
                    break;
                case "create":
                    if($_GET['role'] == 'Funcionario')
                    {
                        $controller->loginFilterByRole(['Admin']);
                    }
                    $controller->create($_GET['role']);
                    break;
                case "store":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->store();
                    break;
            }
            break;

        case "fatura":
            $controller = new FaturaController();
            switch ($a) {
                case "index":
                    $controller->loginFilterByRole(['Admin','Funcionario','Cliente']);
                    $controller->index();
                    break;
                case "create":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->create();
                    break;
                case "store":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->store($_GET['idCliente']);
                    break;
                case "selectClient":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->selectClient();
                    break;
                case "update":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->update($_GET['idFatura']);
                    break;
                case "updateCancel":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->updateCancel($_GET['idFatura']);
                    break;
                case "show":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->show($_GET['idFatura']);
                    break;
                case "print":
                    $controller->loginFilterByRole(['Admin','Funcionario']);
                    $controller->print($_GET['idFatura']);
                    break;
            }
            break;

        case "linhaFatura":
            $controller = new LinhaFaturaController();
            $controller->loginFilterByRole(['Admin','Funcionario']);
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
                case "create":
                    if(isset($_GET['idProduto'])){
                        $controller->create($_GET['idFatura'],$_GET['idProduto']);
                    }else{
                        $controller->create($_GET['idFatura'],null);
                    }
                    break;
                case "edit":
                    $controller->edit($_GET['idLinhaFatura']);
                    break;
                case "store":
                    $controller->store($_GET['idFatura'],$_GET['idProduto']);
                    break;
                case "selectProduct":
                    $controller->selectProduct($_GET['idFatura']);
                    break;
                case "update":
                    $controller->update($_GET['idLinhaFatura']);
                    break;
                case "destroy":
                    $controller->delete($_GET['idLinhaFatura']);
                    break;
            }
            break;

        default:
            $controller = new SiteController();
            $controller->index();
    }

}