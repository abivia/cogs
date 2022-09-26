<?php
/** @noinspection PhpUnused */

namespace Abivia\Cogs;

use DateTimeInterface;
use UnitEnum;

/**
 * Interface for an international postal address object.
 *
 * This represents an address stored in a data set and connected to
 * a Party or some other entity.
 *
 * Adapted from https://github.com/commerceguys/addressing
 *
 */
interface AddressInterface extends AddressProperties
{
    /**
     * The date that the address becomes in effect.
     *
     * @return DateTimeInterface
     */
    public function getEffectiveDate(): DateTimeInterface;

    /**
     * A unique identifier for this address.
     *
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * The name of the relationship (primary, billing, shipping, technical, admin, etc.)
     *
     * @return string
     */
    public function getName(): string;

    /**
     * The state of the relationship (eg. active, former)
     * @return UnitEnum|string
     */
    public function getStatus(): UnitEnum|string;

    /**
     * Retrieve the address specified by the id parameter.
     *
     * @param mixed $id
     * @return AddressInterface|null Null if no AddressInterface with this ID is found.
     */
    static public function retrieve(mixed $id): ?AddressInterface;

}
