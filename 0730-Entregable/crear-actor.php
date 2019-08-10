<?php
    require_once 'autoload.php';
    
    if ($_POST) {
        $error='';
        if($_POST['first_name']==''){
            $error='Debe ingresar un Nombre';
        } elseif ($_POST['last_name']==''){
            $error='Debe ingresar un Apellido';
        } elseif($_POST['rating']==''){
            $error='Debe ingresar un Rating';
        } elseif($_POST['favorite_movie_id']==''){
            $error='Debe seleccionar una Pelicula';
        } else {
            $guardarActor = new Actor($_POST['first_name'], $_POST['last_name'], $_POST['rating']);
            $guardarActor->setFavoriteMovieId((int) $_POST['favorite_movie_id']);
            $guardar = DB::saveActor($guardarActor);
        }
    }

    $pageTitle = 'Crear actor';
    require_once 'partials/head.php';
    require_once 'partials/navbar.php';
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="text-center mb-3 text-danger">Crear Actor</h2>
            <?php if (isset($guardar)) : ?>
                <div class="alert alert-primary">
                    <p>El actor se guardo con exito!</p>
                </div>
            <?php endif; ?>

            <?php if (isset($error)) : ?>
                <div class="alert alert-warning">
                    <p><?= $error ?></p>
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Ingrese el Nombre"
                            value="<?php if (isset($_POST['first_name'])){echo $_POST['first_name'];}?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Ingrese el Apellido"
                            value="<?php  if(isset($_POST['last_name'])) {echo $_POST['last_name'];}?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Rating:</label>
                            <input type="number" class="form-control" name="rating" min="0" max="10" placeholder="Cual es el Rating"
                            value="<?php if(isset($_POST['rating'])){echo $_POST['rating'];}?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pelicula favorita:</label>
                            <select class="form-control" name='favorite_movie_id'>
                                <option></option>
                                <?php $allMovies = DB::getAllMovies(); ?>
                                <?php foreach($allMovies as $movie) : ?>
                                    <option value="<?= $movie->getId() ?>"><?= $movie->getTitle() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>