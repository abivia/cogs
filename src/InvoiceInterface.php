<?php
declare(strict_types=1);

namespace Abivia\Cogs;

use DateTimeInterface;
use Traversable;

interface InvoiceInterface
{
    /**
     * The current balance due.
     * @return string A BCD string in the invoice's currency.
     */
    public function balance(): string;

    public function billTo(): PartyInterface;

    /**
     * The date the invoice was cancelled, if any.
     * @return DateTimeInterface|null
     */
    public function cancelDate(): ?DateTimeInterface;

    /**
     * The date the invoice was created.
     * @return DateTimeInterface
     */
    public function createDate(): DateTimeInterface;

    /**
     * The billing currency.
     * @return string
     */
    public function currency(): string;

    /**
     * Discounts/coupons that have been applied to or are available for the invoice.
     * @return Traversable
     */
    public function discounts(): Traversable;

    /**
     * The date when payment is due.
     * @return DateTimeInterface|null
     */
    public function dueDate(): ?DateTimeInterface;

    /**
     * A list of events leading to a state transition [new state, event name, additional
     * info (eg. transaction id)
     * @return Traversable
     */
    public function history(): Traversable;

    /**
     * Get the unique identifier for this invoice.
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
     * Human-readable note (possibly customer visible).
     * @return string
     */
    public function note(): string;

    /**
     * Get the invoice number.
     *
     * @return string
     */
    public function number(): string;

    /**
     * Date the invoice has been paid in full.
     * @return DateTimeInterface|null
     */
    public function paidDate(): ?DateTimeInterface;

    public function refundDate(): ?DateTimeInterface;

    /**
     * Get the shipping charges applied to this invoice.
     * @return Traversable Contains [method, shipping ID, amount]
     */
    public function shipping(): Traversable;

    public function shipTo(): PartyInterface;

    /**
     * The current generation/payment state
     * @return string
     */
    public function state(): string;

    /**
     * The total of all line items in the invoice.
     * @return string A BCD string in the invoice's currency.
     */
    public function subTotal(): string;

    /**
     * Get the taxes applied to this invoice.
     * @return Traversable A list of TaxRate elements
     */
    public function taxes(): Traversable;

    /**
     * The invoice total.
     * @return string A BCD string in the invoice's currency.
     */
    public function total(): string;

    /**
     * A list of transactions applied to the invoice (payment, discount, credit, etc).
     * @return Traversable
     */
    public function transactions(): Traversable;

}
