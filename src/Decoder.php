<?php

namespace App;

class Decoder
{
  private array $decoderRomain;
  private array $decoderTen;
  private int $result;
  private string $romain;

  public function __construct()
  {
    $this->decoderRomain =
      [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
      ];

    $this->decoderTen =
      [
        1 => 'I',
        4 => 'IV',
        5 => 'V',
        9 => 'IX',
        10 => 'X',
        40 => 'XL',
        50 => 'L',
        90 => 'XC',
        100 => 'C',
        400 => 'CD',
        500 => 'D',
        900 => 'CM',
        1000 => 'M'
      ];
  }

  public function romainTo10(string $romainNumber)
  {
    $result = 0;
    $length =  strlen($romainNumber);

    for ($i = 0; $i < $length; $i++) {
      $currentValue = $this->decoderRomain[$romainNumber[$i]];
      $nextValue = ($i + 1 < $length) ? $this->decoderRomain[$romainNumber[$i + 1]] : -1;

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

  private function convert(int $value): void
  {
    while ($this->result >= $value) {
      $this->result = $this->result - $value;
      $this->romain = $this->romain . $this->decoderTen[$value];
    }
  }

  public function tenToRomain(int $value): string
  {
    $this->result = $value;
    $this->romain = '';

    $this->convert(1000);
    $this->convert(900);
    $this->convert(500);
    $this->convert(400);
    $this->convert(100);
    $this->convert(90);
    $this->convert(50);
    $this->convert(40);
    $this->convert(10);
    $this->convert(9);
    $this->convert(5);
    $this->convert(4);
    $this->convert(1);

    return $this->romain;
  }
}