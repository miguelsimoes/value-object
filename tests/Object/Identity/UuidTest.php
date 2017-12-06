<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Tests\Object\Identity;

use MiguelSimoes\Core\ValueObject\Object\Identity\Uuid;
use PHPUnit\Framework\TestCase;

class UuidTest extends TestCase
{
    /**
     * @expectedException \MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException
     */
    public function testInvalidConstructor()
    {
        new Uuid('string');
    }
}
