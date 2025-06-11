<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabla de Comentarios</title>
</head>
<body>
    <h1 class="text-center p-3">Prueba de Conexion</h1>
    <div class="container-fluid row">
        <form class="col-4 p-4" method="POST">
            <h3 class="text-center">Registro de usuarios</h3>
            <?php
            include "model/conn.php";
            include "controller/new_user.php";
            include "controller/delete_user.php";
            
            ?>
            <div class="mb-3">
                <label for="formNombreLabel" class="form-label">Escribe tu Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="formApellidoLabel" class="form-label">Escribe tu Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="formCedulaLabel" class="form-label">Escribe tu Cedula</label>
                <input type="number" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="formCorreoLabel" class="form-label">Escribe tu Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-warning" name="btnregistrar" value="ok">Registrar usuario</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Correo electronico</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "model/conn.php";
                    $sql = $conn->query("select * from usuarios");
                    while ($datos = $sql->fetch_object()){ ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->cedula ?></td>
                        <td><?= $datos->email ?></td>
                        <td>
                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        </td>
                        <td>
                            <a onclick="return confirm('Desear borrar este usuario?')" href="new_index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>