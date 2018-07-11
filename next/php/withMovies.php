<?php

    if(!$conn) {
        include "./connection.php";
    }

?>

<div class="movies">
    
    <h1><span>Your Movies!</span></h1>

    <div class="theMovies">
        <ul>
            
            <?php

                $id = $_SESSION['id'];
                $sql = "SELECT * FROM movies INNER JOIN users ON mov_user_id = user_id WHERE user_id = " . $id . ";";
                $query = $conn -> query($sql);
                $queryRows = $query -> num_rows;

                if($queryRows > 0) {

                    while($data = $query -> fetch_assoc()) {
                        echo "<li class='movie'><a href='./next/posMovies?movieId=".$data['mov_id']."'><span>".$data['mov_title']."</span></a></li>";
                    }

                }

            ?>

            <li class="oneMoreMovie">
                <i class="fas fa-plus"></i>
            </li>

        </ul>
    </div>

</div>