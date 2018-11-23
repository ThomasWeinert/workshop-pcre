<?php

class MatchAStringCaseInsensitive extends \PHPUnit\Framework\TestCase {

  /**
   * Match the string "code" case insensitive.
   * @test
   */
  public function MatchCodeCaseInsensitive() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'code CODE Code', $matches
    );
    $this->assertSame(3, $result);
  }
}
