
<section class="content">
    <br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="./public/img/logo_empresa.png"
                             alt="logo da empresa">
                    </div>

                    <h3 class="profile-username text-center"><?php if(isset($empresa)){echo $empresa->designacao_social;} ?></h3>


                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Email</b> <span class="float-right"><?=$empresa->email?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Nif</b> <span class="float-right"><?=$empresa->nif?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Morada</b> <span class="float-right"><?=$empresa->morada?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Codigo Postal</b> <span class="float-right"><?=$empresa->codigo_postal?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Localidade</b> <span class="float-right"><?=$empresa->localidade?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Capital Social</b> <span class="float-right">€ <?=number_format($empresa->capital_social,2)?></span>
                        </li>
                    </ul>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>