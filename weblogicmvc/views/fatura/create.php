<div class="card">
    <div class="card-header">
        <h1 class="card-title m-0">Fatura</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">

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
                            <h5>Date: 2/10/2014</h5>
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
                        <div class="col-sm-4 invoice-col ">
                            Cliente:<br><br>
                            <a href="./?c=fatura&a=selectClient" class="btn btn-primary ">Selecionar Cliente</a>
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
                                    <th>Ref</th>
                                    <th>Descrição</th>
                                    <th>Qtd</th>
                                    <th>Preço Uni.</th>
                                    <th>IVA</th>
                                    <th>Taxa</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>€...</td>
                                    <td>...</td>
                                    <td>...</td>
                                    <td>€...</td>
                                </tr>
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
                                Fatura processada por <?=$_SESSION['username'] ?>
                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>€...</td>
                                    </tr>
                                    <tr>
                                        <th>IVA (...)</th>
                                        <td>€...</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>€...</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing
                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                            <a type="button" class="btn btn-danger float-right">
                                Anular
                            </a>
                            <a type="button" class="btn btn-success float-right" style="margin-right: 5px;">
                                Validar
                            </a>
                        </div>
                    </div>-->
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>
