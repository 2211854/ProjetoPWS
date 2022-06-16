
    <!-- Main content -->
    <div class="card" style="min-height: 1166px;">

        <div class="card-header">
            <h1 class="card-title m-0">Painel de Controlo</h1>
        </div>
        <div class="card-body p-0">
            <h4 class="text-center">Bem-Vindo <?=$_SESSION['username'] ?>!</h4>
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=$total_faturas?></h3>
                            <p>Faturas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=$total_produtos ?></h3>
                            <p>Total de produtos em stock</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=$total_users?></h3>
                            <p>Utilizadores Registados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?=$total_clientes ?></h3>
                            <p>Clientes ativos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /.content -->