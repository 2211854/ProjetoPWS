<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title m-0">Criar User</h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./?c=user&a=store" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($user)){echo $user->username; }?>">
                                <?php
                                if(isset ($user->errors)) {
                                    if (is_array($user->errors->on('username'))) {
                                        $errors = $user->errors->on('username');
                                        foreach ($errors as $error) {
                                        echo $error . '<\br>';
                                        }
                                        } else {
                                        echo $user->errors->on('username');
                                    }
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?php if(isset($user)){echo $user->password; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('password');} ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($user)){echo $user->email; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('email');} ?>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php if(isset($user)){echo $user->telefone; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('telefone');} ?>
                            </div>
                            <div class="form-group">
                                <label for="nif">Nif</label>
                                <input type="text" class="form-control" id="nif" name="nif" value="<?php if(isset($user)){echo $user->nif; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('nif');} ?>
                            </div>
                            <div class="form-group">
                                <label for="morada">Morada</label>
                                <input type="text" class="form-control" id="morada" name="morada" value="<?php if(isset($user)){echo $user->morada; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('morada');} ?>
                            </div>
                            <div class="form-group">
                                <label for="codigo_postal">Cod. Postal</label>
                                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="<?php if(isset($user)){echo $user->codigo_postal; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('codigo_postal');} ?>
                            </div>
                            <div class="form-group">
                                <label for="localidade">Localidade</label>
                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?php if(isset($user)){echo $user->localidade; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('localidade');} ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Em vigor</label>
                                <select class="form-group" id="estado" name="estado">
                                    <option disabled value> escolha uma opção </option>
                                    <option value="ativado" selected>Ativado</option>
                                    <option value="desativado">Desativado</option>
                                </select>
                                <?php if(isset($user->errors)){ echo $user->errors->on('estado');} ?>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input readonly type="text" class="form-control" id="role" name="role" value="<?php  if(isset($roleAdicionar)){echo $roleAdicionar; } elseif(isset($user)){echo $user->role; }?>"><?php if(isset($user->errors)){ echo $user->errors->on('role');} ?>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Criar</button> <a href="./?c=user&a=index" class="btn btn-primary float-right">Voltar</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
