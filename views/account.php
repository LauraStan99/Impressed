<!DOCTYPE html>
<html lang="ro">

<head>
  <title>Cont | Impressed</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL; ?>public/css/account.css" rel="stylesheet" />
</head>

<body>
  <header>
    <?php
    require 'header.php';
    ?>
  </header>
  <main>
    <div class="titlu">
      <img id="cont" src="<?php echo URL; ?>public/poze/cont.png" />
      <a id="titlu">Contul meu </a>
    </div>

    <div>
      <h1>
        Bine ati venit!
      </h1>
      <hr />
      <p>
        Date personale:
      </p>
    </div>
    <form method="post">
      <div class="tip-date">
        <label for="inregistrare-nume">
          <a id="id-nume"><img id="register1" src="<?php echo URL; ?>public/poze/register-tw.png" alt="register" />Nume : Popescu
          </a>
        </label>
      </div>
      <div class="date">
        <input type="text" id="inregistrare-nume" name="nume" placeholder="Nume nou " value="<?php echo $nume; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($numeErr)) {
                                                  echo $numeErr;
                                                } ?></span>
      </div>
      <br />

      <div class="tip-date">
        <label for="inregistrare-prenume">
          <a id="id-prenume"><img id="register2" src="<?php echo URL; ?>public/poze/register-tw.png" alt="register" />Prenume : Daniel</a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-prenume" name="prenume" placeholder="Prenume nou ... " value="<?php echo $prenume; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($prenumeErr)) {
                                                  echo $prenumeErr;
                                                } ?></span>

      </div>
      <br />

      <div class="tip-date">
        <label for="inregistrare-email">
          <a id="id-email"><img id="email" src="<?php echo URL; ?>public/poze/email-tw.png" alt="email" />Email :
            popescu@gmail.com</a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-email" name="email" placeholder="Email nou ..." value="<?php echo $email; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($emailErr)) {
                                                  echo $emailErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-telefon">
          <a id="id-telefon"><img id="telefon" src="<?php echo URL; ?>public/poze/telefon.png" alt="telefon" />Telefon :
            0765 234 567
          </a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-telefon" name="telefon" placeholder="Numar nou de telefon : ..." value="<?php echo $telefon; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($telefonErr)) {
                                                  echo $telefonErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-adresa">
          <a id="id-adresa"><img id="adresa" src="<?php echo URL; ?>public/poze/adresaCheckout.png" alt="adresa" />Adresa : Str. Primaverii nr.8</a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-email" name="adresa" placeholder="Adresa noua ..." value="<?php echo $adresa; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($adresaErr)) {
                                                  echo $adresaErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-parola">
          <a id="id-parola"><img id="parola" src="<?php echo URL; ?>public/poze/parola-tw.png" alt="parola" />Parola :
            12345678</a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-parola" name="parola" placeholder="Parola noua ********" value="<?php echo $parola; ?>" />
        <button class="buton-schimba" type="submit" onclick="window.location.href='#'">
          Schimba
        </button>
        <span class="error" style="color:red"> <?php if (isset($parolaErr)) {
                                                  echo $parolaErr;
                                                } ?></span>
      </div>
      <br />
    </form>

    <button class="buton-inapoi-cump" type="button" onclick="window.location.href='<?php echo URL; ?>home'">
      &lt Inapoi la cumparaturi
    </button>
  </main>
  <footer>
    <?php
    require 'footer.php';
    ?>
  </footer>
</body>

</html>