<?php
/** @noinspection AutoloadingIssuesInspection */

use PHPUnit\Framework\TestCase;

class TaskTestCase extends TestCase {

  /**
   * @param string $pattern
   * @param string $subject
   * @param bool $shouldMatch
   */
  public function testPatternMatch($pattern, $subject, $shouldMatch): void {
    $result = (bool)\preg_match($pattern, $subject);
    if ($shouldMatch) {
      $this->assertTrue($result);
    } else {
      $this->assertFalse($result);
    }
  }
}
