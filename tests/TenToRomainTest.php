<?php

namespace App\Tests;

use App\Decoder;
use PHPUnit\Framework\TestCase;

class TenToRomainTest extends TestCase
{
  private Decoder $decoder;

  public function setUp(): void
  {
    $this->decoder = new Decoder();
  }

  public function test_4888_should_be_decoded_to_MMMMDCCCLXXXVIII()
  {
    $this->assertEquals('MMMMDCCCLXXXVIII', $this->decoder->tenToRomain(4888));
  }

  public function test_4944_should_be_decoded_to_MMMMCMXLIV()
  {
    $this->assertEquals('MMMMCMXLIV', $this->decoder->tenToRomain(4944));
  }

  public function test_1_should_be_decoded_to_I()
  {
    $this->assertEquals('I', $this->decoder->tenToRomain(1));
  }

  public function test_2_should_be_decoded_to_II()
  {
    $this->assertEquals('II', $this->decoder->tenToRomain(2));
  }

  public function test_3_should_be_decoded_to_III()
  {
    $this->assertEquals('III', $this->decoder->tenToRomain(3));
  }

  public function test_4_should_be_decoded_to_IV()
  {
    $this->assertEquals('IV', $this->decoder->tenToRomain(4));
  }

  public function test_5_should_be_decoded_to_V()
  {
    $this->assertEquals('V', $this->decoder->tenToRomain(5));
  }

  public function test_9_should_be_decoded_to_IX()
  {
    $this->assertEquals('IX', $this->decoder->tenToRomain(9));
  }

  public function test_10_should_be_decoded_to_X()
  {
    $this->assertEquals('X', $this->decoder->tenToRomain(10));
  }

  public function test_40_should_be_decoded_to_XL()
  {
    $this->assertEquals('XL', $this->decoder->tenToRomain(40));
  }

  public function test_50_should_be_decoded_to_L()
  {
    $this->assertEquals('L', $this->decoder->tenToRomain(50));
  }

  public function test_90_should_be_decoded_to_XC()
  {
    $this->assertEquals('XC', $this->decoder->tenToRomain(90));
  }

  public function test_100_should_be_decoded_to_C()
  {
    $this->assertEquals('C', $this->decoder->tenToRomain(100));
  }

  public function test_400_should_be_decoded_to_CD()
  {
    $this->assertEquals('CD', $this->decoder->tenToRomain(400));
  }

  public function test_500_should_be_decoded_to_D()
  {
    $this->assertEquals('D', $this->decoder->tenToRomain(500));
  }

  public function test_900_should_be_decoded_to_CM()
  {
    $this->assertEquals('CM', $this->decoder->tenToRomain(900));
  }

  public function test_1000_should_be_decoded_to_M()
  {
    $this->assertEquals('M', $this->decoder->tenToRomain(1000));
  }
}