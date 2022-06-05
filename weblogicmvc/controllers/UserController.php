<?php
require_once './controllers/BaseController.php';

class UserController extends BaseController
{
    function index()
    {
        $this->renderView('user/index');
    }
}