<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\ValueObject\Object;

use MiguelSimoes\Core\ValueObject\ValueObjectInterface;

/**
 * Agnostic implementation of a value object
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
abstract class AbstractValueObject implements ValueObjectInterface
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * Constructor
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function classEquals(ValueObjectInterface $object): bool
    {
        return \get_class($this) === \get_class($object);
    }

    /**
     * {@inheritdoc}
     */
    public function equals($object): bool
    {
        if (false === $object instanceof ValueObjectInterface) {
            /* We are not dealing with a value object, so we will not be able to make the validation */
            return false;
        }

        return $this->classEquals($this, $object) && $this->getValue() === $object->getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }
}
