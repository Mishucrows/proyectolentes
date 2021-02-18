<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminmenu.css">
    <link rel="stylesheet" href="../css/directorios.css">
    <title>Administrar Usuarios</title>

</head>

<body>
    <div id="menu"></div>
    <div class="container">
        <div class="h1">DIRECTORIO DE USUARIOS</div>
        <div class="row justify-content-end">
            <a href="adminagregarusuarios.html" type="button" class="btn btn-primary col-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                AGREGAR</a>
            <button type="button" class="btn btn-dark col-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                BUSCAR</button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Identificador</th>
                        <th scope="col">Nombre:</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre de Usuario:</th>
                        <th scope="col">Correo:</th>
                        <th scope="col">Tipo de Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            
                    include("conexionprueba.php");
            
                    $query="SELECT * FROM usuario";
                    $resultado= $conexion->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['nombreUsuario']; ?></td>
                        <td><?php echo $row['correoElectronico']; ?></td>
                        <td><?php echo $row['tipoUsuario']; ?></td>
                        
                        
      
                      </tr> 
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
        $("#menu").load("adminmenu.html header");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <!-- Button trigger modal -->


    <!-- Modales -->
    <!-- Modal para buscar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buscar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    Ingrese el ID a buscar:
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control" placeholder="ej: 1234" required>
                        </div>
                        <div class="col-4">
                            <a href="adminbuscarusuarios.html" type="button" class="btn btn-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                BUSCAR </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>