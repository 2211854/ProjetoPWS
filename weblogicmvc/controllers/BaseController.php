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
            if($role == "Admin"){
                require_once './views/layout/headerAdmin.php';
                require_once './views/' . $view . '.php';

            }elseif ($role == "Funcionario"){

                require_once './views/layout/headerFunc.php';
                require_once './views/' . $view . '.php';

            }elseif ($role == "Cliente"){

                require_once './views/layout/headerClient.php';
                require_once './views/' . $view . '.php';

            }
            require_once './views/layout/footer.php';
        }
        elseif($view == 'login/index'){
            require_once './views/layout/headerLogin.php';
            require_once './views/' . $view . '.php';
            require_once './views/layout/footerLogin.php';
        }else{
            require_once './views/layout/headerSite.php';
            require_once './views/' . $view . '.php';
            require_once './views/layout/footerSite.php';
        }


    }

    protected function redirectToRoute($controllerPrefix, $action)
    {
        header('Location: ./router.php?c=' . $controllerPrefix . '&a=' . $action);
    }
}