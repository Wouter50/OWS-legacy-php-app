<?php

function displayRecipe(array $recipe): string
{
    $recipe_content = '';

    if ($recipe['is_enabled']) {
        $recipe_content = '<article>';
        $recipe_content .= '<h3>' . $recipe['title'] . '</h3>';
        $recipe_content .= '<div>' . $recipe['recipe'] . '</div>';
        $recipe_content .= '<i>' . $recipe['author'] . '</i>';
        $recipe_content .= '</article>';
    }

    return $recipe_content;
}

function displayAuthor(string $authorEmail, array $users): string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }

    return 'Non trouvé.';
}

function displayUser(int $userId, array $users): string
{
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        if ($userId === (int) $user['user_id']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }

    return 'Non trouvé.';
}

function retrieveIdFromUserMail(string $userEmail, array $users): int
{
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        if ($userEmail === $user['email']) {
            return $user['user_id'];
        }
    }

    return 0;
}

function getRecipes(array $recipes, int $limit): array
{
    $valid_recipes = [];
    $counter = 0;

    foreach ($recipes as $recipe) {
        if ($counter == $limit) {
            return $valid_recipes;
        }

        $valid_recipes[] = $recipe;
        $counter++;
    }

    return $valid_recipes;
}
