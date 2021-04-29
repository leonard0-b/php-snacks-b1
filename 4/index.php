<?php
  $alunni = [
    [
      "nome" => "Ciao",
      "cognome" => "Sono",
      "voti" => [6, 4, 9, 2, 3]
    ],
    [
      "nome" => "UnƏ",
      "cognome" => "AlunnƏ",
      "voti" => [4, 1, 9, 10, 8]
    ],
  ];

  var_dump($alunni);
  
  //scorro l'array alunni
  for($i = 0; $i < count($alunni); $i++) {
    //salvo una variabile per calcolare la media voti
    $mediaVoti = array_sum($alunni[$i]["voti"]) / count($alunni[$i]["voti"]);
    ?>
    <!-- stampo a schermo nome cognome e media voti -->
    <div style="margin-top:35px; border: 1px solid red; width:250px; padding:10px; border-radius:8px;">
      <p><?php echo "Nome: " . $alunni[$i]["nome"];?></p>
      <p><?php echo "Cognome: " . $alunni[$i]["cognome"];?></p>
      <p><?php echo "Media Voti: " . $mediaVoti?></p>
    </div>
    <?php
  }






?>