<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

use Traversable;
use UnitEnum;

/**
 * Interface for a Party, either an organization or a person.
 */
interface PartyInterface
{
    /**
     * Get all the AddressInterface objects associated with this Party.
     *
     * @return Traversable A list of related AddressInterface, with the address function as the key.
     */
    public function getAddressList(): Traversable;

    /**
     * Get all the channels associated with this Party.
     *
     * @return Traversable A list of [name, type, address].
     */
    public function getChannelList(): Traversable;

    /**
     * Get the composite name of the party.
     * @return string
     */
    public function getCompositeName(): string;

    /**
     * Get the party's unique identifier.
     *
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * Get the components of the name [component type, component value]
     * @return Traversable
     */
    public function getNameList(): Traversable;

    /**
     * Get a list of parties related to this party
     *
     * @param mixed|null $filter Relationship selector (scalar or array)
     * @return Traversable A list of [relationship type, party identifier].
     */
    public function getRelationshipList(mixed $filter = []): Traversable;

    /**
     * Get the party's current status.
     *
     * @return UnitEnum|string
     */
    public function getStatus(): UnitEnum|string;

    /**
     * Get the underlying type of the Party (peson or organization)
     * @return PartyType
     */
    public function getType(): PartyType;

    /**
     * Retrieve the party specified by the id parameter.
     *
     * @param mixed $id
     * @return PartyInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?PartyInterface;

}

