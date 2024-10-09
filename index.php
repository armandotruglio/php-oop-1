<?php
require_once __DIR__ . "/db/db.php";

$movieList = [];

foreach ($movies as $movie) {
    $movieList[] = $movie;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center fw_bold">MOVIES</h1>
            </div>
        </div>
        <div class="row py-5">
            <?php foreach ($movieList as $singleMovie) { ?>
            <div class="col">
                <div class="card text-center">
                    <div class="card-title p-3">
                        <?= $singleMovie["title"] ?>
                    </div>
                    <div class="card-body">
                        <span><?= $singleMovie["year"] ?></span>
                    </div>
                    <div class="card-footer">
                        <span><?= $singleMovie["genre"] ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>