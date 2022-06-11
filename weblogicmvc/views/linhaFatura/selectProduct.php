<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabela de Clientes</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-responsive-md">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nif</th>
                <th>Morada</th>
                <th>Cod. Postal</th>
                <th>Localidade</th>
                <th>Açoes</th>
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
                    <a href="./?c=linhaFatura&a=create&idProduto=<?=$produto->id?>" class="btn-sm text-decoration-none btn-warning" >Selecionar</a>
                </td>
                </tr>
            <?php   } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>