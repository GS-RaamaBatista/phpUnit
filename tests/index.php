<?php
require_once __DIR__ . '/../src/index.php';

use PHPUnit\Framework\TestCase;

class DurationTest extends TestCase
{
    public function testDuracaoAntesDas19()
    {
        $this->assertEquals(50, calculaDuracao('2025-05-07 18:30'));
    }

    public function testDuracaoDepoisDas19()
    {
        $this->assertEquals(50, calculaDuracao('2025-05-07 19:30'));
    }
}

// Instrução para teste: phpunit tests/index.php
