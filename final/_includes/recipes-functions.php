<?php

/**
 * get all recipes from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a recipe into the database
 * @param  string $recipe_title - title of the recipe
 * @param  string $prep_time - preptime of the recipe
 * @param  string $level - level of the recipe
 * @param  string $yield - steps of the recipe
 * @param  string $rating - steps of the recipe
 * @param  string $ingredients - steps of the recipe
 * @param  string $instructions - steps of the recipe
 * @return object - mysqli_result
 */
function add_recipe($recipe_title, $prep_time, $level, $yield, $rating, $ingredients, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_title, prep_time, level, yield, rating, ingredients, instructions)';
    $query .= " VALUES ('$recipe_title', '$prep_time', '$level', '$yield', '$rating', '$ingredients', '$instructions')";

    $result = mysqli_query($db_connection, $query);
    return $result;
}