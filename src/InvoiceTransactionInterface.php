<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;

/**
 * Interface for an Invoice transaction, anything pertaining to the invoice balance.
 */
interface InvoiceTransactionInterface
{
    /**
     * The actual transaction amount.
     * @return string BCD string
     */
    public function getAmount(): string;

    /**
     * The amount requested in a gateway transaction.
     * @return string BCD string
     */
    public function getCaptureAmount(): string;

    /**
     * The transaction currency.
     * @return string
     */
    public function getCurrency(): string;

    /**
     * The date of the transaction.
     * @return DateTimeInterface
     */
    public function getDate(): DateTimeInterface;

    /**
     * Get the transaction's unique identifier.
     *
     * @return mixed
     */
    public function getId(): mixed;

    /**
     * Human-readable note for internal use only.
     * @return string
     */
    public function getInternalNote(): string;

    /**
     * Get the unique identifier of the invoice this transaction applies to.
     *
     * @return mixed
     */
    public function getInvoiceId(): mixed;

    /**
     * Human-readable note (customer visible).
     * @return string
     */
    public function getNote(): string;

    /**
     * Get the source of the transaction (gateway identifier, manual, etc).
     * @return string
     */
    public function getSource(): string;

    /**
     * Get information from the source related to the transaction (typically JSON, etc.).
     * @return string|null
     */
    public function getSourceData(): ?string;

    /**
     * Get the source transaction identifier (if any).
     * @return string|null
     */
    public function getSourceId(): ?string;

    /**
     * Get the gateway status.
     * @return string|null
     */
    public function getSourceStatus(): ?string;

    /**
     * Get the transaction status.
     * @return string
     */
    public function getStatus(): string;

    /**
     * Get the transaction type
     * @return InvoiceTransactionType
     */
    public function getType(): InvoiceTransactionType;

    /**
     * Retrieve the InvoiceTransaction specified by the id parameter.
     *
     * @param mixed $id
     * @return InvoiceTransactionInterface|null Null if no Party with this ID is found.
     */
    static public function retrieve(mixed $id): ?InvoiceTransactionInterface;

}
