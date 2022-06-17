<div class="card">
    <div class="card-header">
        <h1 class="card-title m-0">Tabela IVAS</h1>
        <a href="./?c=iva&a=create" class="btn btn-primary float-right">Criar</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-responsive-md">
            <thead>
            <tr>
                <th>Percentagem</th>
                <th>Descrição</th>
                <th style="width: 40px">Em vigor</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ivas as $iva) { ?>
                <tr>
                    <td><?=$iva->percentagem?> %</td>
                    <td><?=$iva->descricao?></td>
                    <td><?=$iva->em_vigor?></td>
                    <td>
                        <a href="?c=iva&a=edit&id=<?=$iva->id?>" class="btn-sm text-decoration-none btn-warning" ><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="?c=iva&a=destroy&id=<?=$iva->id?>" class="btn-sm text-decoration-none	btn-danger" ><i class="fa-solid fa-xmark"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>