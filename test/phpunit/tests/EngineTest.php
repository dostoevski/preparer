<?php
/**
 * @author Malofeykin Andrey <and-rey2@yandex.ru>
 * @copyright Dostoevski (https://github.com/dostoevski)
 * @license MIT License
 * @see https://github.com/dostoevski/preparer for the canonical source repository
 */
namespace Dostoevski\Preparer\PhpUnit\Test;

use PHPUnit\Framework\TestCase;
use Dostoevski\Preparer\Engine;

/**
 * Class EngineTest
 * @package Dostoevski\Preparer\PhpUnit\Test
 */
class EngineTest extends TestCase
{
    /**
     * Проверка генерации xml
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function testBuild()
    {
        $engine = new Engine();
        $xml = $engine->build();

        $this->assertEquals('dummy', $xml);
    }
}
