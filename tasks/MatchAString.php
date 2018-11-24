<?php

class MatchAString extends \PHPUnit\Framework\TestCase {

  /**
   * @test
   * @testdox Match the string "nevercodealone".
   */
  public function MatchTheString() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'https://nevercodealone.de', $matches
    );
    $this->assertSame(1, $result);
    $this->assertCount(1, $matches[0]);
  }
}
