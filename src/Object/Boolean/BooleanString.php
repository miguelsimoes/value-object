<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Object\Boolean;

use MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException;
use MiguelSimoes\Core\ValueObject\Object\String\StringLiteral;

/**
 * Value object representation of a boolean string value
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
class BooleanString extends StringLiteral
{
    /**
     * {@inheritdoc}
     */
    public function __construct($value)
    {
        if (null === \filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
            /* We were not able to retrieve a valid boolean value from the provided value */
            throw new InvalidNativeArgumentException($value, array('string (boolean value)'));
        }

        parent::__construct($value);
    }

    /**
     * Gets the boolean value of the boolean string representation
     *
     * @return bool
     */
    public function toBoolean(): bool
    {
        return \filter_var($this->getValue(), FILTER_VALIDATE_BOOLEAN);
    }
}
