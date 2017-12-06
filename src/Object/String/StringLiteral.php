<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Object\String;

use MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException;
use MiguelSimoes\Core\ValueObject\Object\AbstractValueObject;

/**
 * Value object representation of a literal (scalar) string value
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
class StringLiteral extends AbstractValueObject
{
    /**
     * {@inheritdoc}
     */
    public function __construct($value)
    {
        if (false === \is_string($value)) {
            /* We may only handle string type values for the current representation */
            throw new InvalidNativeArgumentException($value, array('string'));
        }

        parent::__construct($value);
    }

    /**
     * Gets whether we are dealing with an empty string
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return 0 === \mb_strlen($this->getValue());
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->getValue();
    }
}
