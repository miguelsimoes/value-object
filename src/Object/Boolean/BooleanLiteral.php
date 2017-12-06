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
use MiguelSimoes\Core\ValueObject\Object\AbstractValueObject;

/**
 * Value object representation of a literal (scalar) boolean value
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
class BooleanLiteral extends AbstractValueObject
{
    /**
     * Constructor
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        if (false === \is_bool($value)) {
            /* We may only handle boolean type values for the current representation */
            throw new InvalidNativeArgumentException($value, array('bool(ean)'));
        }

        parent::__construct($value);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return  $this->value ? 'true' : 'false';
    }
}
