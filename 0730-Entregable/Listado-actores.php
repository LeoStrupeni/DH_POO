<?php
require_once 'autoload.php';

$actores = DB::getAllActors();

$pageTitle = 'Listado de actores';
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-3 text-danger">Listado de Actores</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Pelicula Favorita</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($actores as $actor) : ?>
                        <tr>
                            <td><?= $actor->getFirstName(); ?></td>
                            <td><?= $actor->getLastName(); ?></td>
                            <td><?= $actor->getRating(); ?></td>
                            <td><?php  if($actor->getFavoriteMovieId() == null) : ?>
                                    <?= 'Sin pelicula favorita' ?>
                                <?php else : ?>
                                    <?= $actor->getFavoriteMovieId(); ?>
                                <?php endif;?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>