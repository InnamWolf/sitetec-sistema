<div class="hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <img src="/view/src/img/sistema/logo3.svg" alt="logo SiteTecSol" class="logoLogin">
            </div>
            <div class="card-body">
            <p class="login-box-msg">Inicie sesión</p>

            <form method="post" class="needs-validation" novalidate>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="loginEmail" onchange="validateJS(event,'email')" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>

                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="loginPassword" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>

                </div>

                <?php 
                    require_once "controller/usuarios.controlador.php";
                    $login = new UsuariosControlador();
                    $login->login();
                ?>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" onchange="rememberMe(event)">
                            <label for="remember">
                                Recordarme
                            </label>
                        </div>
                    </div>
                <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                <!-- /.col -->
                </div>

            </form>
            <!-- <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p> -->        
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->
</div>
<script src="view/src/plugins/jquery/jquery.min.js"></script>
<script src="view/src/custom/formularios/formularios.js"></script>