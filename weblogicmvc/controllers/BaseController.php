<?php
require_once './models/Auth.php';

class BaseController
{
    protected function renderView($view, array $params = [])
    {
        extract($params);

        $auth = new Auth();

        if($auth->isLoggedIn())
        {
            $username = $auth->getUsername();
            $role = $auth->getRole();
        }

        require_once './views/layout/header.php';
        require_once './views/' . $view . '.php';
        require_once './views/layout/footer.php';
    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }
}