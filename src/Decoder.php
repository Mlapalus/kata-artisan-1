<?php

namespace App;

class Decoder
{
  public function romainTo10(string $romainNumber)
  {
    $result = 0;
    $length =  strlen($romainNumber);

    for ($i = 0; $i < $length; $i++) {
      $currentValue = $this->decodeLetter($romainNumber[$i]);
      $nextValue = ($i + 1 < $length) ? $this->decodeLetter($romainNumber[$i + 1]) : -1;

      $result += $this->calculCurrentValue($currentValue, $nextValue);
    }
    return $result;
  }

  private function calculCurrentValue($currentValue, $nextValue)
  {
    if ($currentValue < $nextValue) {
      return (0 - $currentValue);
    } else {
      return (0 + $currentValue);
    }
  }

  private function decodeLetter(string $letter)
  {
    switch ($letter) {
      case 'I':
        return 1;
        break;
      case 'V':
        return 5;
        break;
      case 'X':
        return 10;
        break;
      case 'L':
        return 50;
        break;
      case 'C':
        return 100;
        break;
      case 'D':
        return 500;
        break;
      case 'M':
        return 1000;
        break;
      default:
        return -5000000;
    }
  }
}