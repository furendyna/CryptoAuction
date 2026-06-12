<?php
/**
 * Tests for CryptoAuction
 */

use PHPUnit\Framework\TestCase;
use Cryptoauction\Cryptoauction;

class CryptoauctionTest extends TestCase {
    private Cryptoauction $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoauction(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoauction::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
