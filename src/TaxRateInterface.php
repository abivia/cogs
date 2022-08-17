<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;

/**
 * Interface for a rate of taxation
 */
interface TaxRateInterface
{
    /**
     * For hierarchical taxes, determines if this tax is compounded with previous taxes.
     * @return bool
     */
    public function getCompound(): bool;

    /**
     * The date that the tax was discontinued or was suspended, if any.
     *
     * @return DateTimeInterface|null
     */
    public function getEndDate(): ?DateTimeInterface;

    /**
     * Get the unique identifier for this tax rate.
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * Get the display name of the tax.
     * @return string
     */
    public function getName(): string;

    /**
     * Get the tax rate
     * @return string A decimal coded string.
     */
    public function getRate(): string;

    /**
     * The tax application sequence for hierarchical taxes
     * @return int
     */
    public function getSequence(): int;

    /**
     * When the tax is effective.
     *
     * @return DateTimeInterface
     */
    public function getStartDate(): DateTimeInterface;

    /**
     * Get a tax rate by ID
     * @param mixed $id
     * @return TaxRateInterface|null
     */
    public static function retrieve(mixed $id): ?TaxRateInterface;

}
