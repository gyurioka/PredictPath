<?php
/**
 * Tests for PredictPath
 */

use PHPUnit\Framework\TestCase;
use Predictpath\Predictpath;

class PredictpathTest extends TestCase {
    private Predictpath $instance;

    protected function setUp(): void {
        $this->instance = new Predictpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Predictpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
