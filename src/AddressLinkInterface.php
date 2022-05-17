<?php

namespace Abivia\Cogs;

use DateTimeInterface;
use UnitEnum;

interface AddressLinkInterface
{
    /**
     * The ID of the Address this relationship is to.
     *
     * @return mixed
     */
    public function addressId(): mixed;

    /**
     * The date that the relationship first becomes in effect.
     *
     * @return DateTimeInterface
     */
    public function effectiveDate(): DateTimeInterface;

    /**
     * The ID of the party this relationship is from.
     *
     * @return mixed
     */
    public function fromPartyId(): mixed;

    /**
     * Get the relationship's unique identifier.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * The name of the relationship (primary, billing, shipping, technical, admin, etc.)
     *
     * @return string
     */
    public function name(): string;

    /**
     * Retrieve the relationship specified by the id parameter.
     *
     * @param mixed $id
     * @return AddressLinkInterface|null Null if no AddressLink with this ID is found.
     */
    static public function retrieve(mixed $id): ?AddressLinkInterface;

    /**
     * The state of the relationship (eg. active, former)
     * @return UnitEnum
     */
    public function status(): UnitEnum;

}
