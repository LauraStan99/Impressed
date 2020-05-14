<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Favorite | Impressed</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo URL; ?>public/css/wishlist1.css" rel="stylesheet" />
</head>
<?php
require 'header.php';
?>

<body>

    <main class="main">
        <h1>Favorite</h1>
        <div>
            <hr>

            <table>
                <tr>
                    <th class="articol"></th>
                    <th class="detalii"></th>
                    <th class="add"></th>

                </tr>
                <?php
                while ($row = $this->result->fetch()) {
                ?>
                    <tr>
                        <td>
                            <img id="produs" src="<?php echo URL; ?>public/poze/<?php echo  $row['imagine']; ?>.png">
                        </td>
                        <td class="detalii-produs">

                            <h2><?php echo $row['nume']; ?> </h2>
                            <a>Material : <?php echo $row['material']; ?> </a>
                            <a>Culoare : <?php echo $row['culoare']; ?></a>
                            <a>Marime : <?php echo $row['marime']; ?></a>

                        </td>
                        <td>
                            <div class="stergere">
                                <a class="sterge-produs">X Sterge produs</a>
                                <p>Disponibilitate: <a class="stock">in stock</a></p>
                                <a>Pret : <?php echo $row['pret']; ?> </a>
                                <form method="POST">
                                <button name = "adauga-cos" type="submit" formaction="<?php echo URL; ?>produse/addToCartMenPage/<?php echo $row['id_produs'] ?>/<?php echo $this->category ?>">Adauga in cos</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                <?php } ?>
            </table>

    </main>

    <footer>
        <?php
        require 'footer.php';
        ?>
    </footer>


</html>