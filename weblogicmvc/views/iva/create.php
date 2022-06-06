<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Editar Iva</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./?c=iva&a=store" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Percentagem</label>
                                <input type="text" class="form-control" id="percentagem" name="percentagem" value="<?php if(isset($iva)){echo $iva->percentagem; }?>"><?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem');} ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php if(isset($iva)){echo $iva->descricao; }?>"><?php if(isset($iva->errors)){ echo $iva->errors->on('descricao');} ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Em vigor</label>
                                <select class="form-group" id="em_vigor" name="em_vigor">
                                    <option disabled selected value> escolha uma opção </option>
                                    <option value="ativado">Ativado</option>
                                    <option value="desativado">Desativado</option>
                                </select>
                                <?php if(isset($iva->errors)){ echo $iva->errors->on('em_vigor');} ?>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Criar</button> <a href="./?c=iva&a=index" class="btn btn-primary float-right">Voltar</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>