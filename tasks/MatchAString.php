<?php

class MatchAString extends \PHPUnit\Framework\TestCase {

  /**
   * Match the string "nevercodealone".
   * @test
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
