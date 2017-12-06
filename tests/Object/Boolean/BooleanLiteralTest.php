<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Tests\Object\Boolean;

use MiguelSimoes\Core\ValueObject\Object\Boolean\BooleanLiteral;
use PHPUnit\Framework\TestCase;

class BooleanLiteralTest extends TestCase
{
    /**
     * @var BooleanLiteral
     */
    protected $value;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->value = new BooleanLiteral(true);
    }

    public function testClassEquals()
    {
        $this->assertTrue($this->value->classEquals(new BooleanLiteral(true)));
    }

    public function testEquals()
    {
        $object = new BooleanLiteral(true);
        $this->assertTrue($this->value->equals($object));
    }

    /**
     * @expectedException \MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException
     */
    public function testInvalidConstructor()
    {
        new BooleanLiteral('string');
    }

    public function testInvalidEquals()
    {
        $this->assertFalse($this->value->equals(true), '->equals() should return false if parameter is not a ValueObject instance');
        $this->assertFalse($this->value->equals(new BooleanLiteral(false)));
    }

    public function testGetValue()
    {
        $this->assertTrue($this->value->getValue());
    }

    public function testToString()
    {
        $this->assertEquals('true', (string) $this->value);
    }
}
