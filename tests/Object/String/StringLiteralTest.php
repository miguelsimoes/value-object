<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Tests\Object\String;

use MiguelSimoes\Core\ValueObject\Object\String\StringLiteral;
use PHPUnit\Framework\TestCase;

class StringLiteralTest extends TestCase
{
    /**
     * @var StringLiteral
     */
    private $value;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->value = new StringLiteral('content');
    }

    /**
     * @expectedException \MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException
     */
    public function testInvalidConstructor()
    {
        new StringLiteral(true);
    }

    public function testIsEmpty()
    {
        $this->assertFalse($this->value->isEmpty());
    }

    public function testToString()
    {
        $this->assertEquals('content', (string) $this->value);
    }
}
