<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="<?php echo URL ?>vista/css/adminmenu.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/directorios.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/agregar.css">
    <title>Agregar Usuarios</title>
</head>

<body>
    <div id="menu"></div>
    <div class="container">
        <div class="row justify-content-center">
            <form action="<?php echo URL; ?>usuario/registrarcontrolador" method="POST">
                <class class="form-row">
                    <div class="h1">AGREGAR USUARIOS</div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Nombre:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer01" id="validationServer01" placeholder="María Paula"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Apellido:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer02" id="validationServer02" placeholder="Cando Chimbo"
                                required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                            <div class="invalid-feedback">
                                Incorrecto
                            </div>
                        </div>
                    </div>
                    <!--  eso es un comentario -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer03">Email:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="email" class="form-control " name="validationServer03" id="validationServer03"
                                placeholder="ejemplo@example.com" required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer04">Contraseña:</label>
                            <input type="password" class="form-control" name="validationServer04" id="validationServer04" placeholder="abc123"
                                required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                            <div class="invalid-feedback">
                                Por favor ingrese una contraseña válida.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServerUsername">Nombre de Usuario</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control " name="validationServerUsername" id="validationServerUsername"
                                    placeholder="@mariapaula" aria-describedby="inputGroupPrepend3" required>
                                <div class="valid-feedback">
                                    Correcto
                                </div>
                                <div class="invalid-feedback">
                                    Porfavor ingrese un nombre de usuario válido
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer05">Tipo de Usuario</label>
                            <select class="form-select form-select" name="validationServer05" aria-label=".form-select-lg example">
                                <option selected value="Cliente">Cliente</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div>
        </div>
        <button class="btn btn-primary" type="submit">GUARDAR DATOS</button>
        <a class="btn btn-dark" href="<?php echo URL ?>/usuario/mostrarcontrolador">CANCELAR</a>
        </form>
    </div>
    </div>


    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <script>
        $("#menu").load("adminmenu.html header");
    </script>

</body>

</html>