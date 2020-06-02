<!DOCTYPE html>
<html lang="ro">

<head>
  <title>Home | Impressed</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL; ?>public/css/homePage.css" rel="stylesheet" />

</head>

<body>
  <?php
  require 'header.php';
  ?>
  <main>
    <div class="slide-show">
      <div class="poze-main">
        <a href="<?php echo URL . 'produse/femei/jachete' ?>" title="Slide1"><img src="<?php echo URL; ?>public/poze/slide1.png" alt="Slide1" /></a>
      </div>

      <div class="poze-main">
        <a href="<?php echo URL . 'produse/barbati/tricouri' ?>" title="Slide2"><img src="<?php echo URL; ?>public/poze/slide2.png" alt="Slide2" /></a>
      </div>

      <div class="poze-main">
        <a href="<?php echo URL . 'produse/copii/bluze' ?>" title="Slide3"><img src="<?php echo URL; ?>public/poze/slide3.png" alt="Slide3" /></a>
      </div>

      <div class="poze-main">
        <a href="<?php echo URL . 'produse/femei/bluze' ?>" title="Slide4"><img src="<?php echo URL; ?>public/poze/slide4.png" alt="Slide4" /></a>
      </div>

      <div class="poze-main">
        <a href="<?php echo URL . 'produse/femei/rochii' ?>" title="Slide5"><img src="<?php echo URL; ?>public/poze/slide5.png" alt="Slide5" /></a>
      </div>
      <script type="text/javascript" src="<?php echo URL; ?>public/js/slide.js"></script>
    </div>
    <div class="produse">
      <?php
      while ($row = $this->result->fetch()) { ?>

        <div class="produs">
          <a href="<?php echo URL . 'produse/produs/' . $row['id_produs'] ?>">
            <img src="<?php echo URL; ?>/public/poze/<?php echo  $row['imagine']; ?>.png">
          </a>
          <div class="text"><?php echo  $row['nume']; ?></div>
        </div>

      <?php } ?>
    </div>

  </main>

  <?php
  require 'footer.php';
  ?>
</body>

</html>