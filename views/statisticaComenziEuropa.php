<!DOCTYPE html>
<html>

<head>
  <?php
  $country = array(
    'Romania' => 'Romania', 'Italia' => 'Italy', 'Germania' => 'Germany', 'Spania' => 'Spain', 'Rusia' => 'Russia', 'Anglia' => 'United Kingdom',
    'Portugalia' => 'Portugal', 'Grecia' => 'Greece', 'Austria' => 'Austria', 'Franta' => 'France', 'Norvegia' => 'Norway', 'Moldova' => 'Moldova'
  );
  ?>
  <link href="<?php echo URL; ?>public/css/statisticaComenzi.css" rel="stylesheet" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['geochart'],
      'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
    });
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {
      var data = google.visualization.arrayToDataTable([
        ['Tara', 'Numar comenzi livrate'],
        <?php

        while ($row = $this->result->fetch()) {

          echo "['" . $country[$row["tara"]] . "', " . $row["number"] . "],";
        }
        ?>

      ]);

      var options = {
        region: '150',
        colorAxis: {
          colors: ['pink', 'violet', 'purple']
        },
        backgroundColor: '#81d4fa',
        datalessRegionColor: 'white',
        defaultColor: '#f5f5f5',
      };

      var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
      chart.draw(data, options);


      var btnSave = document.getElementById('save-pdf');
      google.visualization.events.addListener(chart, 'ready', function() {
        btnSave.disabled = false;
      });
      btnSave.addEventListener('click', function() {
        var doc = new jsPDF('l', 'mm', [297, 350]);
        doc.addImage(chart.getImageURI(), 0, 40);
       
        doc.text("Statistica comenzilor livrate in tarile din Europa ", 40, 30);
        doc.save('chart.pdf');
      }, false);

    }
  </script>
</head>

<body>
  <?php
  require 'header.php';
  ?>
  <main>
    <div>
      <h1>Statistica comenzilor livrate in tarile din Europa </h1>
      <hr>
    </div>


    <div id="regions_div"></div>
    <form method="post" class="csv">
      <button type="submit" name="Export" id="exportAsCsv" formaction="<?php echo URL ?>admin/createCsvStatisticaComenziEuropa">EXPORT CSV</button>
    </form>
    <button id="save-pdf">SAVE AS PDF</button>

  </main>
  <?php
  require 'footer.php';
  ?>
</body>

</html>