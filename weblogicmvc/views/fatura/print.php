<style>
    @media print {
        body {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            filter: grayscale(100%);
        }
    }
</style>
<br>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Fatura</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Main content -->
                <div class="invoice p-2 mb-2">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                <img src="./public/img/logo.png"> <br>Fatura+, Inc.
                            </h3>
                            <h5>Date: <?= date_format($fatura->data,'Y/m/d') ?></h5>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Empresa:
                            <address>
                                <strong><?= $empresa->designacao_social ?></strong><br>
                                <?= $empresa->morada ?><br>
                                <?= $empresa->codigo_postal ?>, <?= $empresa->localidade ?><br>
                                Telefone: <?= $empresa->telefone ?><br>
                                Email: <?= $empresa->email ?><br>
                                Nif: <?= $empresa->nif ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Cliente:
                            <address>
                                <strong><?= $fatura->cliente->username ?></strong><br>
                                <?= $fatura->cliente->morada ?><br>
                                <?= $fatura->cliente->codigo_postal ?>, <?= $fatura->cliente->localidade ?><br>
                                Nif: <?= $fatura->cliente->nif ?>
                            </address>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Valor Unitario</th>
                                    <th>Valor Iva</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($linhasFatura)){
                                    foreach ($linhasFatura as $linhaFatura) { ?>
                                        <tr>
                                            <td><?=$linhaFatura->produto->descricao?></td>
                                            <td><?=$linhaFatura->quantidade?></td>
                                            <td>€ <?=number_format($linhaFatura->valor_unitario,2)?></td>
                                            <td>€ <?=number_format($linhaFatura->valor_iva,2)?></td>
                                            <td>€ <?=$linhaFatura->quantidade * ($linhaFatura->valor_iva + $linhaFatura->valor_unitario)?></td>
                                        </tr>
                                    <?php }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                            <p class="text-muted well well-sm shadow-none" style="margin-top: 20%;">
                                Fatura processada por <?= $fatura->user->username ?>
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>€ <?=number_format($fatura->valor_total,2)?></td>
                                    </tr>
                                    <tr>
                                        <th>IVA (...)</th>
                                        <td>€ <?=number_format($fatura->iva_total,2)?></td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>€ <?=number_format(($fatura->iva_total + $fatura->valor_total),2)?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
</section>
<!-- /.content -->
<br><br>
<script>
    window.addEventListener("load", window.print());
</script>