<?php

function create_recipe($recipe_title, $prep_time, $level, $yield, $rating, $ingredients, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' ( recipe_title, prep_time, level, yield, rating, ingredients, instructions)';
    $query .= " VALUES (' $recipe_title', '$prep_time', '$level', '$yield', '$rating', '$ingredients', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>