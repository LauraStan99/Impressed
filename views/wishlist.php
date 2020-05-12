<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Favorite | Impressed</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo URL; ?>public/css/wishlist.css" rel="stylesheet" />
</head>
<?php
require 'header.php';
?>

<body>

    <main>
        <h1>Favorite</h1>
        <div>
            <hr>
            <?php
            while ($row = $this->result->fetch()) {
            ?>
                <div class="produse-favorite">
                    <div class="imagine-produs">
                        <img id="produs" src="<?php echo URL; ?>public/poze/<?php echo  $row['imagine']; ?>.png">
                    </div>
                    <div class="detalii-produs">
                        <h2><?php echo $row['nume']; ?> </h2>
                        <a>Material :<?php echo $row['material']; ?> </a>
                        <a>Culoare : <?php echo $row['culoare']; ?></a>
                        <a>Marime :</a>
                    </div>
                    <div class="adauga-produs">
                        <a class="sterge-produs">X Sterge produs</a>
                        <p>Disponibilitate: <a class="stock">in stock</a></p>
                        <a>Pret : <?php echo $row['pret']; ?> </a>
                        <button class="adauga-in-cos">Adauga in cos</button>
                    </div>

                </div>

            <?php } ?>

    </main>
    <?php
    require 'footer.php';
    ?>


</html>