
<!DOCTYPE html>
<html lang="ro">

<head>
  <title>Checkout | Impressed</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL; ?>public/css/checkout.css" rel="stylesheet" />
</head>

<body>

  <?php
  require 'header.php';
  ?>
  <main>
    <!-- <p>Aveti cumparaturi in valoare de : 100$</p> -->

    <div class="main-stanga">
      <h1>Detalii livrare</h1>
      <div class="metoda-livrare">
        <p>
          Medota de livrare: Curier<input type="checkbox" id="curier" />
          Posta<input type="checkbox" id="posta" />
          <a style="color: red;">*</a>
        </p>
      </div>

      <label for="numeCheckout">
        <a><img id="contNume" src="<?php echo URL; ?>public/poze/cont.png" alt="Cont-nume" /> Nume</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="numeCheckout" name="nume-intreg" placeholder="Popescu" />

      <label for="prenumeCheckout">
        <a><img id="contPrenume" src="<?php echo URL; ?>public/poze/cont.png" alt="Cont-nume&prenume" />Prenume</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="prenumeCheckout" name="nume-intreg" placeholder="Daniel" />

      <label for="emailCheckout">
        <a><img id="email" src="<?php echo URL; ?>public/poze/email-Checkout.png" alt="Email-Checkout" />Email</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="emailCheckout" name="email-Checkout" placeholder="popescu@gmail.com" />

      <label for="adresaCheckout">
        <a><img id="adresa" src="<?php echo URL; ?>public/poze/adresaCheckout.png" alt="adresa-Checkout" />Adresa livrare</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="adresaCheckout" name="email-Checkout" placeholder=" Str. Primaverii nr.8" />

      <label for="orasCheckout">
        <a><img id="oras" src="<?php echo URL; ?>public/poze/orasCheckout.png" alt="oras-Checkout" />Oras</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="orasCheckout" name="oras-Checkout" placeholder="Iasi" />

      <label for="taraCheckout">
        <a><img id="tara" src="<?php echo URL; ?>public/poze/taraCheckout.png" alt="tara-Checkout" />Tara</a>
        <a style="color: red;">*</a>
      </label>
      <input type="text" id="taraCheckout" name="tara-Checkout" placeholder="Romania" />
      <button id="inapoi-la-cos" type="button" onclick="window.location.href='./cartFull.php'">
        &lt Inapoi la cos
      </button>
    </div>
    <div class="main-dreapta">
      <h2>Detalii mod plata</h2>
      <div class="metoda-plata">
        <p>
          Medota de plata: Ramburs<input type="checkbox" id="ramburs" />
          Online cu card bancar<input type="checkbox" id="card" />
          <a style="color: red;">*</a>
        </p>
      </div>

      <label for="numeCard">Nume card <a style="color: red;">*</a> </label>
      <input type="text" id="numeCard" name="nume-card" placeholder="Popescu Daniel" />

      <label for="numarCard">Numarul cardului de credit <a style="color: red;">*</a></label>
      <input type="text" id="numarCard" name="numar-card" placeholder="1111-2222-3333-4444" />

      <label for="lunaExpCard">Luna expirarii <a style="color: red;">*</a></label>
      <input type="text" id="lunaExpCard" name="luna-card" placeholder="October" />

      <label for="anExpCard">Anul expirarii <a style="color: red;">*</a></label>
      <input type="text" id="anExpCard" name="an-card" placeholder="2025" />

      <label for="CVVCard">CVV <a style="color: red;">*</a></label>
      <input type="text" id="CVVCard" name="CVV-card" placeholder="729" />

      <button id="plaseaza-comanda" type="button" onclick="window.location.href='./order.php'">
        Plaseaza comanda &gt
      </button>
    </div>
  </main>


  <?php
  require 'footer.php';
  ?>

</body>

</html>