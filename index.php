<?php

require_once __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater - Film List</title>

    <link rel="stylesheet" href="styles\style.css">
</head>

<body>

    <main>
        <ul class="search-results movie-list">
            <?php foreach ($movies as $movie) : ?>
                <li class="card">
                    <article class="movie-container">
                        <figure class="movie-img">

                        </figure>

                        <div class="movie-infos">
                            <div class="names-infos">
                                <strong class="title">
                                    <?php $movie->printTitle() ?>
                                </strong>

                                <!-- <span class="subtitle">
                                    <?php if (isset($movie->subitle)) $movie->printSubtitle() ?>
                                </span> -->

                                <p class="description">
                                    <?php if (isset($movie->description)) $movie->printDescription() ?>
                                </p>
                            </div>

                            <div class="other-infos">
                                <div class="language">
                                    <?php $movie->printOriginalLanguageImage() ?>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>



</body>

</html>