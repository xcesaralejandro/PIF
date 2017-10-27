<?php
namespace frust\Traits;

trait formulas{
  // FORMULA PARA CALCULAR EL IMC
  public function imc($peso, $altura){
    $altura = $altura / 100;

    $imc = $peso / ($altura * $altura);

    if ($imc >= 18.50 && $imc <= 24.99) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Normal';
      return $temp;
    }elseif ($imc >= 25 && $imc <= 29.99) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Sobrepeso';
      return $temp;
    }elseif ($imc >= 30 && $imc <= 34.99) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Obeso 1° (Riesgo moderado)';
      return $temp;
    }elseif ($imc >= 35 && $imc <= 39.99) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Obeso 2° (Riesgo severo)';
      return $temp;
    }elseif ($imc >= 40) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Obeso 3° (Riesgo muy severo)';
      return $temp;
    }elseif ($imc >= 17 && $imc <= 18.49) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Delgadez aceptable';
      return $temp;
    }elseif ($imc >= 16 && $imc <= 16.99) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Delgadez moderada';
      return $temp;
    }elseif ($imc > 16) {
      $temp[] = number_format($imc,2);
      $temp[] = 'Delgadez severa';
      return $temp;
    }
  }


  // FORMULA PESO IDEAL
  public function pesoIdeal($altura,$genero){
    if (strtoupper($genero) === 'M') {
      $pesoIdeal = (($altura / 100) * 2) * 21;
      return $pesoIdeal;
    }elseif (strtoupper($genero) === 'F') {
      $pesoIdeal = (($altura / 100) * 2) * 22;
      return $pesoIdeal;
    }else{
      $pesoIdeal = 0;
      return $pesoIdeal;
    }
  }

// Peso Ajustado
public function minimoAceptable($altura){
  return ($altura/100 * 2) * 18.5;
}

// Indice peso trader_cdl3blackcrows
public function indicePesoTalla($peso, $minAceptable){
  $valor = ($peso * 100) / $minAceptable;
  $valor = number_format($valor,2);
  if ($valor < 90) {
    $temp[] = $valor;
    $temp[] = 'Enflaquecido';
    return $temp;
  }elseif ($valor>=90 && $valor<110) {
    $temp[] = $valor;
    $temp[] = 'Normal';
    return $temp;
  }elseif ($valor>=110 && $valor<=119) {
    $temp[] = $valor;
    $temp[] = 'Sobrepeso';
    return $temp;
  }elseif ($valor>119) {
    $temp[] = $valor;
    $temp[] = 'Obeso';
    return $temp;
  }
}

// Peso ajustado
public function pesoAjustado($peso,$pesoIdeal){
  return ((($peso - $pesoIdeal) * 0.25) + $pesoIdeal);
}

// Peso maximo aceptable
public function maxAceptable($altura){
  return (24.9 * (($altura/100)*2));
}


}
