<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title m-0">Editar produto</h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./?c=produto&a=update&id=<?=$produto->id?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="referencia">Referencia</label>
                                <input type="text" class="form-control" id="referencia" name="referencia" value="<?= $produto->referencia ?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('referencia');} ?>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $produto->descricao ?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('descricao');} ?>
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="number" step="0.01" class="form-control" id="preco" name="preco" value="<?= $produto->preco?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('preco');} ?>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="<?= $produto->stock ?>"><?php if(isset($produto->errors)){ echo $produto->errors->on('stock');} ?>
                            </div>
                            <div class="form-group">
                                <label >Iva</label>
                                <select class="form-group" id="iva_id" name="iva_id">
                                    <?php if(isset($ivas)){
                                        foreach($ivas as $iva){?>
                                            <?php if($iva->id == $produto->iva_id) { ?>
                                                <option value="<?= $iva->id?>" selected><?= $iva->percentagem;?> </option>
                                            <?php }else { ?>
                                                <option value="<?= $iva->id?>"> <?= $iva->percentagem;?></option>
                                            <?php }
                                        }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Editar</button> <a href="./?c=produto&a=index" class="btn btn-primary float-right">Voltar</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>