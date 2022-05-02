<?php

namespace Abivia\Cogs;

/**
 * Interface for international postal addresses.
 *
 * Adapted from https://github.com/commerceguys/addressing
 *
 */
interface AddressInterface
{
    /**
     * Gets the first line of address block.
     *
     * @return string The first line of the address block.
     */
    public function addressLine1(): string;

    /**
     * Gets the second line of address block.
     *
     * @return string The second line of the address block.
     */
    public function addressLine2(): string;

    /**
     * Gets the administrative area.
     *
     * Called the "state" in the United States, "region" in France, "province" in Italy,
     * "county" in Great Britain, "prefecture" in Japan, etc.
     *
     * @return string The administrative area. A subdivision code if there
     *                are predefined subdivision at this level.
     */
    public function administrativeArea(): string;

    /**
     * Gets the two-letter country code.
     *
     * This is a CLDR country code, since CLDR includes additional countries
     * for addressing purposes, such as Canary Islands (IC).
     *
     * @return string The two-letter country code.
     */
    public function countryCode(): string;

    /**
     * Gets the dependent locality (i.e neighbourhood).
     *
     * When representing a double-dependent locality in Great Britain, includes
     * both the double-dependent locality and the dependent locality,
     * e.g. "Whaley, Langwith".
     *
     * @return string The administrative area. A subdivision code if there
     *                are predefined subdivisions at this level.
     */
    public function dependentLocality(): string;

    /**
     * A unique identifier for this address.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * Gets the locale.
     *
     * Allows the initially-selected address format / subdivision translations
     * to be selected and used the next time this address is modified.
     *
     * @return string The locale.
     */
    public function locale(): string;

    /**
     * Gets the locality (i.e. city).
     *
     * Some countries do not use this field; their address lines are sufficient
     * to locate an address within a sub-administrative area.
     *
     * @return string The administrative area. A subdivision code if there
     *                are predefined subdivision at this level.
     */
    public function locality(): string;

    /**
     * Gets the postal code.
     *
     * The value is often alphanumeric.
     *
     * @return string The postal code.
     */
    public function postalCode(): string;

    /**
     * Retrieve the address specified by the id parameter.
     *
     * @param mixed $id
     * @return AddressInterface|null Null if no AddressInterface with this ID is found.
     */
    static public function retrieve(mixed $id): ?AddressInterface;

    /**
     * Gets the sorting code.
     *
     * For example, CEDEX in France.
     *
     * @return string The sorting code.
     */
    public function sortingCode(): string;

}
