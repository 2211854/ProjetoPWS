<?php
require_once './startup/boot.php';
require_once './controllers/SiteController.php';
require_once './controllers/AuthController.php';
require_once './controllers/EmpresaController.php';
require_once './controllers/IvaController.php';
require_once './controllers/ProdutoController.php';
require_once './controllers/UserController.php';

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
            switch ($a) {
                case "index":
                    $controller->index();
                    break;
            }
            break;

        case "iva":
            $controller = new IvaController();
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
                    $controller->index($_GET['tipo']);
                    break;
                case "edit":
                    $controller->edit($_GET['id']);
                    break;
                case "update":
                    $controller->update($_GET['id']);
                    break;
                case "create":
                    $controller->create($_GET['role']);
                    break;
                case "store":
                    $controller->store();
                    break;
            }
            break;

        default:
            $controller = new SiteController();
            $controller->index();
    }

}