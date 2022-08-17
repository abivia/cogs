<?php
/** @noinspection PhpUnused */

namespace Abivia\Cogs;

/**
 * Interface for international postal addresses.
 *
 * This defines the fields contained in an address.
 *
 * Adapted from https://github.com/commerceguys/addressing
 *
 */
interface AddressProperties
{
    /**
     * Gets the first line of address block.
     *
     * @return string|null The first line of the address block.
     */
    public function getAddressLine1(): ?string;

    /**
     * Gets the second line of address block.
     *
     * @return string|null The second line of the address block.
     */
    public function getAddressLine2(): ?string;

    /**
     * Gets the administrative area.
     *
     * Called the "state" in the United States, "region" in France, "province" in Italy,
     * "county" in Great Britain, "prefecture" in Japan, etc.
     *
     * @return string|null The administrative area. A subdivision code if there
     *                are predefined subdivision at this level.
     */
    public function getAdministrativeArea(): ?string;

    /**
     * Gets the two-letter country code.
     *
     * This is a CLDR country code, since CLDR includes additional countries
     * for addressing purposes, such as Canary Islands (IC).
     *
     * @return string|null The two-letter country code.
     */
    public function getCountryCode(): ?string;

    /**
     * Gets the dependent locality (i.e neighbourhood).
     *
     * When representing a double-dependent locality in Great Britain, includes
     * both the double-dependent locality and the dependent locality,
     * e.g. "Whaley, Langwith".
     *
     * @return string|null The administrative area. A subdivision code if there
     *                are predefined subdivisions at this level.
     */
    public function getDependentLocality(): ?string;

    /**
     * Gets the locale.
     *
     * Allows the initially-selected address format / subdivision translations
     * to be selected and used the next time this address is modified.
     *
     * @return string|null The locale.
     */
    public function getLocale(): ?string;

    /**
     * Gets the locality (i.e. city).
     *
     * Some countries do not use this field; their address lines are sufficient
     * to locate an address within a sub-administrative area.
     *
     * @return string|null The administrative area. A subdivision code if there
     *                are predefined subdivision at this level.
     */
    public function getLocality(): ?string;

    /**
     * Gets the postal code.
     *
     * The value is often alphanumeric.
     *
     * @return string|null The postal code.
     */
    public function getPostalCode(): ?string;

    /**
     * Gets the sorting code.
     *
     * For example, CEDEX in France.
     *
     * @return string|null The sorting code.
     */
    public function getSortingCode(): ?string;

}
