<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Criar Produto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./?c=produto&a=store" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="referencia">Referencia</label>
                                <input type="text" class="form-control" id="referencia" name="referencia" value="<?php if(isset($produto)){echo $produto->referencia; }?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('referencia');} ?>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php if(isset($produto)){echo $produto->descricao; }?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('descricao');} ?>
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" class="form-control" id="preco" name="preco" value="<?php if(isset($produto)){echo $produto->preco; }?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('preco');} ?>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" value="<?php if(isset($produto)){echo $produto->stock; }?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('stock');} ?>
                            </div>
                            <div class="form-group">
                                <label >Iva</label>
                                <select class="form-group" id="iva_id" name="iva_id">
                                    <?php if(isset($ivas)){
                                        foreach($ivas as $iva){?>
                                            <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?></option>
                                        <?php }
                                    }?>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Criar</button> <a href="./?c=produto&a=index" class="btn btn-primary float-right">Voltar</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>