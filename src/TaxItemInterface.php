<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

/**
 * Interface for a taxed Invoice, InvoiceLine, etc.
 */
interface TaxItemInterface
{
    /**
     * Get the tax amount as a decimal string
     * @return string
     */
    public function getAmount(): string;

    /**
     * Get the unique identifier for this tax item.
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * Get the id of the object this item applies to.
     * @return mixed
     */
    public function getItemId(): mixed;

    /**
     * Get the object type this TaxItem applies to.
     * @return string
     */
    public function getItemType(): string;

    /**
     * Get the display name of the tax.
     * @return string
     */
    public function getName(): string;

    /**
     * Get the tax rate
     * @return string A BCD coded string.
     */
    public function getRate(): string;

    /**
     * Get a tax rate by ID
     * @param mixed $id
     * @return TaxItemInterface|null
     */
    public static function retrieve(mixed $id): ?TaxItemInterface;

}
