<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="./output.css" rel="stylesheet">
      <title>Sapin</title>
</head>

<body class="bg-black">
      <div class="flex justify-center items-center min-h-screen">
            <div class="text-center" style="line-height: 1;">
                  <?php
                  $maxWidth = 41;
                  $trunkHeight = 6;
                  $trunkWidth = 10;
                  echo '<span class="text-yellow-400">*</span>';
                  for ($lineWidth = 4; $lineWidth <= $maxWidth; $lineWidth += 2) {
                        echo '<div>';

                        for ($posEtoile = 0; $posEtoile < $lineWidth; $posEtoile++) {
                              if ($posEtoile == 0 || $posEtoile == $lineWidth - 1) {
                                    echo '<span class="text-yellow-400">*</span>';
                              } else {
                                    echo '<span class="text-green-500">*</span>';
                              }
                        }

                        echo '</div>';
                  }

                  for ($ligneTronc = 0; $ligneTronc < $trunkHeight; $ligneTronc++) {
                        echo '<div>';
                        for ($positionEtoile = 0; $positionEtoile < $trunkWidth; $positionEtoile++) {
                              echo '<span class="text-red-500">*</span>';
                        }

                        echo '</div>';
                  }
                  ?>
            </div>
      </div>
</body>