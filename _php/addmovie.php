<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (isset($_SESSION['loggedin'])) {
    include('dbconnection.php');

    // sql query
    $like_film = 1;
    $heart_id = $_POST['heart_id'];
    $user_id = $_POST['user_id'];
    $movie_id;
    $movies = array();

    $sql = 'SELECT * FROM movies WHERE heart_id = ?';

    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param('s', $heart_id);
        $stmt->execute();
    
        $result = $stmt->get_result();

        // check we actually have results
        if ($result->num_rows > 0) {
            // fetch all results into an array
            while($row = $result->fetch_assoc()) { 
                $movies[] = $row;
            }
        }
        
        $movie_id = $movies[0]['movie_id'];  
        $stmt->close();
    }
    
    $sql = 'INSERT INTO `user_movies`(`user_fk_id`, `movie_fk_id`, `favourite`) VALUES (?, ?, 1)';
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param('ii', $user_id, $movie_id);
        $stmt->execute();
        $stmt->close();
    } 

    $jsonData = json_encode($movies);
    echo $jsonData;
}
?>