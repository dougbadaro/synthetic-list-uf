<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Synthetic List UF's</title>
  <style>
    th,
    td {
      padding: 8px;
      text-align: center;
    }
  </style>
</head>

<body style="padding: 30px; overflow: hidden;">
  <?php
  $syntheticlist = array(
    "Acre" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg",
      "Unidade Federativa" => "Acre",
      "Abreviação" => "AC",
      "Sede do Governo" => "Rio Branco",
      "Área" => 164122.2,
      "População" => 795145,
      "Densidade" => 4.30,
      "PIB (2015)" => 13622000,
      "(% total) (2015)" => 0.2,
      "PIB per capita (R$) (2015)" => 16953.46,
      "IDH (2010)" => 0.663,
      "Alfabetização (2016)" => "86.9%",
      "Mortalidade Infatil (2016)" => "17.0%",
      "Expectativa de Vida (2016)" => "73.9 anos"
    ),
    "Alagoas" => array(
      "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg",
      "Unidade Federativa" => "Alagoas",
      "Abreviação" => "AL",
      "Sede do Governo" => "Maceió",
      "Área" => 27767.7,
      "População" => 3327551,
      "Densidade" => 108.61,
      "PIB (2015)" => 46364000,
      "(% total) (2015)" => 0.8,
      "PIB per capita (R$) (2015)" => 13877.53,
      "IDH (2010)" => 0.631,
      "Alfabetização (2016)" => "80.6%",
      "Mortalidade Infatil (2016)" => "19.5%",
      "Expectativa de Vida (2016)" => "71.6 anos"
    ),
    // "Acre" => array(
    //   "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg",
    //   "Unidade Federativa" => "Acre",
    //   "Abreviação" => "AC",
    //   "Sede do Governo" => "Rio Branco",
    //   "Área" => 164122.2,
    //   "População" => 795145,
    //   "Densidade" => 4.30,
    //   "PIB (2015)" => 13622000,
    //   "(% total) (2015)" => 0.2,
    //   "PIB per capita (R$) (2015)" => 16953.46,
    //   "IDH (2010)" => 0.663,
    //   "Alfabetização (2016)" => 86.9,
    //   "Mortalidade Infatil (2016)" => 17.0,
    //   "Expectativa de Vida (2016)" => 73.9
    // ),
  );
  ?>

  <h1>Lista Sintética</h1>
  <table>
    <thead style="background-color: #f0f0f0">
      <?php
      foreach ($syntheticlist as $keylist => $valuelist) {
        echo "<tr>";
        foreach ($valuelist as $key => $value) {
          echo "<th>$key</th>";
        }
        echo "</tr>";
        break;
      }
      ?>
    </thead>
    <tbody>
      <?php
      foreach ($syntheticlist as $keylist => $valuelist) {
        echo "<tr>";
        foreach ($valuelist as $key => $value) {
          echo $key === "Bandeira" ?
            "<td><img src=\"$value\" alt=\"\" height=\"32px\" width=\"45px\"></td>"
            :
            "<td>$value</td>";
        }
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>

</html>