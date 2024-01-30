<?php

session_start();

use config\mysql;
use config\user;
use variables;

$postData = $_POST;

if (!isset($postData['id'])) {
    echo 'Il faut un identifiant valide pour supprimer une recette.';
    return;
}

$id = $postData['id'];

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => $id,
]);

header('Location: '.$rootUrl.'home.php');
