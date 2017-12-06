<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Object\Identity;

use MiguelSimoes\Core\ValueObject\Exception\InvalidNativeArgumentException;
use MiguelSimoes\Core\ValueObject\Object\String\StringLiteral;
use Ramsey\Uuid\Uuid as BaseUuid;

/**
 * Value object representation of an uuid string value
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
class Uuid extends StringLiteral
{
    /**
     * {@inheritdoc}
     */
    public function __construct($value = null)
    {
        if (null === $value) {
            /* We do not have a value, so we will need to generate one */
            $value = BaseUuid::uuid1();
        }
        #
        # We will need to validate whether the provided value is valid
        if (in_array(\preg_match('/'. BaseUuid::VALID_PATTERN .'/', $value), [0, false])) {
            /* We were not provided with a valid UUID, so we will be able to create the value representation */
            throw new InvalidNativeArgumentException($value, ['UUID string']);
        }

        parent::__construct(\strval($value));
    }
}
