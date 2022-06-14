<div class="card">
    <div class="card-header">
        <h3 class="card-title">Escolha o produto</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-responsive-md">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
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
                    <td><?=$produto->id?></td>
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