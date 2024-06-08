<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="/../views/tarea/style/index.css">
</head>
<body>
    <header>
        <div class="header">
            <a class="link-header" href="">CHAT</a>
            <a class="link-header" href="">TAREA</a>
            <a class="link-header" href="">CONFIGURACION</a>
        </div>
    </header>
    <main>
        <div class="task">
            <ul class="targets">
                <li>
                    <a href="">Tarea 1</a>
                </li>
                <li>
                    <a href="">Tarea 2</a>
                </li>
                <li>
                    <a href="">Tarea 3</a>
                </li>
            </ul>
        </div>
        <div class="create-task">
            <div class="form-task">
                <h1>Crear Tarea</h1>
                <form action="">
                    <div class="option-form">
                        <label for="name-task">Nombre de la tarea</label>
                        <input type="text" name="name" placeholder="Nombre de la tarea">
                    </div>
                    <div class="option-form">
                        <label for="description-task">Descripcion de la tarea</label>
                        <input type="text" name="description" placeholder="Descripcion de la tarea">
                    </div>
                    <div class="option-form">
                        <label for="date-task">Fecha de la tarea</label>
                        <input type="date" name="date" placeholder="Fecha de la tarea">
                    </div>
                    <div class="option-form">
                        <label for="asigned-user">Asignar usuario</label>
                        <select name="asigned-user">
                            <option value="user1">User 1</option>
                            <option value="user2">User 2</option>
                            <option value="user3">User 3</option>
                        </select>
                    </div>
                    <button type="submit"> Crear Tarea</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
