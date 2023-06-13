<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Synthetic List UF's</title>
</head>

<body>
  <h1>Lista Sintética</h1>
  <table>
    <?php
    $syntheticlist = array(
      "Acre" => array(
        "Bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/1280px-Bandeira_do_Acre.svg",
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
        "Alfabetização (2016)" => 86.9,
        "Mortalidade Infatil (2016)" => 17.0,
        "Expectativa de Vida (2016)" => 73.9
      )
    );

    foreach ($syntheticlist as $keylist => $valuelist) {
      foreach ($valuelist as $key => $value) {
        echo "<tr>
                <th>$key</th>
              </tr>";
      }
    }
    ?>
  </table>
</body>

</html>