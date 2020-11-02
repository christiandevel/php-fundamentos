<?php

// if (condition) {
//   # code...
// }

// if (condition) {
//   # code...
// } else {
//   # code...
// }

// if (condition) {
//   # code...
// } elseif (condition) {
//   # code...
// } else {
//   # code...
// }



  if ($edad >= 18) {
      echo "ES MAYOR DE EDAD";
  } else {
      echo "ES MENOR DE EDAD";
  }

  switch ($opcionEscogida) {
    case 1:
        echo "ELIGIÓ LA OPCIÓN 1";
        break;
    
    case 2:
        echo "ELIGIÓ LA OPCIÓN 2";
        break;

    case 3:
        echo "ELIGIÓ LA OPCIÓN 3";
        break;
    
    default:
        echo "ELIGIÓ UNA OPCIÓN DIFERENTE";
        break;
}

for ($i=1; $i < 6; $i++) { 
  echo $i;
}
// RESULTADO: 12345

while ($opcion != 0) {
  echo "ESTE CICLO NO ACABA HASTA QUE Opcion sea diferente a 0";
}

// Condición ? Si es Verdadero : Si es Falso ;
echo true ? "CUMPLE LA CONDICIÓN" : "NO CUMPLE LA CONDICIÓN";