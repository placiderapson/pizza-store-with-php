<?php 
    require 'helpers/connection.php';

    $retrievePizzas = 'SELECT id, title, ingredients FROM pizzas ORDER BY created_at';

    $result = mysqli_query($conn, $retrievePizzas);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
?>