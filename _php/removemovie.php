<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (isset($_SESSION['loggedin'])) {
    include('dbconnection.php');

    $movie_id = $_POST['movie_id'];
    $user_id = $_POST['user_id'];

    $sql = 'DELETE FROM user_movies WHERE user_fk_id = ? AND movie_fk_id = ?';

    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param('ii', $user_id, $movie_id);
        $stmt->execute();
        $stmt->close();
    }

    echo "success";
}