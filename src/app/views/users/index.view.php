<?php require __DIR__ . '/../partials/head.php' ?>

<h1>Todos los usuarios</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </tr>
    <?php foreach($users as $user) : ?>
        <tr>
            <td><?php echo $user->id ?></td>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->email ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Crear usuario</h1>

<form action="/usuarios" method="POST">
    <input type="text" name="name"><br>
    <input type="text" name="email"> <br>
    <input type="password" name="password">
    <button type="submit">Buscar</button>
</form>

<?php require __DIR__ . '/../partials/footer.php' ?>
