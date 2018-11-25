<?php

class MatchDateParts extends TaskTestCase {

  /**
   * @test
   * @testdox Match a date in the format "YYYY-MM-DD" and capture the parts into named groups (year, month, day).
   */
  public function MatchAnyUnicodeLetter(): void {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match($pattern, '2017-02-27', $match);
    $this->assertSame(1, $result);
    $this->assertArraySubset(
      ['year' => '2017', 'month'=> '02', 'day' => '27'], $match
    );
  }
}
