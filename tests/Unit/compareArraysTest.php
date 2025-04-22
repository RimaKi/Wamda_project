<?php

namespace Tests\Unit;

use App\Services\ResultService;
use PHPUnit\Framework\TestCase;

class compareArraysTest extends TestCase
{
    protected function callProtectedMethod($object, string $methodName, array $args = [])
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        return $method->invokeArgs($object, $args);
    }

    public function testCompareArraysUnordered()
    {
        $service = new ResultService();

        $result = $this->callProtectedMethod($service, 'compareArrays', [
            ['a', 'b', 'c'], 'b;c;a', false
        ]);

        $this->assertTrue($result);
    }

    public function testCompareArraysStrictOrder()
    {
        $service = new ResultService();

        $result = $this->callProtectedMethod($service, 'compareArrays', [
            ['a', 'b', 'c'], 'a;b;c', true
        ]);

        $this->assertTrue($result);
    }

    public function testCompareArraysStrictOrderFail()
    {
        $service = new ResultService();

        $result = $this->callProtectedMethod($service, 'compareArrays', [
            ['a', 'b', 'c'], 'b;a;c', true
        ]);

        $this->assertFalse($result);
    }
}
