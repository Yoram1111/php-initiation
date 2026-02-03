<?php

$notes = [12, 9, 14, 7, 18, 11, 15, 10, 8, 13];
$bonus = 2;

$maxNote = max($notes);
$minNote = min($notes);
$averageNote = array_sum($notes) / count($notes);

//$countAbove10 = 0;
//$countUnder10 = 0;
//foreach ($notes as $note) {
//    if($note > 10) {
//        $countAbove10++;
//    } else {
//        $countUnder10++;
//    }
//}

$notesUpper10 = count(array_filter($notes, function($note){return $note > 10;}));

//$notesWithBonus = [];
//
//foreach ($notes as $note) {
//    $newNote = $note + $bonus;
//    if ($newNote > 20) {
//        $newNote = 20;
//    }
//    $notesWithBonus[] = $newNote;
//}

$notesWithBonus = array_map(function($note) use ($bonus, $maxNote) {
    $newNote = $note + $bonus;
    return $newNote <= 20 ? $newNote : 20;
}, $notes);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Note Maximale</h5>
                    <p class="card-text"><?php echo $maxNote ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Note Minimale</h5>
                    <p class="card-text"><?php echo $minNote ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Moyenne</h5>
                    <p class="card-text"><?php echo $averageNote ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Notes supérieur à 10</h5>
                    <p class="card-text"><?php echo $notesUpper10 ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="text-center">
                <th>Note originale</th>
                <th>Note avec bonus</th>
            </tr>
            </thead>
            <tbody>
            <!-- Vos lignes ici -->
            <?php
            for($i = 0; $i < count($notes); $i++) {
                echo "<tr class='text-center'><td>$notes[$i]</td><td>$notesWithBonus[$i]</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>
