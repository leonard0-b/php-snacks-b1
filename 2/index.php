<?php 
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];
  var_dump($name, $email, $age);

  //controllo che la mail sia valida e che contenga @ e .
  $emailValidate = filter_var($email, FILTER_VALIDATE_EMAIL);
  $emailValidateAt = strpos($email, "@");
  $emailDot = strpos($email, ".");
  
  //controllo che il numero sia un intero
  $ageValidate = filter_var($age, FILTER_VALIDATE_INT);

  //controllo lunghezza nome
  $validName = strlen($name);

  if($name === null && $email === null && $age === null) {
    echo "INSERISCI I TUOI DATI :)";
  } elseif ($emailValidate === false || $emailValidateAt === false || $emailDot === false) {
    echo "LA MAIL NON VA BENE :)";
  } elseif ($ageValidate === false) {
    echo "LA TUA ETA' DEVE ESSERE UN NUMERO :)";
  } elseif ($validName <= 2) {
    echo "INSERISCI UN NOME CON PIU' DI DUE CARATTERI :)";
  } elseif ($name === null && $email === null && $age === null) {
    echo "INSERISCI I TUOI DATI :)";
  } else {
    echo "TUTTO OK :D";
  }
?> 
