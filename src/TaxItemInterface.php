<?php
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
    public function amount(): string;

    /**
     * Get the unique identifier for this tax item.
     * @return mixed
     */
    public function id(): mixed;

    /**
     * Get the object type this TaxItem applies to.
     * @return string
     */
    public function itemType(): string;

    /**
     * Get the id of the object this item applies to.
     * @return mixed
     */
    public function itemId(): mixed;

    /**
     * Get the display name of the tax.
     * @return string
     */
    public function name(): string;

    /**
     * Get the tax rate
     * @return string A BCD coded string.
     */
    public function rate(): string;

    /**
     * Get a tax rate by ID
     * @param mixed $id
     * @return TaxItemInterface|null
     */
    public static function retrieve(mixed $id): ?TaxItemInterface;

}
