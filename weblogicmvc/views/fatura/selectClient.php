<div class="card">
    <div class="card-header">
        <h1 class="card-title m-0">Tabela de Clientes</h1>
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
            <?php foreach ($clientes as $cliente) {
                    ?><tr>
                    <td><?=$cliente->id?></td>
                    <td><?=$cliente->username?></td>
                    <td><?=$cliente->email?></td>
                    <td><?=$cliente->telefone?></td>
                    <td><?=$cliente->nif?></td>
                    <td><?=$cliente->morada?></td>
                    <td><?=$cliente->codigo_postal?></td>
                    <td><?=$cliente->localidade?></td>
                    <td>
                        <a href="./?c=fatura&a=store&idCliente=<?=$cliente->id?>" class="btn-sm text-decoration-none btn-warning" >Selecionar</a>
                    </td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>