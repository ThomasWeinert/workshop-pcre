<?php

class MatchDigitsAndNonDigits extends \PHPUnit\Framework\TestCase {

  /**
   * @test
   * @testdox Match a string like xxXxxXxxxx, x representing a digit, X a non-digit.
   */
  public function MatchDigitsSeparatedByNonDigits() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, "12.34.5678\n123456789\nab.cd.efgh",
      $matches
    );
    $this->assertSame(1, $result);
    $this->assertCount(1, $matches[0]);
  }
}
