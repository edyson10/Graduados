<?php

include_once 'model/conexion.php';

session_start();
if (isset($_SESSION['rol'])) {
    header('Location: Administracion');
} else {
    header('Location: Login');
}

?>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0" style="margin: 10px;">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="view/presentacion/login/images/login.jpg" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="view/presentacion/login/images/logo_ufps.png" alt="logo" class="logo" height="100%" width="250px">
                        </div>
                        <p class="login-card-description">Graduados UFPS</p>
                        <form id="FormLogin" name="FormLogin" method="POST">
                            <div class="form-group">
                                <label for="email" class="sr-only">Correo o c&oacute;digo</label>
                                <input type="text" name="emailUser" id="emailUser" class="form-control" placeholder="Ingrese su correo o c&oacute;digo">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Contrase&ntilde;a</label>
                                <input type="password" name="passwordUser" id="passwordUser" class="form-control" placeholder="Ingrese su contrase&ntilde;a">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Rol</label>
                                <select class="form-control" id="ingresarRol" name="ingresarRol">
                                    <option value="1">Administrador</option>
                                    <option value="2">Egresado</option>
                                </select>
                            </div>
                            <!--<a class="btn btn-block login-btn mb-4" name="login" id="login" value="Ingresar">Ingresar</a>-->
                            <button class="btn btn-block login-btn mb-4" type="submit">Ingresar</button>
                        </form>
                        <a href="Recuperar-contraseña" class="forgot-password-link">¿Se te olvidó tu contraseña?</a>
                        <!--<p class="login-card-footer-text" style="color: #dd4b39;">¿No tienes una cuenta? <a href="Registrar" class="text-reset">Registrese aqu&iacute;</a></p>-->
                        <nav class="login-card-footer-nav">
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a style="font-size:1em; color: #dd4b39;" href="https://ingsistemas.cloud.ufps.edu.co/index.php" target="_blank">
                                Programa de Ingenier&iacute;a de Sistemas
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>