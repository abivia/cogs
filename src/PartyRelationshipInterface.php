<?php
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;
use UnitEnum;

/**
 * Interface for a party, either an organization or a person, that there is a relationship with.
 *
 * Based on the OASIS CIQ TC - extensible Party Relationships Language (xPRL) version 3.0
 */
interface PartyRelationshipInterface {

    /**
     * The date that the relationship ended or was suspended, if any.
     *
     * @return DateTimeInterface|null
     */
    public function endDate(): ?DateTimeInterface;

    /**
     * The reason for the relationship ending or being suspended (if any).
     *
     * @return string|null
     */
    public function endReason(): ?string;

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
     * The priority (strength of relationship) between the parties.
     *
     * @return UnitEnum
     */
    public function priority(): UnitEnum;

    /**
     * A hierarchical relativity between the parties. Positive when the fromParty has a higher
     * hierarchical position, Negative when lower, zero when equal, and null when not defined.
     *
     * @return int|null
     */
    public function relativity(): ?int;

    /**
     * Retrieve the relationship specified by the id parameter.
     *
     * @param mixed $id
     * @return PartyRelationshipInterface|null Null if no PartyRelationship with this ID is found.
     */
    static public function retrieve(mixed $id): ?PartyRelationshipInterface;

    /**
     * The name of the relationship from the fromParty to the toParty.
     *
     * @return UnitEnum
     */
    public function role(): UnitEnum;

    /**
     * When the relationship was established, if known.
     *
     * @return DateTimeInterface|null
     */
    public function startDate(): ?DateTimeInterface;

    /**
     * The reason for establishing the relationship, if known.
     *
     * @return string|null
     */
    public function startReason(): ?string;

    /**
     * The state of the relationship (eg. active, terminated, potential, etc.)
     * @return UnitEnum
     */
    public function status(): UnitEnum;

    /**
     * The ID of the party this relationship is to.
     *
     * @return mixed
     */
    public function toPartyId(): mixed;

}
