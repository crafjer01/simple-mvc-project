<?php require 'partials/head.php' ?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Slug</th>
        <th>Extrato</th>
        <th>Contenido</th>
    </tr>
    <?php foreach($posts as $post) : ?>
        <tr>
            <td><?php echo $post->name ?></td>
            <td><?php echo $post->slug ?></td>
            <td><?php echo $post->excerpt ?></td>
            <td><?php echo $post->body ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require 'partials/footer.php' ?>
