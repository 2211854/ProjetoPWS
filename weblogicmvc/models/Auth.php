<?php
require_once './models/User.php';
class Auth
{
    public function __construct()
    {
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    public function checkLogin($username, $password)
    {
        $user = User::find_by_username_and_password($username, $password);
        if(!is_null($user))
        {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user->role;
            $_SESSION['id'] = $user->id;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['username']);
    }

    public function logout()
    {
        session_destroy();
    }

    public function getUsername()
    {
        if(isset($_SESSION['username']))
        {
            return $_SESSION['username'];
        }
        return null;
    }

    public function getRole()
    {
        if(isset($_SESSION['role']))
        {
            return $_SESSION['role'];
        }
        return null;
    }

    public function getId()
    {
        if(isset($_SESSION['id']))
        {
            return $_SESSION['id'];
        }
        return null;
    }

}
