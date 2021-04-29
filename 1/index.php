<?php 
  $campionato = [
    [
      "squadracasa" => "Atletico Perniente",
      "squadraospite" => "Sestese",
      "punticasa" => "78",
      "puntiospite" => "120",
    ],
    [
      "squadracasa" => "Fiorentina",
      "squadraospite" => "Juventus",
      "punticasa" => "100",
      "puntiospite" => "0",
    ],
    [
      "squadracasa" => "Ciaoino",
      "squadraospite" => "Ciaoetto",
      "punticasa" => "78",
      "puntiospite" => "120",
    ],
  ];

  var_dump($campionato);
  //scorro array del campionato
  for($i = 0; $i < count($campionato); $i++) {
    ?> 
    <div>
   <!-- stampo per ogni array tutti gli oggetti -->
      <?php echo $campionato[$i]["squadracasa"] ?> -
      <?php echo $campionato[$i]["squadraospite"] ?> |
      <?php echo $campionato[$i]["punticasa"] ?> -
      <?php echo $campionato[$i]["puntiospite"] ?>
    </div>
    <?php
  }
?>