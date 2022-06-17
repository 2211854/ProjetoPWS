<?php
require_once './models/User.php';

class UserController extends BaseAuthController
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
                $user->password = md5($user->password);
                $user->save();
                $this->redirectToRoute('user', 'index',['tipo' => $user->role]);
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
        if(!is_null($user)){
            $this->renderView('user/edit',['user'=>$user]);
        }
    }

    function update($id)
    {

        if(($_POST['username'] != "" ))
        {
            //find resource (activerecord/model) instance where PK = $id
            //your form name fields must match the ones of the table fields
            $user = User::find([$id]);
            if($_POST['password'] != "" ){
                $_POST['password']=md5($_POST['password']);
            }
            $user->update_attributes($_POST);
            if($user->is_valid()){
                $user->save();
                $this->redirectToRoute('user', 'index',['tipo' => $user->role]);
            } else {
                $this->renderView('user/edit', ['user'=>$user]);
            }
        }
        else
        {
            $user = User::find([$id]);
            $this->renderView('user/edit', ['user'=>$user]);
        }
    }

    function imageChange($id)
    {


        if(isset($_FILES['image']))
        {
            $user = User::find([$id]);
            $name = $_FILES['image']['name'];
            $target_dir = "./public/temp_uploud/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png");

            // Check extension
            if( in_array($imageFileType,$extensions_arr) ) {
                // Upload file
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // Convert to base64
                    $image_base64 = base64_encode(file_get_contents($target_file));
                    $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                    // Insert record
                    if($user->is_valid()){
                        $user->update_attribute('image',$image);
                        $user->save();

                    }
                }
                unlink($target_file);
            }

        }
        $this->redirectToRoute('backoffice','index');

    }


}