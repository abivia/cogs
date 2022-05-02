<?php
declare(strict_types=1);

namespace Abivia\Cogs;

use Traversable;
use UnitEnum;

/**
 * Interface for a Party, either an organization or a person.
 */
interface PartyInterface {
    /**
     * Get all the AddressInterface objects associated with this Party.
     *
     * @return Traversable A list of related AddressInterface, with the address function as the key.
     */
    public function addresses(): Traversable;

    /**
     * Get the composite name of the party.
     * @return string
     */
    public function compositeName(): string;

    /**
     * Get the party's unique identifier.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * Get the components of the name [component type, component value]
     * @return Traversable
     */
    public function names(): Traversable;

    /**
     * Get a list of parties related to this party
     *
     * @param PartyType|null $filter
     * @return Traversable A list of [relationship type, party identifier].
     */
    public function relationships(?PartyType $filter): Traversable;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return PartyInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?PartyInterface;

    /**
     *
     * @return UnitEnum
     */
    public function status(): UnitEnum;

    /**
     * Get the underlying type of the Party (peson or organization)
     * @return PartyType
     */
    public function type(): PartyType;

}

