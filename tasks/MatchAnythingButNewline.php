<?php

class MatchAnythingButNewline extends \PHPUnit\Framework\TestCase {

  /**
   * Match a string in the pattern "cc.cc.cc.cc"
   * (four groups of two characters separated by dots).
   * @test
   */
  public function MatchFourGroupsOfTwoCharacters() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern,
      "ab.cd.ef.gh\na\n.b\n.d\n.e\n\nabcdefghiklm",
      $matches
    );
    $this->assertSame(1, $result);
    $this->assertCount(1, $matches[0]);
  }
}