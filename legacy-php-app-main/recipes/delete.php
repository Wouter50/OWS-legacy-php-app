<?php session_start();

use config\mysql;
use config\user;
use variables;

$getData = $_GET;
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Supprimer la recette ?</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php use header; ?>
        <h1>Supprimer la recette ?</h1>
        <form action="<?php echo $rootUrl . 'recipes/post_delete.php'; ?>" method="POST">
            <div class="mb-3 visually-hidden">
                <label for="id" class="form-label">Identifiant de la recette</label>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $getData['id']; ?>">
            </div>
            
            <button type="submit" class="btn btn-danger">La suppression est définitive</button>
        </form>
        <br />
    </div>

    <?php use footer; ?>
</body>
</html>
