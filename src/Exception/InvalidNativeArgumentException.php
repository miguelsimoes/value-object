<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Exception;

use MiguelSimoes\Core\ValueObject\Exception\ValueObjectException;

/**
 * Exception thrown during the generation of a value object representation of a
 * scalar value
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
class InvalidNativeArgumentException extends ValueObjectException
{
    /**
     * Constructor
     *
     * @param string $value
     * @param array  $types
     */
    public function __construct($value, array $types)
    {
        parent::__construct();

        $this->message = sprintf(
            'Argument "%s" is invalid for the requested ValueObject. Allowed types are: %s', $value, implode(', ', $types)
        );
    }
}
