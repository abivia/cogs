<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;
use Traversable;
use UnitEnum;

interface InvoiceInterface
{
    /**
     * The current balance due.
     * @return string A decimal string in the invoice's currency.
     */
    public function getBalance(): string;

    public function getBillTo(): PartyInterface;

    /**
     * The date the invoice was cancelled, if any.
     * @return DateTimeInterface|null
     */
    public function getCancelDate(): ?DateTimeInterface;

    /**
     * The date the invoice was created.
     * @return DateTimeInterface
     */
    public function getCreateDate(): DateTimeInterface;

    /**
     * The billing currency.
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Discounts/coupons that have been applied to or are available for the invoice.
     * @return Traversable
     */
    public function getDiscountList(): Traversable;

    /**
     * The date when payment is due.
     * @return DateTimeInterface|null
     */
    public function getDueDate(): ?DateTimeInterface;

    /**
     * A list of events leading to a state transition [new state, event name, additional
     * info (eg. transaction id)
     * @return Traversable
     */
    public function getHistoryList(): Traversable;

    /**
     * Get the unique identifier for this invoice.
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
     * Human-readable note (possibly customer visible).
     * @return string
     */
    public function getNote(): string;

    /**
     * Get the invoice number.
     *
     * @return string
     */
    public function getNumber(): string;

    /**
     * Date the invoice has been paid in full.
     * @return DateTimeInterface|null
     */
    public function getPaidDate(): ?DateTimeInterface;

    public function getRefundDate(): ?DateTimeInterface;

    public function getShipTo(): PartyInterface;

    /**
     * Get the shipping charges applied to this invoice.
     * @return Traversable Contains [method, shipping ID, amount]
     */
    public function getShippingList(): Traversable;

    /**
     * The current generation/payment status
     * @return UnitEnum|string
     */
    public function getStatus(): UnitEnum|string;

    /**
     * The total of all line items in the invoice.
     * @return string A BCD string in the invoice's currency.
     */
    public function getSubTotal(): string;

    /**
     * Get the taxes applied to this invoice.
     * @return Traversable A list of TaxRate elements
     */
    public function getTaxList(): Traversable;

    /**
     * The invoice total.
     * @return string A BCD string in the invoice's currency.
     */
    public function getTotal(): string;

    /**
     * A list of transactions applied to the invoice (payment, discount, credit, etc).
     * @return Traversable
     */
    public function getTransactionList(): Traversable;

    /**
     * Retrieve the invoice specified by the id parameter.
     *
     * @param mixed $id
     * @return InvoiceInterface|null Null if no Invoice with this ID is found.
     */
    static public function retrieve(mixed $id): ?InvoiceInterface;

}
