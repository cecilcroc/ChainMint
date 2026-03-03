<?php
/**
 * Tests for ChainMint
 */

use PHPUnit\Framework\TestCase;
use Chainmint\Chainmint;

class ChainmintTest extends TestCase {
    private Chainmint $instance;

    protected function setUp(): void {
        $this->instance = new Chainmint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainmint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
