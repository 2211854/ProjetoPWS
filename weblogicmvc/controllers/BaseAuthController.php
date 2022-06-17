<?php
require_once './controllers/BaseController.php';
require_once './models/Auth.php';

class BaseAuthController extends BaseController
{
    /*public function __construct()
    {
        $auth = new Auth();

        if(!$auth->isLoggedIn())
        {
            header('Location: ./?' . INVALID_ACCESS_ROUTE);
        }
    }*/

    public function loginFilterByRole($roles=[])
    {
        $auth = new Auth();

        $role = $auth->getRole();
        $validRole = in_array($role,$roles);

        if(!$validRole)
        {
            header('Location: ./?' . INVALID_ACCESS_ROLE);
        }
    }

}