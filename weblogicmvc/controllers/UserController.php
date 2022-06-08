<?php
require_once './controllers/BaseController.php';
require_once './models/User.php';

class UserController extends BaseController
{
    function index($tipo)
    {
        $users = User::all();
        $this->renderView('user/index',['users'=>$users,'tipo'=>$tipo]);
    }

    function create($roleAdicionar){

        $this->renderView('user/create',['roleAdicionar'=>$roleAdicionar]);

    }

    function store()
    {

        if(($_POST['username'] != " "))
        {

            //create new resource (activerecord/model) instance with data from POST
            //your form name fields must match the ones of the table fields
            $user = new User($_POST);
            if($user->is_valid()){
                $user->save();
                $this->redirectToRoute('user', 'index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('user/create', ['user' =>$user]);
            }
        }
        else
        {
            $this->renderView('user/create');
        }

    }

    function edit($id){
        $user = User::find([$id]);
        if(is_null($user)){

        }else{
            $this->renderView('user/edit',['user'=>$user]);
        }
    }

    function update($id)
    {

        if(($_POST['username'] != " " ))
        {
            //find resource (activerecord/model) instance where PK = $id
            //your form name fields must match the ones of the table fields
            $user = User::find([$id]);
            $user->update_attributes($_POST);
            if($user->is_valid()){
                $user->save();
                $this->redirectToRoute('user', 'index');
            } else {
                $this->renderView('user/edit', ['produto'=>$user]);
            }
        }
        else
        {
            $user = User::find([$id]);
            $this->renderView('user/edit', ['produto'=>$user]);
        }
    }


}