<?php

namespace App\Tests;

use App\Decoder;
use PHPUnit\Framework\TestCase;

class RomainTo10Test extends TestCase
{
  private Decoder $decoder;

  public function setUp(): void
  {
    $this->decoder = new Decoder();
  }

  public function test_it_should_be_4888()
  {
    $this->assertEquals(4888, $this->decoder->romainTo10("MMMMDCCCLXXXVIII"));
  }

  public function test_it_should_be_1515()
  {
    $this->assertEquals(1515, $this->decoder->romainTo10("MDXV"));
  }

  public function test_it_should_be_2020()
  {
    $this->assertEquals(2020, $this->decoder->romainTo10("MMXX"));
  }

  public function test_it_should_be_509()
  {
    $this->assertEquals(509, $this->decoder->romainTo10("DIX"));
  }

  public function test_it_should_be_1()
  {
    $this->assertEquals(1, $this->decoder->romainTo10("I"));
  }

  public function test_it_should_be_5()
  {
    $this->assertEquals(5, $this->decoder->romainTo10("V"));
  }

  public function test_it_should_be_10()
  {
    $this->assertEquals(10, $this->decoder->romainTo10("X"));
  }

  public function test_it_should_be_50()
  {
    $this->assertEquals(50, $this->decoder->romainTo10("L"));
  }

  public function test_it_should_be_100()
  {
    $this->assertEquals(100, $this->decoder->romainTo10("C"));
  }

  public function test_it_should_be_500()
  {
    $this->assertEquals(500, $this->decoder->romainTo10("D"));
  }

  public function test_it_should_be_1000()
  {
    $this->assertEquals(1000, $this->decoder->romainTo10("M"));
  }

  public function test_it_should_be_2()
  {
    $this->assertEquals(2, $this->decoder->romainTo10("II"));
  }

  public function test_it_should_be_4()
  {
    $this->assertEquals(4, $this->decoder->romainTo10("IV"));
  }

  public function test_it_should_be_99()
  {
    $this->assertEquals(99, $this->decoder->romainTo10("XCIX"));
  }
}