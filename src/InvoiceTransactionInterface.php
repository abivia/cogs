<?php
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;

/**
 * Interface for an Invoice transaction, anything pertaining to the invoice balance.
 */
interface InvoiceTransactionInterface {
    /**
     * The actual transaction amount.
     * @return string BCD string
     */
    public function amount(): string;

    /**
     * The amount requested in a gateway transaction.
     * @return string BCD string
     */
    public function captureAmount(): string;

    /**
     * The transaction currency.
     * @return string
     */
    public function currency(): string;

    /**
     * The date of the transaction.
     * @return DateTimeInterface
     */
    public function date(): DateTimeInterface;

    /**
     * Get the transaction's unique identifier.
     *
     * @return mixed
     */
    public function id(): mixed;

    /**
     * Human-readable note for internal use only.
     * @return string
     */
    public function internalNote(): string;

    /**
     * Get the unique identifier of the invoice this transaction applies to.
     *
     * @return mixed
     */
    public function invoiceId(): mixed;

    /**
     * Human-readable note (customer visible).
     * @return string
     */
    public function note(): string;

    /**
     * Retrieve the InvoiceTransaction specified by the id parameter.
     *
     * @param mixed $id
     * @return InvoiceTransactionInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?InvoiceTransactionInterface;

    /**
     * Get the source of the transaction (gateway identifier, manual, etc).
     * @return string
     */
    public function source(): string;

    /**
     * Get information from the source related to the transaction (typically JSON, etc.).
     * @return string|null
     */
    public function sourceData(): ?string;

    /**
     * Get the source transaction identifier (if any).
     * @return string|null
     */
    public function sourceId(): ?string;

    /**
     * Get the gateway status.
     * @return string|null
     */
    public function sourceStatus(): ?string;

    /**
     * Get the transaction status.
     * @return string
     */
    public function status(): string;

    /**
     * Get the transaction type
     * @return InvoiceTransactionType
     */
    public function type(): InvoiceTransactionType;

}
