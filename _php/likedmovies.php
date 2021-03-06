<?php

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

if (isset($_SESSION['loggedin'])) {
    include('dbconnection.php');
    // sql query
    $movies = array();
    $liked_films = 1;

    $sql = 'SELECT movies.* FROM user_movies INNER JOIN users ON users.user_id = user_movies.user_fk_id INNER JOIN movies ON movies.movie_id = user_movies.movie_fk_id
    WHERE users.user_id = ? AND user_movies.favourite = ?';

    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param('ii', $_SESSION['id'], $liked_films);
        $stmt->execute();
    
        $result = $stmt->get_result();

        // check we actually have results
        if ($result->num_rows > 0) {
            // fetch all results into an array
            while($row = mysqli_fetch_assoc($result)) {
                $movies[] = $row;
            }
        }

		$jsonData = json_encode($movies);
        echo $jsonData;
    } 
}   

?>