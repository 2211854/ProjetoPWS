<div class="card">
    <div class="card-header">
        <h1 class="card-title m-0">Escolha o produto</h1>
        <form action="./?c=linhaFatura&a=selectProduct&idFatura=<?=$fatura->id?>" method="post">
            <button type="submit" class="btn-sm text-decoration-none float-right btn-secondary" ><i class="fas fa-magnifying-glass"></i></button>
            <input type="text" class="float-right col-3" id="produto" name="produto" placeholder="Nome/referencia do produto">
        </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-responsive-md">
            <thead>
            <tr>
                <th>Referencia</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Stock</th>
                <th>Iva</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto) { ?>
                <tr>
                    <td><?=$produto->referencia?></td>
                    <td><?=$produto->descricao?></td>
                    <td>€ <?=number_format($produto->preco,2)?></td>
                    <td><?=$produto->stock?></td>
                    <td><?=$produto->iva->percentagem?> %</td>
                <td>
                    <a href="./?c=linhaFatura&a=create&idProduto=<?=$produto->id?>&idFatura=<?=$fatura->id?>" class="btn-sm text-decoration-none btn-warning" >Selecionar</a>
                </td>
                </tr>
            <?php   } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>