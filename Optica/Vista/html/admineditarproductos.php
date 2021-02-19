<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/adminmenu.css">
    <link rel="stylesheet" href="../css/directorios.css">
    <link rel="stylesheet" href="../css/agregar.css">
    <title>Agregar Usuarios</title>
</head>

<body>
    <?php include "menu.php" ?>
    <div class="container">
        <div class="row justify-content-center">
            <form action="../../Modelo/registrar.php" method="POST">
                <class class="form-row">
                    <div class="h1">MODIFICAR PRODUCTO # <span>1234</span></div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Nombre:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer01" id="validationServer02" placeholder="lentes"
                                required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                            <div class="invalid-feedback">
                                Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Marca:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer02" id="validationServer01" placeholder="vitalia"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                    </div>
                    <!--  eso es un comentario -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Tipo:</label>
                            <!-- is-valid es una clase para validar campos -->
                                <select class="form-select form-select" name="validationServer03" aria-label=".form-select-lg example">
                                    <option selected value="Cliente">Lentes de contacto</option>
                                    <option value="Administrador">paños</option>
                                    <option value="Administrador">cordones</option>
                                    <option value="Administrador">cajas de los lentes</option>
                                    <option value="Administrador">gafas</option>
                                    <option value="Administrador">lentes</option>
                                </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Precio:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer04" id="validationServer01" placeholder="5$"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                    </div>
                    <div class="row">              
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Material:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer05" id="validationServer01" placeholder="lino"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Sexo:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <select class="form-select form-select" name="validationServer06" aria-label=".form-select-lg example">
                                <option selected value="Cliente">Masculino</option>
                                <option value="Administrador">Femenino</option>
                            </select>
                        </div>

                    </div>
        </div>
        <button class="btn btn-primary" type="submit">GUARDAR DATOS</button>
        <a class="btn btn-dark" href="adminproductos.html">CANCELAR</a>
        </form>
    </div>
    </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>