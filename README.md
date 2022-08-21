# Abivia Cogs

Cogs is a suite of interfaces for common objects, primarily used in business and ecommerce (but
not limited to that scope).

Cogs is a work in progress. The interfaces are not complete or stable. There are more 
interfaces yet to be defined. The interfaces have been heavily influenced by OASIS
recommendations.

The intent is to achieve some level of interoperability between applications by having them
conform to these interfaces.

Suggestions, comments, and contributions are welcome.

## Installation

Via composer:

```composer require abivia/cogs```

## Enums

### InvoiceTransactionType

This defines the types of transactions that can be applied to an invoice (debit, credit, or
non balance affecting)

### PartyType

This identifies the two basic types of Party: individuals and organizations.

## Interfaces

Most interfaces are designed to represent objects that are stored in a data set and are retrievable
by a unique identifier.

### AddressInterface

An AddressInterface represents an address that's stored in a data set. The interface
is adapted from [commerceguys/addressing](https://github.com/commerceguys/addressing)
which in turn is adapted from open standards. Cogs uses an international
nomenclature for addresses, so there are accessors for locality() rather than city().

### AddressProperties

The AddressProperties interface defines accessors for objects that contain address-like
information, for example a geocoded location.

### ChannelInterface

A ChannelInterface defines a Communications Channel, a way to contact a party independent
of medium. A channel can define a connection by phone, email, chat, etc.

### HistoryInterface

A HistoryInterface represents an interaction with an object. This is intentionally
abstract. A history record could document up/down transitions in a service or log
a history of conversations with a Party.

### InvoiceInterface

This interface provides a standard definition for an invoice, including the
related parties, amounts, tax rules, and status.

### InvoiceTransactionInterface

This interface represents anything that affects the balance or payment parameters
of an invoice.

### PartyInterface

The Party interface represents a person or organizational entity (corporation,
government, school, etc.).

### PartyRelationshipInterface

The Party relationship interface defines a link between two parties. The interface
is used to represent commercial relations (vendor, supplier), person to person
relations (manager, employee), etc.

### TaxItemInterface

The Tax Item interface represents the application of a Tax Rate. The rate may be
applied to an invoice, to individual items in an invoice, or at any point where
a specific tax amount is payable.

### TaxRateInterface

A Tax Rate is an amount of tax that will be applied to a transaction.

## Donations welcome

If you're getting something out of Cogs, you can sponsor us in any amount you wish using Liberapay
Liberapay is itself run on donations and charges no fees beyond bank charges.
[![Liberapay](https://liberapay.com/assets/widgets/donate.svg)](https://liberapay.com/abivia/donate)
