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

use MiguelSimoes\Core\ValueObject\Object\Boolean\BooleanString;
use PHPUnit\Framework\TestCase;

class BooleanStringTest extends TestCase
{
    /**
     * @expectedException \MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException
     */
    public function testInvalidConstructor()
    {
        new BooleanString('something');
    }

    public function testToBoolean()
    {
        $value = new BooleanString('true');
        $this->assertTrue($value->toBoolean());
    }
}
