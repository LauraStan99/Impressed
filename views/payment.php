<!DOCTYPE html>
<html lang="ro">

<head>
  <title>Payment | Impressed</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL; ?>public/css/payment.css" rel="stylesheet" />
</head>

<body>

  <?php
  require 'header.php';
  ?>
  <main>
    <div>
      <h2>Detalii mod plata</h2>
      <hr />
    </div>
    <br />
    <form method="post">
      <div class="linie">
        <label for="numeCard">Nume card <a style="color: red;">*</a> </label>
        <input type="text" id="numeCard" name="nume-card" placeholder="Popescu Daniel" value="<?php if (isset($this->numeCard)) echo $this->numeCard; ?>" />
        <span class="error" style="color:red; margin-left:20px;"> <?php if (isset($this->numeCardErr)) echo $this->numeCardErr; ?></span>
      </div>

      <div class="linie">
        <label for="numarCard">Numarul cardului de credit <a style="color: red;">*</a></label>
        <input type="text" id="numarCard" name="numar-card" placeholder="1111-2222-3333-4444" value="<?php if (isset($this->numarCard)) echo $this->numarCard; ?>" />
        <span class="error" style="color:red; margin-left:20px;"> <?php if (isset($this->numarCardErr)) echo $this->numarCardErr; ?></span>
      </div>

      <div class="linie">
        <label for="lunaExpCard">Luna expirarii <a style="color: red;">*</a></label>
        <input type="text" id="lunaExpCard" name="luna-card" placeholder="10" value="<?php if (isset($this->lunaCard)) echo $this->lunaCard; ?>" />
        <span class="error" style="color:red; margin-left:20px;"> <?php if (isset($this->lunaCardErr)) echo $this->lunaCardErr; ?></span>
      </div>

      <div class="linie">
        <label for="anExpCard">Anul expirarii <a style="color: red;">*</a></label>
        <input type="text" id="anExpCard" name="an-card" placeholder="2025" value="<?php if (isset($this->anCard)) echo $this->anCard; ?>" />
        <span class="error" style="color:red; margin-left:20px;"> <?php if (isset($this->anCardErr)) echo $this->anCardErr; ?></span>
      </div>
      <div class="linie">
        <label for="CVVCard">CVV <a style="color: red;">*</a></label>
        <input type="text" id="CVVCard" name="CVV-card" placeholder="729" value="<?php if (isset($this->cvvCard)) echo $this->cvvCard; ?>" />
        <span class="error" style="color:red; margin-left:20px;"> <?php if (isset($this->cvvCardErr)) echo $this->cvvCardErr; ?></span>
      </div>
      <input id="plaseaza-comanda" type="submit" value="Submit">
      Plaseaza comanda
      </input>
    </form>
  </main>


  <?php
  require 'footer.php';
  ?>

</body>

</html>