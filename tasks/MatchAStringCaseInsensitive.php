<?php

class MatchAStringCaseInsensitive extends TaskTestCase {

  /**
   * @test
   * @testdox Match the string "code" case insensitive.
   */
  public function MatchCodeCaseInsensitive(): void {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'code CODE Code', $matches
    );
    $this->assertSame(3, $result);
  }
}
