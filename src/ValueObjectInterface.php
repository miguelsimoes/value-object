<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject;

use MiguelSimoes\Core\Equalable\Equalable;
use MiguelSimoes\Core\Stringable\Stringable;

/**
 * Definition of the contract required for a value object representation
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
interface ValueObjectInterface extends Stringable, Equalable
{
    /**
     * Gets whether the provided class object is of the same type as the current one
     *
     * @param ValueObject $object
     *
     * @return bool
     */
    public function classEquals(ValueObject $object): bool;

    /**
     * Gets the value of the object being represented
     *
     * @return mixed
     */
    public function getValue();
}
